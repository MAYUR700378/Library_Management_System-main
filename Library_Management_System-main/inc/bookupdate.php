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

        <div>
        
        <?php

            include 'connection.php';

            $ids =$_GET['id'];

            $query = "select * from book where id={$ids}";

            $data = mysqli_query($con,$query);

            $arrdata = mysqli_fetch_array($data);

            if(isset($_POST['submit'])){

                $idupdate =$_GET['id'];

                $BookName = $_POST['bookname'];
                $Author = $_POST['author'];
                $Edition = $_POST['edition'];
                $Bookquantity = $_POST['bookquantity'];
                $Availablebook = $_POST['availablebook'];
                $Takenbook = $_POST['takenbook'];

                $update = " update book set bookname='$BookName',author='$Author',edition='$Edition',bookquantity='$Bookquantity',availablebook='$Availablebook',takenbook='$Takenbook' where id= $idupdate";
 
            $upquery = mysqli_query($con,$update);
            if($upquery){
                echo "data updated inserted";
            }else{
                echo "data not updated inserted";
            }

                   
            }
        ?>

        </div>
        <!--<div id='next'>
            <button>Next Page</button>
</div>-->
    <div class = "box">
        <h2>Book Data</h2>
        <form action="" method="POST"> 
            <div class = "inputbox">
                <input type = "text" name ="bookname" value = "<?php echo $arrdata['bookname']; ?>" required=""> 
                <label>Book Name</label>           
            </div>
            <div class = "inputbox">
                <input type = "text" name ="author" value = "<?php echo $arrdata['author']; ?>" required="">
                <label>Author</label>
            </div> 
            <div class = "inputbox">
                <input type = "text" name ="edition" value = "<?php echo $arrdata['edition']; ?>" required=""> 
                <label>Edition</label>           
            </div>
            <div class = "inputbox">
                <input type = "number" name ="bookquantity" value = "<?php echo $arrdata['bookquantity']; ?>" required="">
                <label>Book Quantity </label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="availablebook" value = "<?php echo $arrdata['availablebook']; ?>" required="">
                <label>Available Book</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="takenbook" value = "<?php echo $arrdata['takenbook']; ?>" required="">
                <label>Taken Book</label>
            </div>
            <div class="button">
                <center> <input type = "submit" name = "submit" type= "submit" value="UPDATE" /> </center>
            </div>
            <div class = "inputbox">
            </div>
        </form> 
    </div>
    
    <div>
</div>
</body>
</html>