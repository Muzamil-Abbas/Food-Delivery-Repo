<?php include("Manage/menu.php");?>

<div class="main-content">
<div class="container">
    <h1> Add New Admin </h1>
    <br> 
    <form action="" method="post">
    <table class="tbl-30">
        <tr>
            <td>FullName: </td>

            <td>
                <input type="text" name = "full_name" placeholder="Enter Your Name">
            </td>
        </tr>
        <tr>
            <td>Username: </td>
            <td>
                <input type="text" name = "username" placeholder="Enter Username">
            </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td>
                <input type="password" name = "password" placeholder="Enter Your Password">
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
                <input type="submit" name = "submit" value="Add Admin" class="btn-secondary">
            </td>
        </tr>
    </table>
    </form>
</div>
</div>

<?php include("Manage/footer.php");?>

<?php
    
// $showAlert = false; 
// $showError = false; 
// $exists=false;
    
// if($_SERVER["REQUEST_METHOD"] == "POST") {
     
//     $full_name = $_POST["full_name"]; 
//     $username = $_POST["username"]; 
//     $password = $_POST["password"]; 
            
    
//     $sql = "Select * from  where username='$username'";
    
//     $result = mysqli_query($conn, $sql);
    
//     $num = mysqli_num_rows($result); 
// if(isset($_POST["submit"]))
// {
// // echo "Button Clicked";
// // echo "click";

//     $full_name = $_POST["full_name"];
//     $username = $_POST["username"];
//     $password = md5($_POST["password"]);

//     $sql = "insert into tbl-admin SET
//     full_name =`$full_name`, username=`$username`, password=`$password`"; 

// }else{

// }

// $result = mysqli_query($conn, $sql) or die(mysqli_connect_error());

// if( $result == true){
//     echo "Insert data successfully!";
// }else{
//     echo "Error inserting data!";
// }