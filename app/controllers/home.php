<?php
class Home {
    public function index() {
        echo 'Home Page';
    }
    public function detail($id='', $slug='') {
        echo 'id: ',$id.'<br/>'.'slug: '.$slug;
    }
    public function search() {
        $keyword = $_GET['keyword'];
        echo 'Keyword: '.$keyword;
    }
}