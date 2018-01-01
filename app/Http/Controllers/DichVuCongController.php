<?php

namespace App\Http\Controllers;

use App\DichVuCong;
use App\TinTuc;
use Illuminate\Http\Request;
use Goutte\Client;
use App\LichCongTac;
use Illuminate\Support\Facades\Auth;
use App\VanBan;
use App\TepVanBan;
use Carbon\Carbon;

class DichVuCongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLLV()
    {

//        LichCongTac::where('loaitin_id','74')->delete();

        $client = new Client();

        $crawler = $client->request('GET', 'http://dhtn.hatinh.gov.vn/dhtn/portal/folder/chuong-trinh-cong-tac/3.htm');

        $crawler->filter('table>tbody>tr')->each(function ($node) {

            if ($node->filter('td')->count() >0){

                $vb = new LichCongTac;
                $vb->user_id = Auth::user()->id;
                $vb->loaitin_id = '74';
                $vb->name = trim($node->filter('td')->eq(1)->text());
                $vb->slug = str_slug($node->filter('td')->eq(1)->text());
                $vb->noidung = 'http://dhtn.hatinh.gov.vn'.trim($node->filter('td>a')->attr('href'));
                $vb->daduyet = '1';
                $vb->save();

            }
        });
    }

    public function getVBM()
    {

        $client = new Client();

        $crawler = $client->request('GET', 'http://congbao.hatinh.gov.vn/vbpq_hatinh.nsf/VwAllDocNew');

        $crawler->filter('td > table > tr')->each(function ($node) {

            if ($node->filter('td')->count() >0){

                $vb = new VanBan;

                $vb->user_id = Auth::user()->id;

                $vb->loaitin_id = '90';
                $vb->kihieuvb = trim($node->filter('td')->eq(1)->text());

                $vb->ngaybanhanh = Carbon::parse(trim( str_replace("/","-", $node->filter('td')->eq(2)->text())  )  );

                $vb->trichyeu = trim($node->filter('td')->eq(4)->text());
                $vb->slug = str_slug(trim($node->filter('td')->eq(3)->text()));
                $vb->save();

                $vbid = $vb->id;

                $tvbn = new TepVanBan;

                $tvbn->vanban_id = $vbid;

                $tvbn->path = 'http://qppl.hatinh.gov.vn'.trim($node->filter('a')->attr('href'));

                $tvbn->save();

            }

        });
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
