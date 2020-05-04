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
            'Content' => 'Search',
            'Title' => 'Kết quả tìm kiếm'
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
                'CurrentPage' => $page
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
            'CurrentPage' => $page
        ]);
    }
}
