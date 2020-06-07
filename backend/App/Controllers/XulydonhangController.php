<?php


class XulydonhangController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Xulydonhang');
    }

    public function index($id){
        $donhang = $this->model->getDonhangInfo($id);
        $khachhang = $this->model->getKhachhangInfo($donhang[0]->khachhang_id);
        $sanpham = $this->model->getSp($donhang[0]->id);
        $this->view('Master', [
            'Content'=>'Xulydonhang',
            'Title'=>'Chi tiết đơn hàng',
            'Donhang'=>$this->model->getDonhangmoi(),
            'Data'=>$donhang,
            'Khachhang'=>$khachhang,
            'Sanpham'=>$sanpham
        ]);
    }

    public function huydon(){
        if(isset($_POST)){
            echo $this->model->huydon($_POST['id']) > 0 ?  'true' : 'false';
        }
    }

    public function xacnhan(){
        if(isset($_POST)){
            $sanphams = $this->model->getSp($_POST['id']);
            $check = 0;
            foreach ($sanphams as $sanpham){
               if($sanpham->soluong < $sanpham->soluongdat)
                   $check++;
            }
            if($check === 0){
                foreach ($sanphams as $sanpham){
                    $x = $sanpham->soluong - $sanpham->soluongdat;
                    $this->model->updateSl($sanpham->sanpham_id, $x);
                }
                echo $this->model->xacnhan($_POST['id']) > 0 ?  'true' : 'false';
            }
            else{
                echo 'full';
            }
        }
    }


    public function viewInfo($id){
        $this->view('Master', [
            'Content'=>'Xulydonhang',
            'Title'=>'Đổi mật khẩu',
            'Donhang'=>$this->model->getDonhangmoi(),
            'Data'=>$this->model->getDonhangInfo($id)
        ]);
    }

}