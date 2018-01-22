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



    public function getDNH()
    {
        $url = "https://hatinh.top/load-dnh";

        $client = new Client();

        $crawler = $client->request('GET', $url);

        $crawler->filter('table>tbody>tr')->each(function ($node) {
            if ($node->filter('td')->count() > 0) {


                print($node->filter('td')->eq(0)->text() . "<br>");
                print($node->filter('td')->eq(1)->text() . "<br>");
                print($node->filter('td')->eq(2)->text() . "<br>");
                print($node->filter('td')->eq(3)->text() . "<hr>");

                $dnh = new dnhcqnn();
                $dnh->doanhnghiep = $node->filter('td')->eq(1)->text();
                $dnh->cauhoi = $node->filter('td')->eq(0)->text();
                $dnh->ngayhoi = Carbon::parse($node->filter('td')->eq(2)->text());
                $dnh->ngaytraloi = Carbon::parse($node->filter('td')->eq(2)->text());
                $dnh->coquantraloi = $node->filter('td')->eq(3)->text();

                $dnh->daduyet = '1';
                $dnh->save();
            }
        });
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

//                    print $node->filter('a.icon_preview')->attr('href')."<br>";

                }
            });
        }

        return redirect()->back();
    }


    public function getLLV()
    {

//        LichCongTac::where('loaitin_id','74')->delete();

        $client = new Client();

        for ($i=1;$i<4;$i++) {

            $url = 'http://dhtn.hatinh.gov.vn/dhtn/portal/folder/chuong-trinh-cong-tac/'.$i.'.htm';

            $crawler = $client->request('GET', $url);

            $crawler->filter('table>tbody>tr')->each(function ($node) {

                if ($node->filter('td')->count() > 0) {

                    $exist = LichCongTac::where('slug', str_slug($node->filter('td')->eq(1)->text()))->first();

                    if (empty($exist)) {

                        $vb = new LichCongTac;
                        $vb->user_id = Auth::user()->id;
                        $vb->loaitin_id = '74';
                        $vb->name = trim($node->filter('td')->eq(1)->text());
                        $vb->slug = str_slug($node->filter('td')->eq(1)->text());
                        $vb->noidung = 'http://dhtn.hatinh.gov.vn' . trim($node->filter('td>a')->attr('href'));
                        $vb->daduyet = '1';
                        $vb->save();

                        $vbkid = $vb->id;

                        $tvbk = new TepVanBanKhac();

                        $tvbk->vanbankhac_id = $vbkid;

                        $tvbk->path = 'http://dhtn.hatinh.gov.vn' . trim($node->filter('td>a')->attr('href'));

                        $tvbk->save();
                    }

                }
            });
        }

//        $llv = LichCongTac::where('loaitin_id','74')->get();
//
//        return response()->json($llv);

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

    public function getTinTT()
    {
        for ($i=1;$i<6;$i++) {

            $url = "http://dhtn.hatinh.gov.vn/dhtn/portal/folder/tin-trong-tinh/" . $i . ".html";

            $client = new Client();

            $crawler = $client->request('GET', $url);

            $links_count = $crawler->filter('.page_news > div')->count();

            if ($links_count > 0) {


                $crawler->filter('.page_news > div')->each(function ($node) {

                    $exist = TinTuc::where('slug', str_slug(trim($node->filter('.news_title>a')->text())))->first();

                    if (empty($exist)) {


                        $tintuc = new TinTuc;

                        $tintuc->user_id = Auth::user()->id;

                        $tintuc->loaitin_id = '1';

                        $tintuc->name = trim($node->filter('.news_title>a')->text());

                        $tintuc->slug = str_slug(trim($node->filter('.news_title>a')->text()));

                        $tintuc->avatar = trim($node->filter('img')->attr('src'));

                        $tintuc->gioithieu = trim($node->filter('p.news_summary')->text());

                        $tintuc->noidung = trim($node->filter('p.news_summary')->text());

                        $tintuc->nguon = 'http://dhtn.hatinh.gov.vn' . trim($node->filter('.news_title>a')->attr('href'));

                        $tintuc->ngaydang = Carbon::parse(str_replace('/', '-', $node->filter('p>em')->text()));

                        $tintuc->save();

                    }

                });


            } else {

                echo "No Links Found ".$i;
            }
        }

        return redirect()->back();
    }

    public function getTinTN()
    {
        for ($i=1;$i<5;$i++) {

            $url = "http://dhtn.hatinh.gov.vn/dhtn/portal/folder/tin-trong-nuoc/" . $i . ".html";

            $client = new Client();

            $crawler = $client->request('GET', $url);

            $links_count = $crawler->filter('.page_news > div')->count();

            if ($links_count > 0) {


                $crawler->filter('.page_news > div')->each(function ($node) {

                    $exist = TinTuc::where('slug', str_slug(trim($node->filter('.news_title>a')->text())))->first();

                    if (empty($exist)) {

                        $tintuc = new TinTuc;

                        $tintuc->user_id = Auth::user()->id;

                        $tintuc->loaitin_id = '2';

                        $tintuc->name = trim($node->filter('.news_title>a')->text());

                        $tintuc->slug = str_slug(trim($node->filter('.news_title>a')->text()));

                        $tintuc->avatar = trim($node->filter('img')->attr('src'));

                        $tintuc->gioithieu = trim($node->filter('p.news_summary')->text());

                        $tintuc->noidung = trim($node->filter('p.news_summary')->text());

                        $tintuc->nguon = 'http://dhtn.hatinh.gov.vn' . trim($node->filter('.news_title>a')->attr('href'));

                        $tintuc->ngaydang = Carbon::parse(str_replace('/', '-', $node->filter('p>em')->text()));

                        $tintuc->save();

                    }

                });


            } else {

                echo "No Links Found ".$i;
            }
        }

        return redirect()->back();
    }

    public function getTinQT()
    {
        for ($i=1;$i<3;$i++) {

            $url = "http://dhtn.hatinh.gov.vn/dhtn/portal/folder/tin-quoc-te/" . $i . ".html";

            $client = new Client();

            $crawler = $client->request('GET', $url);

            $links_count = $crawler->filter('.page_news > div')->count();

            if ($links_count > 0) {


                $crawler->filter('.page_news > div')->each(function ($node) {

                    $exist = TinTuc::where('slug', str_slug(trim($node->filter('.news_title>a')->text())))->first();

                    if (empty($exist)) {


                        $tintuc = new TinTuc;

                        $tintuc->user_id = Auth::user()->id;

                        $tintuc->loaitin_id = '3';

                        $tintuc->name = trim($node->filter('.news_title>a')->text());

                        $tintuc->slug = str_slug(trim($node->filter('.news_title>a')->text()));

                        $tintuc->avatar = trim($node->filter('img')->attr('src'));

                        $tintuc->gioithieu = trim($node->filter('p.news_summary')->text());

                        $tintuc->noidung = trim($node->filter('p.news_summary')->text());

                        $tintuc->nguon = 'http://dhtn.hatinh.gov.vn' . trim($node->filter('.news_title>a')->attr('href'));

                        $tintuc->ngaydang = Carbon::parse(str_replace('/', '-', $node->filter('p>em')->text()));

                        $tintuc->save();

                    }

                });


            } else {

                echo "No Links Found ".$i;
            }
        }

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
