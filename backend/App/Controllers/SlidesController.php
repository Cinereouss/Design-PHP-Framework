<?php


class SlidesController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Slides');
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Slides',
            'Title' => 'Quản lý banner website',
            'data' => $this->model->getSlides()
        ]);
    }

    public function delete()
    {
        echo $this->model->deleteSlide($_POST['id']) > 0 ? 'true' : 'false';
    }

    public function hienthi()
    {
        if (isset($_POST)) {
            if ($_POST['action'] === 'yes') {
                $gt = 0;
                echo $this->model->hienthiSlide($_POST['id'], $gt) > 0 ? 'true' : 'false';
            }
            if ($_POST['action'] === 'no') {
                $gt = 1;
                echo $this->model->hienthiSlide($_POST['id'], $gt) > 0 ? 'true' : 'false';
            }
        }
    }

    public function create()
    {
        if (isset($_POST)) {
            if (isset($_FILES["img"]) && $_FILES["img"]["name"] != '') {

                $target_dir = explode("\\backend", getcwd())[0] . "\Common\imgSlide\\";
                $time = time();
                $target_file = $target_dir . $time . $_FILES["img"]["name"];
                $uploadOk = 1;

                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["img"]["tmp_name"]);
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
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        $hienthi = 0;
                        if (isset($_POST['hienthi']) && $_POST['hienthi'] == 'on') {
                            $hienthi = 1;
                        }
                        if ($this->model->createSlides($_POST['mota'], $hienthi, $time . $_FILES["img"]["name"]) > 0) {
                            echo "true";
                        } else {
                            echo "false";
                        }

                    }
                } else {
                    echo "false";
                }
            } else {
                echo "false";
            }
        }
    }
}