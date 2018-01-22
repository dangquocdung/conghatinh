<?php

namespace App\Http\Controllers;

use App\DichVuCong;
use App\TepVanBanKhac;
use App\TinTuc;
use Illuminate\Http\Request;
use Goutte\Client;
use App\LichCongTac;
use Illuminate\Support\Facades\Auth;
use App\VanBan;
use App\TepVanBan;
use Carbon\Carbon;
use App\dnhcqnn;

class DichVuCongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');
    }



    public function getBaoHaTinh()
    {

        $urlArray = [
            'http://baohatinh.vn/rss/xa-hoi.xml',
            'http://baohatinh.vn/rss/chinh-tri.xml',
            'http://baohatinh.vn/rss/phap-luat.xml',
            'http://baohatinh.vn/rss/kinh-te.xml',
            'http://baohatinh.vn/rss/quoc-phong-an-ninh.xml',
            'http://baohatinh.vn/rss/van-hoa-giai-tri.xml'];


        foreach ($urlArray as $url) {

            $client = new Client();

            $crawler = $client->request('GET', $url);

            $links_count = $crawler->filter('item')->count();

            if ($links_count > 0) {

                $crawler->filter('item')->each(function ($node) {

                    $name = $node->filter('title')->text(); // String. You have extracted description part from your feed

                    $slug = str_slug($name);

                    $url = $node->filter('link')->text(); // String. You have extracted description part from your feed

                    $desc = $node->filter('description')->text();


                    //Them tin tuc

                    $exist = TinTuc::where('slug', $slug)->first();

                    if (empty($exist)) {

                        $tintuc = new TinTuc;

                        $tintuc->user_id = '2';

                        if (strpos($desc,'<i>(Baohatinh.vn)</i>') > 0){

                            $tintuc->loaitin_id = 1;

                        }else{

                            $tintuc->loaitin_id = 2;

                        }

                        $tintuc->name = $name;
                        $tintuc->slug = $slug;
                        $start = strpos($desc,'src="') + 5;
                        $end = strpos($desc,'" />');
                        $tintuc->avatar = 'http://baohatinh.vn'.substr($desc,$start,$end-$start);

                        $partern = '/(<\/?i>)/';
                        $replacement = '';
                        $tintuc->gioithieu = preg_replace($partern, $replacement,substr($desc,strpos($desc,'<br />') + 6));
                        
                        $tintuc->noidung = substr($desc,strpos($desc,'<br />') + 6);
                        $tintuc->nguon = "<a href='".$url."' target='_blank'> baohatinh.vn</a>";
                        $tintuc->ngaydang = Carbon::parse($node->filter('pubDate')->text());

                        $tintuc->save();

                    };

                });


            } else {

                echo "No item found ";
            }
        };


        $client = new Client();

        $crawler = $client->request('GET', 'http://baohatinh.vn/rss/quoc-te.xml');

        $links_count = $crawler->filter('item')->count();

        if ($links_count > 0) {

            $crawler->filter('item')->each(function ($node) {

                $name = $node->filter('title')->text(); // String. You have extracted description part from your feed

                $slug = str_slug($name);

                $url = $node->filter('link')->text(); // String. You have extracted description part from your feed

                $desc = $node->filter('description')->text();


                //Them tin tuc

                $exist = TinTuc::where('slug', $slug)->first();

                if (empty($exist)) {

                    $tintuc = new TinTuc;

                    $tintuc->user_id = '2';

                    $tintuc->loaitin_id = 3;

                    $tintuc->name = $name;
                    $tintuc->slug = $slug;
                    $start = strpos($desc,'src="') + 5;
                    $end = strpos($desc,'" />');
                    $tintuc->avatar = 'http://baohatinh.vn'.substr($desc,$start,$end-$start);
                    $tintuc->gioithieu = substr($desc,strpos($desc,'<br />') + 6);
                    $tintuc->noidung = substr($desc,strpos($desc,'<br />') + 6);
                    $tintuc->nguon = "<a href='".$url."' target='_blank'> baohatinh.vn</a>";
                    $tintuc->ngaydang = Carbon::parse($node->filter('pubDate')->text());

                    $tintuc->save();

                };

            });


        } else {

            echo "No item found ";
        }

        return redirect()->route('tin-tuc-su-kien');

    }



    public function getCDDH()
    {

//        VanBan::where('loaitin_id','38')->delete();

        for ($i=1;$i<10;$i++) {

            $url = "http://dhtn.hatinh.gov.vn/dhtn/portal/folder/cong-van/" . $i . ".html";;

            $client = new Client();

            $crawler = $client->request('GET', $url);

            $crawler->filter('table>tbody>tr')->each(function ($node) {



                if ($node->filter('td')->count() > 0) {

                    if (strlen(trim($node->filter('td')->eq(0)->text())) > 0){

                        $exist = VanBan::where('kihieuvb',trim($node->filter('td')->eq(0)->text()))->where('slug',str_slug(trim($node->filter('td')->eq(1)->text())))->first();

                        if (empty($exist)) {

                            $vb = new VanBan();
                            $vb->user_id = Auth::user()->id;
                            $vb->loaitin_id = '38';
                            $vb->kihieuvb = trim($node->filter('td')->eq(0)->text());
                            $vb->ngaybanhanh = Carbon::now();
                            $vb->trichyeu = trim($node->filter('td')->eq(1)->text());
                            $vb->slug = str_slug(trim($node->filter('td')->eq(1)->text()));
                            $vb->daduyet = '1';
                            $vb->save();

                            $vbid = $vb->id;

                            $tvbn = new TepVanBan;

                            $tvbn->vanban_id = $vbid;

                            $tvbn->path = 'http://dhtn.hatinh.gov.vn' . trim($node->filter('a.icon_preview')->attr('href'));

                            $tvbn->save();
                        }

                    }



//                    print $node->filter('a.icon_preview')->attr('href')."<br>";

                }
            });
        }

        return redirect()->back();
    }



    public function getVBM()
    {

//        VanBan::where('loaitin_id','90')->delete();

        $client = new Client();

        $crawler = $client->request('GET', 'http://congbao.hatinh.gov.vn/vbpq_hatinh.nsf/VwAllDocNew');

        $crawler->filter('td > table > tr')->each(function ($node) {

            if ($node->filter('td')->count() >0){

                $exist = VanBan::where('kihieuvb',trim($node->filter('td')->eq(1)->text()))->where('slug',str_slug(trim($node->filter('td')->eq(3)->text())))->first();

                if (empty($exist)){

                    $vb = new VanBan;

                    $vb->user_id = Auth::user()->id;

                    $vb->loaitin_id = '90';
                    $vb->kihieuvb = trim($node->filter('td')->eq(1)->text());

                    $vb->ngaybanhanh = Carbon::parse(trim( str_replace("/","-", $node->filter('td')->eq(2)->text())  )  );

                    $vb->trichyeu = trim($node->filter('td')->eq(4)->text());
                    $vb->slug = str_slug(trim($node->filter('td')->eq(4)->text()));
                    $vb->daduyet = '1';
                    $vb->save();

                    $vbid = $vb->id;

                    $tvbn = new TepVanBan;

                    $tvbn->vanban_id = $vbid;

                    $tvbn->path = 'http://qppl.hatinh.gov.vn'.trim($node->filter('a')->attr('href'));

                    $tvbn->save();
                }

            }

        });

        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DichVuCong  $dichVuCong
     * @return \Illuminate\Http\Response
     */
    public function show(DichVuCong $dichVuCong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DichVuCong  $dichVuCong
     * @return \Illuminate\Http\Response
     */
    public function edit(DichVuCong $dichVuCong)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DichVuCong  $dichVuCong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DichVuCong $dichVuCong)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DichVuCong  $dichVuCong
     * @return \Illuminate\Http\Response
     */
    public function destroy(DichVuCong $dichVuCong)
    {
        //
    }
}
