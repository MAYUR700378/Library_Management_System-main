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

        <div>
        <?php

            include 'connection.php';

            $ids =$_GET['id'];

            $query = "select * from users where u_id={$ids}";

            $data = mysqli_query($con,$query);

            $arrdata = mysqli_fetch_array($data);

        if(isset($_POST['submit'])){

            $idupdate =$_GET['id'];

            $Name = $_POST['name'];
            $BookName = $_POST['takenbookname'];
            $Author = $_POST['author'];
            $Eidition = $_POST['edition'];
            $Totalbook =$_POST['totalbook'];
            $Date = $_POST['takendate'];
            $Return = $_POST['returndate'];
            $Fine = $_POST['fine'];


            $update = " update users set name='$Name',takenbookname='$BookName',author='$Author',edition='$Eidition',takendate='$Date',returndate='$Return',fine='$Fine' where u_id= $idupdate";
 
        $upquery = mysqli_query($con,$update);
        if($upquery){
            echo "Data Updated Sucessfully";
         }else{
            echo "Data not Updated Sucessfully";
         }

            
        }
    ?>

       </div>
        
    <div class = "box">
        <h2>Users Data</h2>
        <form action="" method="POST"> 
        <div class = "inputbox">
                <input type = "text" name ="name" value = "<?php echo $arrdata['name']; ?>" required=""> 
                <label>UserName</label>           
            </div>
            <div class = "inputbox">
                <input type = "text" name ="takenbookname" value = "<?php echo $arrdata['takenbookname']; ?>" required=""> 
                <label>Taken Book Name</label>           
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
                <input type = "text" name ="totalbook" value = "<?php echo $arrdata['totalbook']; ?>" required=""> 
                <label>Total No Of Books Taken</label>           
            </div>
            <div class = "inputbox">
                <input type = "date" name ="takendate" value = "<?php echo $arrdata['takendate']; ?>" required="">
                <label>Date </label>
            </div>
            <div class = "inputbox">
                <input type = "date" name ="returndate" value = "<?php echo $arrdata['returndate']; ?>" required="">
                <label>Return date</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="fine" value = "<?php echo $arrdata['fine']; ?>" required="">
                <label>Fine</label>
            </div>
            <div class="button">
                <center> <input type = "submit" name = "submit" type= "submit" value="UPDATE" /> </center>
            </div>
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