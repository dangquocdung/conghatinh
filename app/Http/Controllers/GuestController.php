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
use App\ThongTinDoanhNghiep;
use App\Events\User\TinTucCounter;
use App\DichVuCong;
use App\dnhcqnn;
use App\GopYDuThao;
use App\CongBoTTDN;
use App\ThongBaoKhan;



class GuestController extends Controller
{

    public function __construct()
    {

        $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();

        $banner = Banner::orderby('thutu','asc')->get();

        $nhomcq = NhomCQ::orderby('id')->get();



        $vbmoinhat = VanBan::where('daduyet','1')->orderby('id','desc')->take(5)->get();
        $lctmoinhat = LichCongTac::where('daduyet','1')->orderby('id','desc')->take(5)->get();
        $tinnoibat = TinTuc::where('daduyet','1')->where('noibat','1')->orderBy('id', 'decs')->take(8)->get();
        $tinnoibat_left = TinTuc::where('daduyet','1')->where('noibat','1')->orderBy('id', 'decs')->take(4)->get();
        $tinvan = TinTuc::where('tinvan','1')->orderBy('id', 'decs')->take(8)->pluck('gioithieu')->toArray();

        $thongbao = LichCongTac::where('daduyet','1')->where('thongbao','1')->orderby('id','desc')->take(5)->get();
        $thongbaokhan =ThongBaoKhan::where('daduyet','1')->orderby('id','desc')->take(5)->pluck('noidung')->toArray();


        view()->share('vbmoinhat',$vbmoinhat);
        view()->share('lctmoinhat',$lctmoinhat);
        view()->share('tinnoibat',$tinnoibat);
        view()->share('tinnoibat_left',$tinnoibat_left);
        view()->share('tinvan',$tinvan);
        view()->share('thongbao',$thongbao);
        view()->share('chuyenmuc',$chuyenmuc);
        view()->share('banner',$banner);
        view()->share('nhomcq',$nhomcq);
        view()->share('thongbaokhan',$thongbaokhan);


    }

    public function index()
    {

        $banner_tt = TopPic::all();

        return view('guest.trang-chu',compact('banner_tt'));
    }


    public function loadDNH()
    {
        return view('guest.dnh-cqnntl');

    }

    public function congboTTDN($slug=null)
    {
        if ($slug==null){

            $cbtt =CongBoTTDN::all();
            return view('guest.cong-bo-ttdn',compact('cbtt'));

        }else{

            $cb = CongBoTTDN::where('slug',$slug)->first();

            return view('guest.cong-bo-ttdn',compact('cb'));


        }


    }


//    public function getVideo($id=null)
//    {
//
//
//        if ($id == null) {
//
//
//
//            return view('guest.video-chi-tiet');
//
//        }else{
//
//            $video = Video::find($id);

//            return response()
//                ->json([
//                    'video' => $vd
//                ]);

//            return view('guest.video-chi-tiet',compact('video'));
//
//        }
//
//    }
//
//    public function getAlbum($slug=null)
//    {
//        if ($slug == null){
//
//            $albums = Album::with('Photos')->orderby('id','desc')->paginate(12);
//            return view('guest.album-anh',compact('albums'));
//
//        }else{
//
//            $albums = Album::with('Photos')->orderby('id','desc')->take(12)->get();
//
//            $album = Album::where('slug',$slug)->with('Photos')->first();
//            return view('guest.album-chi-tiet',compact('album','albums'));
//
//        }
//    }


    public function getBBT()
    {
        return view('guest.ban-bien-tap');
    }

    public function getDoiThoai($slug=null)
    {
        return view('guest.doi-thoai-truc-tuyen',compact('slug'));
    }



//    public function getLLV()
//    {
//        $lichct = LichCongTac::orderby('id','desc')->get();
//
//        return view('guest.lich-cong-tac',compact('lichct'));
//    }

//    public function showLLV($id)
//    {
//        $lct = LichCongTac::find($id);
//
//        return view('guest.lct-chi-tiet',compact('lct'));
//    }

//    public function getVBCDDH()
//    {
//        $lt = LoaiTin::where('id','38')->first();
//
//        return view('guest.van-ban',compact('lt'));
//    }



//    public function tepTin($slug)
//    {
//        $tin = TinTuc::where('slug',$slug)->first();
//
//        $ngay = $tin->ngaydang;
//
//        $tinlq_new = TinTuc::where('daduyet','1')->orderBy('ngaydang','desc')->take(10)->get();
//
//        $tinlq_old = TinTuc::where('daduyet','1')->where('ngaydang','<=', $ngay)->orderBy('ngaydang','desc')->take(10)->get();
//
//        return view('guest.chi-tiet-tin', compact('tin','tinlq_new','tinlq_old'));
//    }


    public function chuyenMuc($slug)
    {
        $cm = ChuyenMuc::where('slug',$slug)->first();

        return view('guest.chuyen-muc', compact('cm'));
    }

