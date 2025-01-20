<?php
class Home extends Controller{
    public $model_home;
    public function __construct() {
        $this->model_home = $this->model('HomeModel');
//        var_dump($this->model_home);
    }
    public function index() {
        $data = $this->model_home->getList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    public function detail($id='', $slug='') {
        echo 'id: ',$id.'<br/>'.'slug: '.$slug. '<br/>';
        $detail = $this->model_home->getDetail($id);
        echo '<pre>';
        print_r($detail);
        echo '</pre>';
    }
    public function search() {
        $keyword = $_GET['keyword'];
        echo 'Keyword: '.$keyword;
    }
}