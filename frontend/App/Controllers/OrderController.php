<?php
class OrderController extends Controller {
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Order');
    }


    public function index(){
        $this->view('Master', [
            'Content'=>'Order',
            'Title'=>'Đăng kí đặt mua'
        ]);
    }

    public function buyOne($idProduct) {
        $this->view('Master', [
            'Content'=>'OrderOne',
            'DBData'=>$this->model->fetchProductDetail($idProduct),
            'Title'=>'Đăng kí đặt mua'
        ]);
    }

    private function calculateTotalPrice() {
        $totalPrice = 0;
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $idProduct => $details) {
                $totalPrice += $details['thanhtien'];
            }
        }

        return $totalPrice;
    }

    public function successOrder() {
        $this->view('Master', [
            'Content'=>'SuccessOrder',
            'Title'=>'Đặt mua thành công'
        ]);
    }

    public function executeOneProductOrder($idProduct) {
        if (isset($_POST['datHang'])) {
            $ten = $this->sanitize_xss($_POST['fullname']);
            $mail = $this->sanitize_xss($_POST['email']);
            $sdt = $this->sanitize_xss($_POST['phone']);
            $diachi = $this->sanitize_xss($_POST['address']);
            $ngay = date("Y-m-d H:i:s");
            $ghichu = $this->sanitize_xss($_POST['note']);
            $tinhtrang = 'Chưa xét duyệt';

            $productData  = $this->model->fetchProductDetail($idProduct);
            $tongtien = $productData[0]->giasp;

            $newCreatedKhachHangId =  $this->model->insertDataToKhachHangAndReturnId ([
                'ten' => $ten,
                'mail' => $mail,
                'sdt' => $sdt,
                'diachi' => $diachi
            ]);

            if($newCreatedKhachHangId != 0) {
                $newCreatedDonHangId = $this->model->insertDataToDonHangAndReturnId ([
                    'ngay' => $ngay,
                    'ghichu' => $ghichu,
                    'tinhtrang' => $tinhtrang,
                    'khachhang_id' => $newCreatedKhachHangId,
                    'tongtien' => $tongtien
                ]);

                if($newCreatedDonHangId != 0) {
                    $this->model->insertDataToChiTietDonHang ([
                        'sanpham_id' =>  $idProduct,
                        'donhang_id' => $newCreatedDonHangId,
                        'soluongdat' => 1
                    ]);
                } else {
                    header('Location: /Error/index');
                }
            } else {
                header('Location: /Error/index');
            }

            header('Location: /Order/successOrder');
        }
    }

    public function executeOrder() {
        if (isset($_POST['datHang'])) {
            $ten = $this->sanitize_xss($_POST['fullname']);
            $mail = $this->sanitize_xss($_POST['email']);
            $sdt = $this->sanitize_xss($_POST['phone']);
            $diachi = $this->sanitize_xss($_POST['address']);
            $ngay = date("Y-m-d H:i:s");
            $ghichu = $this->sanitize_xss($_POST['note']);
            $tinhtrang = 'Chưa xét duyệt';
            $tongtien = $this->calculateTotalPrice();
            $arrChiTietDonHang = [];

            foreach ($_SESSION['cart'] as $idProduct => $detail) {
                $arrChiTietDonHang[$idProduct] = $detail['soluongdat'];
            }

            $newCreatedKhachHangId =  $this->model->insertDataToKhachHangAndReturnId ([
                'ten' => $ten,
                'mail' => $mail,
                'sdt' => $sdt,
                'diachi' => $diachi
            ]);

            if($newCreatedKhachHangId != 0) {
                $newCreatedDonHangId = $this->model->insertDataToDonHangAndReturnId ([
                    'ngay' => $ngay,
                    'ghichu' => $ghichu,
                    'tinhtrang' => $tinhtrang,
                    'khachhang_id' => $newCreatedKhachHangId,
                    'tongtien' => $tongtien
                ]);

                if($newCreatedDonHangId != 0) {
                    foreach ($arrChiTietDonHang as $idProduct => $soLuongDat) {
                        $this->model->insertDataToChiTietDonHang ([
                            'sanpham_id' =>  $idProduct,
                            'donhang_id' => $newCreatedDonHangId,
                            'soluongdat' => $soLuongDat
                        ]);
                    }
                } else {
                    header('Location: /Error/index');
                }
            } else {
                header('Location: /Error/index');
            }

            unset($_SESSION['cart']);
            header('Location: /Order/successOrder');
        }
    }
}