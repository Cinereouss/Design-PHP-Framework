<?php

class ProductController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Product');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Product',
            'Title' => 'Danh mục sản phẩm',
            'data' => $this->model->getProduct()
        ]);
    }


    public function initModal()
    {
        if (isset($_POST)) {
            echo json_encode([
                'Header' => 'Thêm mới sản phẩm',
                'Loaidan' => $this->model->getAllLoai(),
                'Thuonghieu' => $this->model->getAllThuonghieu(),
            ]);
        }
    }

    public function hienthi()
    {
        if(isset($_POST)){
            if($_POST['action'] === 'yes'){
                $gt = 0;
                echo $this->model->hienthiProduct($_POST['id'], $gt) > 0 ?  'true' : 'false';
            }
            if($_POST['action'] === 'no'){
                $gt = 1;
                echo $this->model->hienthiProduct($_POST['id'], $gt) > 0 ?  'true' : 'false';
            }
        }
    }

    public function delete()
    {
        echo $this->model->deleteProduct($_POST['id']) > 0 ?  'true' : 'false';
    }

    public function create()
    {
        $hienthi = 0;
        if (isset($_POST) && $_POST['btnSubmit'] === 'true') {
            if (isset($_POST['hienthi']) && $_POST['hienthi'] == 'on') {
                $hienthi = 1;
            }
            $result = $this->model->createProduct($_POST['ten'], $_POST['masp'], $_POST['giasp'], $_POST['link'], $_POST['mota'], $_POST['thongso'], $_POST['thuonghieu'], $_POST['loai'], $_POST['tomtat'], $hienthi);

            if ($result > 0) {
                for ($index = 1; $index <= 4; $index++) {
                    if (isset($_FILES["img-" . $index]) && $_FILES["img-" . $index]["name"] != '') {

                        $target_dir = explode("\\backend", getcwd())[0] . "\Common\image\\";
                        $time = time();
                        $target_file = $target_dir . $time . $_FILES["img-" . $index]["name"];
                        $uploadOk = 1;

                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        $check = getimagesize($_FILES["img-" . $index]["tmp_name"]);
                        if ($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $uploadOk = 0;
                        }
                        if (file_exists($target_file)) {
                            $uploadOk = 0;
                        }

                        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif") {
                            $uploadOk = 0;
                        }

                        if ($uploadOk != 0) {
                            if (move_uploaded_file($_FILES["img-" . $index]["tmp_name"], $target_file)) {
                                $this->model->upImg($result, $time . $_FILES["img-" . $index]["name"]);
                                if ($index == 1) {
                                    $this->model->updateImgAvt($result, $time . $_FILES["img-" . $index]["name"]);
                                }
                            }
                        }
                    }
                }
                echo 'true';
            } else {
                echo 'false';
            }
        } else {
            echo 'false';
        }
    }
}