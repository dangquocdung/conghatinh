<?php

namespace App\Http\Controllers;

use App\TopPic;
use App\NhomCQ;
use App\PhimTat;
use Illuminate\Http\Request;
use App\Helper\VideoStream;
use App\TinTuc;
use App\LoaiTin;
use App\ChuyenMuc;
use App\VanBan;
use App\Banner;
use App\DoanhNghiepHoi;
use App\LinhVuc;
use App\HoTroPhapLy;
use App\NguoiPhatNgon;
use App\PVTT;
use App\LoaiVideo;
use App\Video;
use App\Album;
use App\HoiDapTrucTuyen;
use App\DuThao;
use App\LichCongTac;



class GuestController extends Controller
{

    public function __construct()
    {

        $toppic = TopPic::orderby('thutu','asc')->get();

        $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();
        $nhomcq = NhomCQ::orderby('id')->get();
        $banner = Banner::orderby('thutu','asc')->get();
        $phimtat = PhimTat::orderby('thutu','asc')->get();
        $loaivideo = LoaiVideo::orderby('thutu')->get();



        view()->share('toppic',$toppic);
        view()->share('chuyenmuc',$chuyenmuc);
        view()->share('nhomcq',$nhomcq);
        view()->share('banner',$banner);
        view()->share('phimtat',$phimtat);
        view()->share('loaivideo',$loaivideo);
    }

    public function index()
    {

        $tinnoibat = TinTuc::where('daduyet','1')->where('noibat','1')->orderBy('id', 'decs')->take(9)->get();


        return view('guest.trang-chu', compact('tinnoibat'));

    }


    public function getVideo($id=null)
    {


        if ($id == null) {



            return view('guest.video-chi-tiet');

        }else{

            $video = Video::find($id);

//            return response()
//                ->json([
//                    'video' => $vd
//                ]);

            return view('guest.video-chi-tiet',compact('video'));

        }

    }

    public function getAlbum($slug=null)
    {
        if ($slug == null){

            $albums = Album::with('Photos')->orderby('id','desc')->paginate(12);
            return view('guest.album-anh',compact('albums'));

        }else{

            $albums = Album::with('Photos')->orderby('id','desc')->take(12)->get();

            $album = Album::where('slug',$slug)->with('Photos')->first();
            return view('guest.album-chi-tiet',compact('album','albums'));

        }
    }


    public function getBBT()
    {

        $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();
        return view('guest.ban-bien-tap',compact('chuyenmuc'));
    }

    public function getLLV()
    {
        $lichct = LichCongTac::orderby('thang','desc')->get();

        return view('guest.lich-cong-tac',compact('lichct'));
    }

    public function showLLV($id)
    {
        $lct = LichCongTac::find($id);

        return view('guest.lct-chi-tiet',compact('lct'));
    }





    public function tepTin($slug)
    {
        $tin = TinTuc::where('slug',$slug)->first();

        $ngay = $tin->ngaydang;

        $tinlq_new = TinTuc::where('daduyet','1')->orderBy('ngaydang','desc')->take(10)->get();

        $tinlq_old = TinTuc::where('daduyet','1')->where('ngaydang','<=', $ngay)->orderBy('ngaydang','desc')->take(10)->get();

        return view('guest.chi-tiet-tin', compact('tin','tinlq_new','tinlq_old'));
    }





    public function chuyenMuc($slug)
    {
        $cm = ChuyenMuc::where('slug',$slug)->first();

        $lt = LoaiTin::select('id')->where('chuyenmuc_id',$cm->id)->get();

        $tintuc = TinTuc::whereIn('loaitin_id',$lt)->where('daduyet','1')->orderby('id','desc')->paginate(12);

        return view('guest.chuyen-muc', compact('cm','tintuc'));
    }

    public function loaiTin($cm,$slug)
    {
        $lt = LoaiTin::where('slug',$slug)->first();

        $tintuc = TinTuc::where('loaitin_id',$lt->id)->where('daduyet','1')->orderby('id','desc')->paginate(12);

        return view('guest.loai-tin', compact('lt','tintuc'));
    }

