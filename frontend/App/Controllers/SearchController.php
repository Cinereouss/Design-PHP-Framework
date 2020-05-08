<?php
class SearchController extends Controller
{

    private $model;
    private $pageLimit;

    public function __construct()
    {
        $this->model = $this->model('Search');
        $this->pageLimit = 1;
    }

    public function index()
    {
        $this->view('Master', [
            'Content' => 'Error',
            'Title' => 'Lỗi'
        ]);
    }

    public function searchProducts($page) {
        if(isset($_POST['btn-search-product'])) {
            $keyword = $_POST['searchKeyword'];
            $order = 'ALLPRICE';

            $this->view('Master', [
                'Content' => 'Search',
                'Title' => 'Kết quả tìm kiếm',
                'DBData'=>$this->model->fetchProductDetailResultPerPage($keyword, $page, $this->pageLimit, $order),
                'Keyword' => $keyword,
                'OrderType' => $order,
                'TotalPage' => ceil($this->model->countSearchResultRecord($keyword, 'ALLPRICE') / $this->pageLimit),
                'TotalResult' => $this->model->countSearchResultRecord($keyword, $order),
                'CurrentPage' => $page,
                'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
                'PaginationType' => 'searchProductsPerPage',
            ]);
        }
    }

    public function searchProductsPerPage($secretParam) {
        $arrOfParam = explode('-', $secretParam);
        $keyword = $arrOfParam[0];
        $order = $arrOfParam[1];
        $page = $arrOfParam[2];

        $this->view('Master', [
            'Content' => 'Search',
            'Title' => 'Kết quả tìm kiếm',
            'DBData'=>$this->model->fetchProductDetailResultPerPage($keyword, $page, $this->pageLimit, $order),
            'Keyword' => $keyword,
            'OrderType' => $order,
            'TotalPage' => ceil($this->model->countSearchResultRecord($keyword, $order) / $this->pageLimit),
            'TotalResult' => $this->model->countSearchResultRecord($keyword, $order),
            'CurrentPage' => $page,
            'PaginationType' => 'searchProductsPerPage',
            'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu()
        ]);
    }

    public function searchLoaiDanThuongHieu($secretParam) {
        $arrOfParam = explode('-', $secretParam);

        $loaidan_id = $arrOfParam[0];
        $thuonghieu_id = $arrOfParam[1];
        $sortType = $arrOfParam[2];

        $page = $arrOfParam[3];

        $this->view('Master', [
            'Content'=>'Search',
            'DBData'=>$this->model->fetchAllFilteredProductPerPage($thuonghieu_id, $loaidan_id, $sortType, $page, $this->pageLimit),
            'TotalPage' => ceil($this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) / $this->pageLimit),
            'TotalResult' => $this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType),
            'CurrentPage' => $page,
            'Title'=>'Thông tin sản phẩm',
            '$thuonghieu_id' => $thuonghieu_id,
            '$loaidan_id' => $loaidan_id,
            '$sortType' => $sortType,
            'PaginationType' => 'searchLoaiDanThuongHieu',
            'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
        ]);
    }

}
