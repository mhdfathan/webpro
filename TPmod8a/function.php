<?php
include 'config.php';

  /* Insert Your Query to Edit and Delete User*/
  	if(isset($_POST['delete'])){
  		del($conn);
  	}elseif (isset($_POST['edit'])) {
  		edt($conn);
  	}

    function edt($conn){
         /*Insert Your Query to Edit User*/
           $id_users = $_POST['id_users'];
           $nama = $_POST['nama'];
           $gender = $_POST['gender'];
           $email = $_POST['email'];
           $update =mysqli_query($conn,"UPDATE participants SET name='$nama',gender='$gender',email='$email' WHERE id_users='$id_users'");

           	if($update){
           		header('location:index.php');
    	   	}else{
    			echo "edite gagal";
    	    }

    }
    function del($conn){
        /* Insert Your Query to Delete User*/
        $id_users=$_POST['id_users'];
        $del1=mysqli_query($conn,"DELETE FROM participants where id_users='$id_users'");
        $del2=mysqli_query($conn,"DELETE FROM users where id_users='$id_users'");
        if($del1 AND $del2){
        header('location:index.php');
    	}else{
    		echo "delete gagal";
    	}
    }
  ?>