    public function tinTuc($cm,$lt,$slug)
    {
        $tin = TinTuc::where('slug',$slug)->where('daduyet','1')->first();

        if (empty($tin)){

            abort(404, 'Khong tim thay trang.');

        }

        else

        {
            $ngay = $tin->ngaydang;

            $tinlq_new = TinTuc::where('daduyet','1')->orderBy('ngaydang','desc')->take(10)->get();

            $tinlq_old = TinTuc::where('daduyet','1')->where('ngaydang','<=', $ngay)->orderBy('ngaydang','desc')->take(10)->get();

            return view('guest.chi-tiet-tin', compact('tin','tinlq_new','tinlq_old'));
        }

    }

    public function vanBan($slug=null)
    {
        if ($slug == null){

            $lt = LoaiTin::all();

        }else{

            $lt = LoaiTin::where('slug',$slug)->first();
        }

        return view('guest.van-ban', compact('lt'));
    }

    public function ctVanBan($slug,$id)
    {
        $vb = VanBan::find($id);

        return view('guest.van-ban-chi-tiet', compact('vb'));
    }

    public function getDoanhNghiepHoi()
    {
        $chuyenmuc = ChuyenMuc::all();

        return view ('guest.doanh-nghiep-hoi',compact('coquan','chuyenmuc'));
    }

    public function getHoTroPhapLy()
    {

        $linhvuc = Linhvuc::orderby('slug','asc')->get();
        return view ('guest.ho-tro-phap-ly',compact('linhvuc'));
    }

    public function getHoiDap()
    {
        $hoidaptt = HoiDapTrucTuyen::where('daduyet','1')->orderby('id','desc')->get();
        return view ('guest.hoi-dap',compact('hoidaptt'));
    }

    public function getNguoiPhatNgon()
    {

        $nguoiphatngon = NguoiPhatNgon::orderby('id','asc')->with('coquan')->get();

        return view ('guest.nguoi-phat-ngon',compact('nguoiphatngon'));
    }

    public function getPhongVienThuongTru()
    {
        $phongvientt = PVTT::orderby('id','asc')->get();
        
        return view ('guest.phong-vien-thuong-tru',compact('phongvientt'));
    }

    public function getHotLine()
    {
        return view ('guest.duong-day-nong');
    }

    public function tinNoiBat()
    {

        $tintuc = TinTuc::where('daduyet','1')->where('noibat','1')->orderby('id','desc')->paginate(12);

        return view('guest.tin-noi-bat', compact('tintuc'));
    }

    public function getSoDoCong()
    {
        return view('guest.so-do-cong');
    }

    public function getGopY()
    {
        return view('guest.gop-y-cong');
    }

    public function getGopYVanBan()
    {
        $duthao = DuThao::orderby('id','desc')->paginate(12);
        return view('guest.gop-y-van-ban',compact('duthao'));
    }

    public function getLienHeCongTac()
    {
        return view('guest.lien-he-cong-tac');
    }

    public function getTimKiem()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        $type = \Request::get('type');

        $search = str_slug($search);

        switch ($type){

            case 'all':

                $tintuc = TinTuc::where('slug','like','%'.$search.'%')
                    ->orderBy('id','desc')
                    ->paginate(20);

                return view('guest.tim-kiem',compact('tintuc'));

                break;

            case 'vanban':

                $lt = LoaiTin::all();
                return view('guest.van-ban', compact('lt'));

                break;

            case 'hinhanh':

                $albums = Album::with('Photos')->orderby('id','desc')->paginate(12);
                return view('guest.album-anh',compact('albums'));

                break;

            case 'video':
                return view('guest.video-chi-tiet');
                break;

            default:
                $tintuc = TinTuc::where($type,'like','%'.$search.'%')
                    ->orderBy('id','desc')
                    ->paginate(20);

                return view('guest.tim-kiem',compact('tintuc'));
        }
    }

    public function apiVanBan($id=null)
    {
        if ($id != null){
            $model = VanBan::where('daduyet','1')->where('loaitin_id',$id)->with('loaitin')->with('tepvanban')->searchPaginateAndOrder();


        }else{
            $model = VanBan::where('daduyet','1')->with('loaitin')->with('tepvanban')->searchPaginateAndOrder();

        }

        $columns = VanBan::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function apiDoanhNghiepHoi()
    {

        $model = DoanhNghiepHoi::where('daduyet','0')->with('coquan')->searchPaginateAndOrder();

        $columns = DoanhNghiepHoi::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function apiHoTroPhapLy()
    {

        $model = HoTroPhapLy::where('daduyet','0')->with('coquan')->with('linhvuc')->searchPaginateAndOrder();

        $columns = HoTroPhapLy::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }
}
