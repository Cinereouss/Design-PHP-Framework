<?php
class HomeController extends Controller {

    private $model;
    private $pageLimit;

    public function __construct()
    {
        $this->model = $this->model('Home');
        $this->pageLimit = 2;
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Home',
            'ThuongHieu' => $this->model->fetchAllThuongHieu(),
            'LoaiDan' => $this->model->fetchAllLoaiDan(),
            'DBData'=>$this->model->fetchAllProductPerPage(1, $this->pageLimit),
            'Slides'=>$this->model->fetchAllSlides(),
            'TotalPage' => ceil($this->model->countTotalRecord() / $this->pageLimit),
            'CurrentPage' => 1,
            'PaginationType' => 'page',
            'Title'=>'Trang chủ Guitar H2D'
        ]);
    }

    public function page($page) {
        $this->view('Master', [
            'Content'=>'Home',
            'DBData'=>$this->model->fetchAllProductPerPage($page, $this->pageLimit),
            'ThuongHieu' => $this->model->fetchAllThuongHieu(),
            'LoaiDan' => $this->model->fetchAllLoaiDan(),
            'Slides'=>$this->model->fetchAllSlides(),
            'TotalPage' => ceil($this->model->countTotalRecord() / $this->pageLimit),
            'CurrentPage' => $page,
            'PaginationType' => 'page',
            'Title'=>'Trang chủ Guitar H2D'
        ]);
    }

    public function sort($page){
        if(isset($_POST['submit-filter-product'])) {
            $thuonghieu_id = $_POST['thuongHieu'];
            $loaidan_id = $_POST['loaiDan'];
            $sortType = $_POST['sortPrice'];

            $this->view('Master', [
                'Content'=>'Home',
                'DBData'=>$this->model->fetchAllFilteredProductPerPage($thuonghieu_id, $loaidan_id, $sortType, $page, $this->pageLimit),
                'ThuongHieu' => $this->model->fetchAllThuongHieu(),
                'LoaiDan' => $this->model->fetchAllLoaiDan(),
                'Slides'=>$this->model->fetchAllSlides(),
                'TotalPage' => ceil($this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) / $this->pageLimit),
                'CurrentPage' => $page,
                'PaginationType' => 'sortPerPage',
                'Title'=>'Trang chủ Guitar H2D',
                '$thuonghieu_id' => $thuonghieu_id,
                '$loaidan_id' => $loaidan_id,
                '$sortType' => $sortType
            ]);
        }
    }

    public function sortPerPage($secretParam) {
        $arrOfParam = explode('-', $secretParam);

        $loaidan_id = $arrOfParam[0];
        $thuonghieu_id = $arrOfParam[1];
        $sortType = $arrOfParam[2];

        $page = $arrOfParam[3];

        $this->view('Master', [
            'Content'=>'Home',
            'DBData'=>$this->model->fetchAllFilteredProductPerPage($thuonghieu_id, $loaidan_id, $sortType, $page, $this->pageLimit),
            'ThuongHieu' => $this->model->fetchAllThuongHieu(),
            'LoaiDan' => $this->model->fetchAllLoaiDan(),
            'Slides'=>$this->model->fetchAllSlides(),
            'TotalPage' => ceil($this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) / $this->pageLimit),
            'CurrentPage' => $page,
            'PaginationType' => 'sortPerPage',
            'Title'=>'Trang chủ Guitar H2D',
            '$thuonghieu_id' => $thuonghieu_id,
            '$loaidan_id' => $loaidan_id,
            '$sortType' => $sortType
        ]);
    }

}