    public function loaiTin($cm,$slug)
    {
        $lt = LoaiTin::where('slug',$slug)->first();

        if (count($lt->vanban)>0){
            $tintuc = VanBan::where('loaitin_id',$lt->id)->where('daduyet','1')->orderby('id','desc')->paginate(12);
        }
        elseif (count($lt->vanbankhac)>0){
            $tintuc = LichCongTac::where('loaitin_id',$lt->id)->orderby('id','desc')->paginate(12);
        }else{
            $tintuc = TinTuc::where('loaitin_id',$lt->id)->where('daduyet','1')->orderby('id','desc')->paginate(12);
        }
        return view('guest.loai-tin', compact('lt','tintuc'));
    }

    public function getTinTuc($cm,$lt,$type,$id,$slug)
    {

        switch ($type){

            case 'tin-tuc':
                $tin = TinTuc::where('daduyet','1')->findOrFail($id);
                event(new TinTucCounter($tin));
                break;

            case 'van-ban':
                $tin = VanBan::where('daduyet','1')->findOrFail($id);
                break;

            case 'van-ban-khac':
                $tin = LichCongTac::where('daduyet','1')->findOrFail($id);
                break;
        }


        if (empty($tin)){

            abort(404, 'Khong tim thay trang.');

        } else {

            return view('guest.chi-tiet-tin', compact('tin','type'));

//            return response()->json($tin);
        }

    }

    public function getGopYVanBan($id=null)
    {
        if ($id==null){

            $duthao = DuThao::orderby('id','desc')->paginate(12);
            return view('guest.gop-y-van-ban',compact('duthao'));

        }else{

            $dt = DuThao::findOrFail($id);

            $gopy = GopYDuThao::where('duthao_id',$dt->id)->orderby('id','desc')->get();

            return view('guest.gop-y-van-ban',compact('dt','gopy'));


        }

    }

    public function getPhanAnhKienNghi()
    {
        $hoidaptt = HoiDapTrucTuyen::where('daduyet','1')->orderby('id','desc')->get();
        return view ('guest.phan-anh-kien-nghi',compact('hoidaptt'));
    }

    public function getTraoDoiHoiDap()
    {
        $hoidaptt = HoiDapTrucTuyen::where('daduyet','1')->orderby('id','desc')->get();
        return view ('guest.trao-doi-hoi-dap',compact('hoidaptt'));
    }

    public function getThuVien($slug)
    {

        if ($slug == 'hinh-anh'){

            $tintuc = TinTuc::where('daduyet','1')->where('tinanh','1')->orderby('id','desc')->paginate(12);
        }
        else{

            $tintuc = TinTuc::where('daduyet','1')->where('tinvideo','1')->orderby('id','desc')->paginate(12);

        }
        return view ('guest.thu-vien',compact('tintuc'));
    }


//    public function vanBan($slug=null)
//    {
//        if ($slug == null){
//
//            $lt = LoaiTin::all();
//
//        }else{
//
//            $lt = LoaiTin::where('slug',$slug)->first();
//        }
//
//        return view('guest.van-ban', compact('lt'));
//    }

//    public function ctVanBan($slug,$id)
//    {
//        $vb = VanBan::find($id);
//
//        return view('guest.van-ban-chi-tiet', compact('vb'));
//    }

    public function getDoanhNghiepHoi()
    {
        $dnhoi = dnhcqnn::orderBy('id','decs')->get();
        return view ('guest.doanh-nghiep-hoi',compact('dnhoi'));
    }

    public function getDoanhNghiepHoiChiTiet($id)
    {
        $dnh = dnhcqnn::findOrFail($id);
        return view ('guest.doanh-nghiep-hoi-chi-tiet',compact('dnh'));
    }

    public function getHoTroPhapLy()
    {
        $linhvuc = Linhvuc::orderby('slug','asc')->get();
        return view ('guest.ho-tro-phap-ly',compact('linhvuc'));
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


    public function getSoDoCong()
    {
        return view('guest.so-do-cong');
    }

    public function getGopY()
    {
        return view('guest.gop-y-cong');
    }



    public function getLienHeCongTac()
    {
        return view('guest.lien-he-cong-tac');
    }

    public function getThongTinDoanhNghiep()
    {

        $ttdns = ThongTinDoanhNghiep::orderby('id','asc')->with('coquan')->get();

        return view ('guest.thong-tin-doanh-nghiep',compact('ttdns'));
    }

    public function tracuuDVC()
    {
        $dvc2 = DichVuCong::where('capdo','2')->get();
        $dvc3 = DichVuCong::where('capdo','3')->get();
        return view ('guest.dvc-m3',compact('dvc2','dvc3'));
    }

    public function getTimKiem()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI

        $type = \Request::get('type');

//        $search = str_slug($search);

        switch ($type){

            case 'vanban':

                $tintuc = VanBan::where('kihieuvb','like','%'.$search.'%')
                    ->orderBy('id','desc')
                    ->paginate(20);

                return view('guest.tim-kiem',compact('tintuc'));

                break;

            case 'vanbankhac':

                $tintuc = VanBanKhac::where('name','like','%'.$search.'%')
                    ->orderBy('id','desc')
                    ->paginate(20);

                return view('guest.tim-kiem',compact('tintuc'));

                break;


            default:
                $tintuc = TinTuc::where('name','like','%'.$search.'%')
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
