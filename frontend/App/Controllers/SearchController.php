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
            $keyword = $this->sanitize_xss($_POST['searchKeyword']);
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

        if(count($arrOfParam) == 3 && is_numeric($arrOfParam[2])) {
            $keyword = $this->sanitize_xss($arrOfParam[0]);
            $order = $this->sanitize_xss($arrOfParam[1]);
            $page = $this->sanitize_xss($arrOfParam[2]);

            if ($order != 'ALLPRICE' && $order != 'ASC' && $order != 'DESC') {
                $order = 'ALLPRICE';
            }

            $this->view('Master', [
                'Content' => 'Search',
                'Title' => 'Kết quả tìm kiếm',
                'DBData' => $this->model->fetchProductDetailResultPerPage($keyword, $page, $this->pageLimit, $order),
                'Keyword' => $keyword,
                'OrderType' => $order,
                'TotalPage' => ceil($this->model->countSearchResultRecord($keyword, $order) / $this->pageLimit),
                'TotalResult' => $this->model->countSearchResultRecord($keyword, $order),
                'CurrentPage' => $page,
                'PaginationType' => 'searchProductsPerPage',
                'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu()
            ]);
        } else {
            $this->renderErrorPage();
        }
    }

    public function searchLoaiDanThuongHieu($secretParam) {
        $arrOfParam = explode('-', $secretParam);

        if(count($arrOfParam) == 4 && is_numeric($arrOfParam[3])) {
            $loaidan_id = $this->sanitize_xss($arrOfParam[0]);
            $thuonghieu_id = $this->sanitize_xss($arrOfParam[1]);
            $sortType = $this->sanitize_xss($arrOfParam[2]);

            $page = $this->sanitize_xss($arrOfParam[3]);

            if ($sortType != 'ALLPRICE' && $sortType != 'ASC' && $sortType != 'DESC') {
                $sortType = 'ALLPRICE';
            }

            $this->view('Master', [
                'Content' => 'Search',
                'DBData' => $this->model->fetchAllFilteredProductPerPage($thuonghieu_id, $loaidan_id, $sortType, $page, $this->pageLimit),
                'TotalPage' => ceil($this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) / $this->pageLimit),
                'TotalResult' => $this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType),
                'CurrentPage' => $page,
                'Title' => 'Thông tin sản phẩm',
                '$thuonghieu_id' => $thuonghieu_id,
                '$loaidan_id' => $loaidan_id,
                '$sortType' => $sortType,
                'PaginationType' => 'searchLoaiDanThuongHieu',
                'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
            ]);
        } else {
            $this->renderErrorPage();
        }
    }

    public function searchLoaiDanVaThuongHieu($secretParam) {
        $arrOfParam = explode('-', $secretParam);

        if(count($arrOfParam) == 4 && is_numeric($arrOfParam[3])) {
            $loaidan_id = $this->sanitize_xss($arrOfParam[0]);
            $thuonghieu_id = $this->sanitize_xss($arrOfParam[1]);
            $sortType = $this->sanitize_xss($arrOfParam[2]);

            $page = $this->sanitize_xss($arrOfParam[3]);

            if ($sortType != 'ALLPRICE' && $sortType != 'ASC' && $sortType != 'DESC') {
                $sortType = 'ALLPRICE';
            }

            $this->view('Master', [
                'Content' => 'Search',
                'DBData' => $this->model->fetchAllFilteredProductPerPageForAnd($thuonghieu_id, $loaidan_id, $sortType, $page, $this->pageLimit),
                'TotalPage' => ceil($this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType) / $this->pageLimit),
                'TotalResult' => $this->model->countTotalFilteredProduct($thuonghieu_id, $loaidan_id, $sortType),
                'CurrentPage' => $page,
                'Title' => 'Thông tin sản phẩm',
                '$thuonghieu_id' => $thuonghieu_id,
                '$loaidan_id' => $loaidan_id,
                '$sortType' => $sortType,
                'PaginationType' => 'searchLoaiDanThuongHieu',
                'ThuongHieuLoai' => $this->model->fetchLoaiDanThuongHieu(),
            ]);
        } else {
            $this->renderErrorPage();
        }
    }
}
