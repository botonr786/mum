<?php
class userModel extends CI_Model
{

    public $table_name = "users";
   
    public $name;
    public $username;
    public $phone;
    public $email;
    public $password;
    public $address;
  

    public function createUser($data)
    {
        // print_r($data);die;
      
        $insertData = [];
        if (array_key_exists('name', $data))
            $insertData['name'] = $data['name'];
        if (array_key_exists('username', $data))
            $insertData['username'] = $data['username'];
        if (array_key_exists('phone', $data))
            $insertData['phone'] = $data['phone'];
        if (array_key_exists('email', $data))
            $insertData['email'] = $data['email'];
        if (array_key_exists('password', $data))
            $insertData['password'] = md5($data['password']);
        if (array_key_exists('address', $data))
            $insertData['address'] = $data['address'];
       $data=$this->db->insert($this->table_name, $insertData);
      return $respo=$this->db->insert_id();
    }

public function userdata($null,$data){
  if($data==null){
    $this->db->select("*")
    ->from($this->table_name);
    $data=$this->db->get();
   return $result=$data->result();
  }else{
    $this->db->select("*")
    ->from($this->table_name)
    ->where("name",$data);
    $data=$this->db->get();
   return $result=$data->result();
  }
 
}

}