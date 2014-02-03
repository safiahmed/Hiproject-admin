<?php

class Users {

    private
            $database,
            $connection,
            $mysqli,
            $xml,
            $host = "localhost",
            $name = "magnum_hiprojects",
            $user = "root",
            $pass = "safipassword";

    public function __construct() {
        $this->mysqli = mysqli_connect("$this->host", "$this->user", "$this->pass", "$this->name");
        //$this->xml = simplexml_load_file('my-model.xml');
        $this->xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/work/Hiadmin2101/xml/HiProjectsAdmin.xml');
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }

    /*     * **************************************************************************** */
    /*     * **********************safi ahmed starts******************************* */
    /*     * **************************************************************************** */

    function insert_registration_values($name, $email, $pwd, $mobile) {
        $register = $this->xml->Registration->addREG;
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("sssi", $name, $email, $pwd, $mobile);
            if (!mysqli_execute($stmt)) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
        }
        $stmt->close();
        header("Location: ../index.php");
    }

    function index_product_details($data) {
        $register = $this->xml->IndexPage->selectproducthome;
        if ($stmt = $this->mysqli->prepare($register)) {
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step
            while($row = $res->fetch_assoc())
            {
                $result[]=$row;
            }
        }
        $stmt->close();
//        print_r($result);
        return $result;
    }

    /*     * **************************************************************************** */
    /*     * **********************safi ahmed Code ends here******************************* */
    /*     * **************************************************************************** */
	
	
	
	
	/*     * **************************************************************************** */
    /*     * **********************ganesh code starts******************************* */
    /*     * **************************************************************************** */
	
	    function index_category_name($data) {
        $register = $this->xml->IndexPage->selectcategoryname;
      
        if ($stmt = $this->mysqli->prepare($register)) {
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step
            while($row = $res->fetch_assoc())
            {
                $result[]=$row;
            }
        }
        $stmt->close();
//        print_r($result);
        return $result;
    }
	
	function index_subcategory_name($category_random) {
        $register = $this->xml->categorypage->subcategory_id;
		 
        if ($stmt = $this->mysqli->prepare($register)) {
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result( ); // you have missed this step
			print_r($stmt);
            while($row = $res->fetch_assoc())
            {
                $result[]=$row;
            }
        }
        $stmt->close();
		return $result;
    }
	
	
    /*     * ************************************************************************** */
    /*     * **********************ganesh Code ends here******************************* */
    /*     * ************************************************************************** */
	
		
	 /*     * ************************************************************************** */
     /*     * ************************Asif Code starts here***************************** */
     /*     * ************************************************************************** */
	    
	function selecthomepageproduct($city) {
        $register= $this->xml->product->selecthomepageproduct;
        // print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $city);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step


            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
//        print_r($result);
        return $result;
    }
	
	
	function selecthomepageproduct1($state) {
        $register= $this->xml->product->selecthomepageproduct1;
        // print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            $stmt->bind_param("s", $state);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step


            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
//        print_r($result);
        return $result;
    }
	
	function homepageproducts($data) {
        $register= $this->xml->product->homepageproducts;
        // print_r($register);
        if ($stmt = $this->mysqli->prepare($register)) {
            //$stmt->bind_param("s", $data);
            if (!$stmt->execute()) {
                die('stmt error: ' . mysqli_stmt_error($stmt));
            }
            $res = $stmt->get_result(); // you have missed this step


            while ($row = $res->fetch_assoc()) {
                $result[] = $row;
            }
        }
        $stmt->close();
//        print_r($result);
        return $result;
    }
	
	
	
	
	
	
	
	
	
}

    
	
	 
	 /*     * **************************************************************************** */
     /*     * ************************ Asif Code ends here ******************************* */                                          
     /*     * **************************************************************************** */
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
	 
