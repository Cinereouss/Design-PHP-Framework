<?php
class CartModel extends Model {
    private $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    private function fetchAProductDetail($idProduct) {
        return $this->db->table('sanpham')->findWhere(['id'=>$idProduct]);
    }

    public function showCartDetail() {
        if(!empty($_SESSION['cart'])) {
            return $_SESSION['cart'];
        } else {
            return null;
        }
    }

    public function addToCart($idProduct) {
        $data = $this->fetchAProductDetail($idProduct);

        if (!empty($_SESSION['cart'])){
            $cart = $_SESSION['cart'];

            if (array_key_exists($idProduct, $_SESSION['cart'])) {
                // Duplicated product
                $cart[$idProduct] = [
                    'image' => $data[0]->image,
                    'ten' => $data[0]->ten,
                    'giasp' => $data[0]->giasp,
                    'soluong' => $cart[$idProduct]['soluong'] + 1,
                    'thanhtien' => ($cart[$idProduct]['soluong'] + 1) * $cart[$idProduct]['giasp']
                ];
            } else {
                $cart[$idProduct] = [
                    'image' => $data[0]->image,
                    'ten' => $data[0]->ten,
                    'giasp' => $data[0]->giasp,
                    'soluong' => 1,
                    'thanhtien' => $data[0]->giasp
                ];
            }

        } else {
            $cart[$idProduct] = [
                'image' => $data[0]->image,
                'ten' => $data[0]->ten,
                'giasp' => $data[0]->giasp,
                'soluong' => 1,
                'thanhtien' => $data[0]->giasp
            ];
        }

        $_SESSION['cart'] = $cart;
    }

    public function fetchLoaiDanThuongHieu() {
        return $this->db->findLoaiDanThuongHieu();
    }

}