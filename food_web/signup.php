<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        
        
        $sql = "Select * from user where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from user where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  
        
        if($count_user == 0 && $count_email==0){  
            
            if($password == $cpassword) {
    
                $hash = password_hash($password, 
                                    PASSWORD_DEFAULT);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO user(username, email, password) VALUES('$username', '$email','$hash')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    header("Location: welcome.php");
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "index.php";
                    </script>';
            }      
        }  
        else{  
            if($count_user>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        window.location.href = "index.php";
                        alert("Email already exists!!")
                    </script>';
            }
        }     
    }
    ?>












<!--
    include "connection.php";
    if (isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $c_password=$_POST['c_password'];

        $sql = "SELECT * FROM users WHERE username = '$username', email = '$email'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count_user == 0 && $count_email == 0)
        {   
            if($password == '$c_password')
            {
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if ($result){
                    // 
                    
                 header("location : welcome.php");
                }
            }
        }else{
            if($count_user > 0)
            {
                echo "<script>window.location.href ='index.php';
                alert('username already in use');</script>";
            }
            if($count_email > 0)
            {
                echo "<script>window.location.href ='index.php';
                alert('username already in use');</script>";
            }
        }
    }
?> -->