<?php
/*
 * inheritance from class model
 */
class HomeModel {
    protected $_table = 'product';
    protected $_data = [
        'Item 1',
        'Item 2',
        'Item 3',
    ];
    public function getList() {
        return $this->_data;
    }
    public function getDetail($id) {
        // check ID valid
        if (isset($this->_data[$id])) {
            return $this->_data[$id];
        }
        // handle if invalid
        return "Invalid ID";
    }
}