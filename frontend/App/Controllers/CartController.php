<?php
class
CartController extends Controller {
    private $model;

    public function __construct(){
        $this->model = $this->model('Cart');
    }

    public function index(){
        $this->view('Master', [
            'Content' => 'Cart',
            'Title'=>'Thông tin giỏ hàng',
            'DBData'=>$this->model->showCartDetail(),
            'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu()
        ]);
    }

    public function add($idProduct) {
        $this->model->addToCart($idProduct);
        header('Location: /Cart/index#product-added');
    }

    public function update($params) {
        $arrParam = explode('-', $params);
        $numOfProductInCart = count($arrParam) - 1;

        $arrOfChanges = [];

        for($i = 0; $i < $numOfProductInCart; $i++) {
            $arrDetailChanges = explode('*', $arrParam[$i]);
            $arrOfChanges[$arrDetailChanges[0]] = $arrDetailChanges[1];
        }

        foreach ($arrOfChanges as $productId => $productQuantity) {
            $_SESSION['cart'][$productId]['soluong'] = (int)$productQuantity;
            $_SESSION['cart'][$productId]['thanhtien'] = (int)$productQuantity * $_SESSION['cart'][$productId]['giasp'];
        }

        foreach ($_SESSION['cart'] as $idProduct => $details) {
            if($details['soluong'] == 0) {
                unset($_SESSION['cart'][$idProduct]);
            }
        }

        header('Location: /Cart/index/#update-cart-success');
    }
}