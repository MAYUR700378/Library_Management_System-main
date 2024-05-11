<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/supplier.css"> 
    <title>Welcome to Library </title>
</head>
<body>
    
<div>
<?php
        if(isset($_POST['submit'])){
            $BookName = $_POST['bookname'];
            $Author = $_POST['author'];
            $Suppliername = $_POST['suppliername'];
            $Deliverydate = $_POST['deliverydate'];
            $Singlebookp = $_POST['singleprice'];
            $Price = $_POST['price'];
            $Quantity = $_POST['quantity'];

            $host="localhost";
            $db_user = "root";
            $db_pass = "";
            $database = "library";

            $con = mysqli_connect($host,$db_user,$db_pass,$database);
            if($con){
                 echo 'Connected to MySQL';
                 $db = mysqli_select_db($con,$database);
                 $sql = "INSERT INTO supplier(bookname,author,suppliername,deliverydate,singleprice,price,quantity) VALUES ('$BookName','$Author','$Suppliername','$Deliverydate','$Singlebookp','$Price','$Quantity')";
                 $query = mysqli_query($con,$sql);
                 if($query){
                    echo "data inserted";
                 }else{
                    echo "data not inserted";
                 }
            }else{
                 die("connection failed:". mysqli_connect_error());
            }                
        }
    ?>

    
    </div>

        <div id='box1'>
            <h1> <center>Library Management System</center></h1>
        </div>
        <!--<div id='next'>
            <button>Next Page</button>
</div>-->
    <div class = "box">
        <h2>Book Supplier Data</h2>
        <form action="" method="POST"> 
            <div class = "inputbox">
                <input type = "text" name ="bookname" required=""> 
                <label>Book Name</label>           
            </div>
            <div class = "inputbox">
                <input type = "text" name ="author" required="">
                <label>Author</label>
            </div> 
            <div class = "inputbox">
                <input type = "text" name ="suppliername" required=""> 
                <label>Suppplier Name</label>           
            </div>
            <div class = "inputbox">
                <input type = "date" name ="deliverydate" required="">
                <label>Delivered Date</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="singleprice" required="">
                <label>One Book Price</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="price" required="">
                <label>Price</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="quantity" required="">
                <label>Quantity</label>
            </div>
            <center> <input type = "submit" name = "submit" type = "submit" value ="INSERT"> </center>
            <div class = "inputbox">
            </div>

            <div class="next">
                <button><a href="display.php">View Record</a></button>
            </div>
        </form> 
    </div>
    
</body>
</html>