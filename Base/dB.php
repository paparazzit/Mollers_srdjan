<?php

class dB{
    public $conn;

    function __construct($dB){
        $this -> conn = new mysqli('localhost','root','',$dB);
        $this -> conn->set_charset("utf8");
        if($this->conn ->connect_error)
            die("Error: ". $this->conn->connect_error);
        // else
        //     echo "Connected";
    }

    function make_select($inquiry){
        $data = $this -> conn -> query($inquiry);

        if($data == false)
            return['successful' => false , 'error'=>$this->conn->error];
        else{
            $row = $data -> fetch_all(MYSQLI_ASSOC);
            return['successful' => true , 'row' => $row];
        }
           
    }

    function make_inquiry($inquiry){
        $result = $this -> conn -> query($inquiry);
            if($result == false)
                die('Inquiry error:' .$this->conn->error);
            else    
                echo "Inquiry successful";
    }
    // SELECT * FROM `product_desc` join products ON products.id=product_desc.product_id; !!
    function get_products(){
        $result = $this-> make_select("SELECT * FROM products");
            if($result['successful'] == true)
                return $result['row'];
            else
                die("Inquiry error". $result['error']);
    }

    function get_product($id){
        $result = $this-> make_select("SELECT * FROM products WHERE id=$id;");
            if($result['successful'] == true)
                return $result['row'][0];
            else
                die("Inquiry error". $result['error']);
    }
    function save_cart($address,$name,$lName,$phone,$city,$postal,$total){
        $this-> make_inquiry("INSERT INTO `cart`(`address`, `name`, `last_name`, `phone`, `city`, `postal`, `total`) VALUES ('$address','$name','$lName','$phone','$city','$postal',$total)");

        return $this->conn->insert_id;

    }
    function save_cart_products($cart_id,$product_id,$price,$quantity){
        $this-> make_inquiry("INSERT INTO `cart_products`(`cart_id`, `product_id`, `price`, `quantity`) VALUES ($cart_id,$product_id,$price,$quantity) ");

    }
    function get_amount($id){
        $result=$this->make_select("SELECT quantity FROM products where id=$id");
        if($result['successful'] == true)
        return $result['row'];
    else
        die("Inquiry error". $result['error']);

    }
    function update_amount($amount,$id){      
        $this-> make_inquiry("UPDATE products SET quantity=$amount WHERE id=$id");

    }
    function get_user($username,$password){
        $result=$this->make_select("SELECT * FROM admin where username='$username' && password='$password'");
        if($result['successful'] == true)
        return $result['row'];
    else
        die("Inquiry error". $result['error']);

    }
    //CRUD functions

    function add_new_product($name,$short_desc,$main_desc,$footer_desc,$image,$price,$quantity){
        $this-> make_inquiry("INSERT INTO `products`( `name`, `short_desc`, `description`, `description_footer`,`image`, `price`, `quantity`) VALUES('$name','$short_desc','$main_desc','$footer_desc','$image','$price','$quantity')");

    }
    function delete_product($id){
        $this-> make_inquiry("DELETE FROM `products` WHERE id=$id;");
    }
    function get_one_product($id){
        $result=$this->make_select("SELECT * FROM products WHERE id=$id");
        if($result['successful'] == true)
        return $result['row'][0];
    else
        die("Inquiry error". $result['error']);

    }
    function update_product($id,$name,$short_desc,$main_desc,$footer_desc,$image,$price,$quantity){
        $this-> make_inquiry("UPDATE `products` SET `name`='$name',`short_desc`='$short_desc',`description`='$main_desc',`description_footer`='$footer_desc',`image`='$image',`price`=$price,`quantity`=$quantity WHERE id=$id");
    }
}
$b = new dB('mollers');
$products = $b -> get_products();
