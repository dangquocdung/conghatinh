<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoadTinController extends Controller
{
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
}
