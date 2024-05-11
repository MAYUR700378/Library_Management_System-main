<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="style1.css"> 
</head>
<body>
<div>
        <?php
        if(isset($_POST['submit'])){
            $Username = $_POST['username'];
            $Password = $_POST['password'];

            $host="localhost";
            $db_user = "root";
            $db_pass = "";
            $database = "library";

            $con = mysqli_connect($host,$db_user,$db_pass,$database);
            if($con){
                 echo 'Connected to MySQL';
                 $db = mysqli_select_db($con,$database);
                 $sql = "select * from admin WHERE username='$Username' AND password='$Password'";
                 $query = mysqli_query($con,$sql);
                 $data = mysqli_num_rows($query);
                 echo $data;
                 if($data==1)
                 {
                     header('location:home.php');
                 }
                 else{
                     echo "login failed";
                 }
            }else{
                 die("connection failed:". mysqli_connect_error());
            }                
        }
        ?>
    </div>
    <div class = "box">
        <h2>Admin Login</h2>
        <form action="index.php" method="POST"> 
            <div class = "inputbox">
            <input type = "text" name ="username" required=""> 
            <label>Username</label>           
            </div>
            <div class = "inputbox">
            <input type = "password" name ="password" required="">
            <label>Password</label>
            </div>
            <input type = "submit" name = "submit" type = "submit">
            <div class = "inputbox">
            </div>
           
        </form> 
    </div>
     

    </body>
</html> 