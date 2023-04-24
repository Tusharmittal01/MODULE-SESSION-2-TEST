<?php
// functionality is a function where which contains all th logics
class functionality{
    // This function tells the server connection
    function connection(){
        $conn=new mysqli("localhost","tushar","Innoraft@123","ipl");
        if($conn->connect_error){
            echo "Connection error:" ;$conn->connect_error;
        }
        return $conn;
    }
    // This function helps for admin login
    function adminlogin($id,$name,$option){
        $con = connection();
        $query = "SELECT * FROM admin_table WHERE id='$id' and name='$name' and option='$option' ";
        $result = mysqli_query($con,$query);
        if($result > 0){
            header('../admin_id.php');
        }
    
    }
    function userlogin($id,$name,$option){
        $con = connection();
        $query = "SELECT * FROM user_table WHERE id='$id' and name='$name' ";
        $result = mysqli_query($con,$query);
        if($result > 0){
            header('../user_id.php');
        }
    
    }
    // This function give power to admin to add players
    function add($value){
        $con = connection();
        $query = "INSERT INTO admin_table VALUES(NULL,'$value','0')";
        $result = mysqli_query($con,$query);
        return $result;
    }
    // This function give power to admin to delete players
    function delete($id){
        $con = connection();
        $query = "DELETE FROM admin_table WHERE id='$id'";
        $result = mysqli_query($con,$query);
    }
    //Used to logout from page
    function logout($logout_btn){
        session_abort();
        header('../index.php');
    }
}
?>