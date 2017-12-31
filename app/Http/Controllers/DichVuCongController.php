<?php

namespace App\Http\Controllers;

use App\DichVuCong;
use Illuminate\Http\Request;
use Goutte\Client;
use App\LichCongTac;
use Illuminate\Support\Facades\Auth;

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

                print trim($node->filter('td')->eq(1)->text())."<br>";
                print trim($node->filter('a')->attr('href'))."<br>";
                print trim($node->filter('td')->eq(2)->text())."<br>";
                print trim($node->filter('td')->eq(3)->text())."<br>";
                print trim($node->filter('td')->eq(4)->text())."<br><br>";
//                print trim($node->filter('td')->eq(5)->text())."<br><br>";

//                $vb = new VanBan;
//
//                $vb->user_id = Auth::user()->id;
//
//                $vb->loaitin_id = '90';
//                $vb->kihieuvb = trim($node->filter('td')->eq(1)->text());
//                $vb->ngaybanhanh = Carbon::parse($request->ngaybanhanh);
//                $vb->nguoiki_id = $request->nguoiki_id;
//                $vb->trichyeu = $request->trichyeu;
//                $vb->slug = str_slug($request->kihieuvb."-".$request->ngaybanhanh);
//
//                $vb->save();


            }

        });
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
