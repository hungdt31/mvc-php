<?php
class ProductModel {
    protected $_table = 'product';
    protected $_data = [];
    public function __construct() {
        $this->_data = [
            'Product 1',
            'Product 2',
            'Product 3',
        ];
    }
    public function getList() {
        return $this->_data;
    }
    public function getDetail($id) {
        return $this->_data[$id];
    }
}
