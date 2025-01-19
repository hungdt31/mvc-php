<?php
class Product extends Controller{
    protected $model_product;
    public $data = [];
    public function __construct() {
        $this->model_product = $this->model('ProductModel');
    }
    public function list_product()
    {
        $dataProduct = $this->model_product->getList();
        $this->data['product_list'] = $dataProduct;
        $this->data['page_title'] = 'Danh sách sản phẩm';
        // render view
        $this->render('products/list', $this->data);
    }
    public function detail($id='', $slug='') {
//        echo 'id: ',$id.'<br/>'.'slug: '.$slug. '<br/>';
        $this->data['info'] = $this->model_product->getDetail($id);
        $this->data['page_title'] = 'Chi tiết sản phẩm';
        $detail = $this->model_product->getDetail($id);
        $this->render('products/detail', $this->data);
    }
}
