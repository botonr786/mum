<?php
class productModel extends CI_Model
{

    public $table_name = "product";
   
    public $userId;
    public $productname;
    public $productprice;
    public $productquantity;
    public $producttype;
    public $discount;
    public $totalamount;
  

    public function createProduct($data)
    {
      
        $insertData = [];
        if (array_key_exists('userId', $data))
            $insertData['userId'] = $data['userId'];
        if (array_key_exists('productname', $data))
            $insertData['productname'] = $data['productname'];
        if (array_key_exists('productprice', $data))
            $insertData['productprice'] = $data['productprice'];
        if (array_key_exists('productquantity', $data))
            $insertData['productquantity'] = $data['productquantity'];
        if (array_key_exists('producttype', $data))
            $insertData['producttype'] = md5($data['producttype']);
        if (array_key_exists('discount', $data))
            $insertData['discount'] = $data['discount'];
            if (array_key_exists('totalamount', $data))
            $insertData['totalamount'] = $data['totalamount'];
       $data=$this->db->insert($this->table_name, $insertData);
     
    }



}