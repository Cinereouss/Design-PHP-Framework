<?php
class CskhController extends Controller {
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Cskh');
    }

    public function addNew() {
        if(isset($_POST['submit'])){
            $email = $this->sanitize_xss($_POST['customer_email']);
            if($this->model->addNewCustomer($email)) {
                header('Location: /Home/#submit-success');
            }else{
                header('Location: /Home/#submit-fail');
            }
        }
    }
}