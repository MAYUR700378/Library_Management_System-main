<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/supplier.css"> 
    <title>Welcome to Library </title>
</head>
<body>
    
<div>
<?php
    include 'connection.php';

    $ids =$_GET['id'];

    $query = "select * from supplier where b_id={$ids}";
    
    $data = mysqli_query($con,$query);

    $arrdata = mysqli_fetch_array($data);

    if(isset($_POST['submit'])){

        $idupdate =$_GET['id'];

        $BookName = $_POST['bookname'];
        $Author = $_POST['author'];
        $Suppliername = $_POST['suppliername'];
        $Deliverydate = $_POST['deliverydate'];
        $Singlebookp = $_POST['singleprice'];
        $Price = $_POST['price'];
        $Quantity = $_POST['quantity'];

        $update = " update supplier set bookname='$BookName',author='$Author',suppliername='$Suppliername',deliverydate='$Deliverydate',singleprice='$Singlebookp',price='$Price',quantity='$Quantity' where b_id= $idupdate";
 
        $upquery = mysqli_query($con,$update);
        if($upquery){
            echo"Data Updated Sucessfully";
         }else{
            echo "Data not Updated Sucessfully";
         }


    }





?>


    </div>

        <div id='box1'>
            <h1> <center>Library Management System</center></h1>
        </div>
        
    <div class = "box">
        <h2>Book Supplier Data</h2>
        <form action="" method="POST"> 
            <div class = "inputbox">
                <input type = "text" name ="bookname" value="<?php echo $arrdata['bookname']; ?>" required=""> 
                <label>Book Name</label>           
            </div>
            <div class = "inputbox">
                <input type = "text" name ="author" value="<?php echo $arrdata['author']; ?>" required="">
                <label>Author</label>
            </div> 
            <div class = "inputbox">
                <input type = "text" name ="suppliername" value="<?php echo $arrdata['suppliername']; ?>" required=""> 
                <label>Suppplier Name</label>           
            </div>
            <div class = "inputbox">
                <input type = "date" name ="deliverydate" value="<?php echo $arrdata['deliverydate']; ?>" required="">
                <label>Delivered Date</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="singleprice" value = "<?php echo $arrdata['singleprice']; ?>" required="">
                <label>One Book Price</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="price" value="<?php echo $arrdata['price']; ?>" required="">
                <label>Price</label>
            </div>
            <div class = "inputbox">
                <input type = "number" name ="quantity" value="<?php echo $arrdata['quantity']; ?>" required="">
                <label>Quantity</label>
            </div>
            <div class="button">
                <center> <input type = "submit" name = "submit" type= "submit" value="UPDATE" /> </center>
            </div>
            <div class = "inputbox">
            </div>

            <div class="next">
                <button><a href="display.php">View Record</a></button>
            </div>
        </form> 
    </div>
    
    <div>
</div>
</body>
</html>