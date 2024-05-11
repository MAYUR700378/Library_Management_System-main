<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/book.css"> 
    <title>Book Details </title>
</head>
<body>
    
        <div id='box1'>
            <h1> <center>Library Management System</center></h1>
        </div>

        <?php
        if(isset($_POST['submit'])){
            $BookName = $_POST['bookname'];
            $Author = $_POST['author'];
            $Eidition = $_POST['edition'];
            $Bookquantity = $_POST['bookquantity'];
            $Availablbook = $_POST['availablebook'];
            $Takenbookity = $_POST['takenbook'];

            $host="localhost";
            $db_user = "root";
            $db_pass = "";
            $database = "library";

            $con = mysqli_connect($host,$db_user,$db_pass,$database);
            if($con){
                 echo 'Connected to MySQL';
                 $db = mysqli_select_db($con,$database);
                 $sql = "INSERT INTO book(bookname,author,edition,bookquantity,availablebook,takenbook) VALUES ('$BookName','$Author','$Eidition','$Bookquantity','$Availablbook','$Takenbookity')";
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
        <!--<div id='next'>
            <button>Next Page</button>
</div>-->
    <div class = "box">
        <h2>Book Data</h2>
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
                <input type = "text" name ="edition" required=""> 
                <label>Edition</label>           
            </div>
            <div class = "inputbox">
                <input type = "number" name ="bookquantity" required="">
                <label>Book Quantity </label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="availablebook" required="">
                <label>Available Book</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="takenbook" required="">
                <label>Taken Book</label>
            </div>
                <center> <input type = "submit" name = "submit" type = "submit" value ="INSERT"> </center>
            <div class = "inputbox">
            </div>

            <div class="next">
                <button><a href="bookdisplay.php">View Record</a></button>
            </div>
        </form> 
    </div>
    
    <div>
</div>
</body>
</html>