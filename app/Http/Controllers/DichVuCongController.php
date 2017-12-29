<?php

namespace App\Http\Controllers;

use App\DichVuCong;
use Illuminate\Http\Request;
use Goutte\Client;

class DichVuCongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();

//        DichVuCong::truncate();

        $crawler = $client->request('GET', 'http://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/thu-tuc-hanh-chinh.aspx');

//        $crawler = $client->request('GET', 'http://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/dich-vu-cong-truc-tuyen.aspx');


        $crawler->filter('table > tbody > tr')->each(function ($node) {

            $dvc = new DichVuCong;

            $dvc->name = $node->filter('td>a')->text();
            $dvc->slug = str_slug($node->filter('td>a')->text());
            $dvc->linhvuc = $node->filter('td')->eq(2)->text();
            $dvc->donvicungcap = $node->filter('td')->eq(3)->text();
            $dvc->capdo = '2';

            $dvc->save();

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
