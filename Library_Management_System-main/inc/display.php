<!DOCTYPE html>
<html>
    <head>
    
        <title></title>
        <link rel="stylesheet" href= "css/display.css" />
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" />
</head>
<body>
    <div class = "main-div">
        <h1>List Of Book Suppliers</h1>

        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BOOK NAME</th>
                            <th>AUTHOR</th>
                            <th>SUPPLIER NAME</th>
                            <th>DELIVERY DATE</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connection.php';

                            $selectquery = " select * from supplier ";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $res['b_id']; ?></td>
                                <td><?php echo $res['bookname']; ?></td>
                                <td><?php echo $res['author']; ?></td>
                                <td><?php echo $res['suppliername']; ?></td>
                                <td><?php echo $res['deliverydate']; ?></td>
                                <td><?php echo $res['price']; ?></td>
                                <td><?php echo $res['quantity']; ?></td>
                                <td><a href ="updates.php?id=<?php echo $res['b_id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "UPDATE"><i class='far fa-edit' aria-hidden ="true" ></i></a></td>
                                <td><a href ="delete.php?id=<?php echo $res['b_id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "DELETE    "><i class='fas fa-trash' aria-hidden = "true"></i></a></td>
                        </tr>

                        <?php

                            }

                         ?>

                        
                    </tbody>
                </table>
            </div>
         </div>
    </div>
<script>
    $(document).ready(function(){
        $('[data-toggle = "tooltip]').tooltip();
    });
</script>
<div class="back">
    <a href="../Library/suplier.php">Back</a>

</body>
</html>