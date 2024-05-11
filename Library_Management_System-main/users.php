<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/users.css"> 
    <title>users Details </title>
</head>
<body>
    
        <div id='box1'>
            <h1> <center>Library Management System</center></h1>
        </div>

        <?php
        if(isset($_POST['submit'])){
            $Name = $_POST['name'];
            $BookName = $_POST['takenbookname'];
            $Author = $_POST['author'];
            $Eidition = $_POST['edition'];
            $Totalbook =$_POST['totalbook'];
            $Date = $_POST['takendate'];
            $Return = $_POST['returndate'];
            $Fine = $_POST['fine'];

            $host="localhost";
            $db_user = "root";
            $db_pass = "";
            $database = "library";

            $con = mysqli_connect($host,$db_user,$db_pass,$database);
            if($con){
                 echo 'Connected to MySQL';
                 $db = mysqli_select_db($con,$database);
                 $sql = "INSERT INTO users(name,takenbookname,author,edition,totalbook,takendate,returndate,fine) VALUES ('$Name','$BookName','$Author','$Eidition','$Totalbook','$Date','$Return','$Fine')";
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
        
    <div class = "box">
        <h2>Users Data</h2>
        <form action="" method="POST"> 
        <div class = "inputbox">
                <input type = "text" name ="name" required=""> 
                <label>UserName</label>           
            </div>
            <div class = "inputbox">
                <input type = "text" name ="takenbookname" required=""> 
                <label>Taken Book Name</label>           
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
                <input type = "text" name ="totalbook" required=""> 
                <label>Total No Of Books Taken</label>           
            </div>
            <div class = "inputbox">
                <input type = "date" name ="takendate" required="">
                <label>Date </label>
            </div>
            <div class = "inputbox">
                <input type = "date" name ="returndate" required="">
                <label>Return date</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="fine" required="">
                <label>Fine</label>
            </div>
            <center> <input type = "submit" name = "submit" type = "submit" value ="INSERT"> </center>
            <div class = "inputbox">
            </div>

            <div class="next">
                <button><a href="usersdisplay.php">View Record</a></button>
            </div>
        </form> 
    </div>
    
    <div>
</div>

</body>
</html>