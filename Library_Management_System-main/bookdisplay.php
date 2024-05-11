<!DOCTYPE html>
<html>
    <head>
    
        <title></title>
        <link rel="stylesheet" href= "css/Bdisplay .css" />
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" />
</head>
<body>
    <div class = "main-div">
        <h1>List Of All Books</h1>

        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BOOK NAME</th>
                            <th>AUTHOR</th>
                            <th>EDITION</th>
                            <th>BOOK QUANTITY </th>
                            <th>AVAILABLE BOOK</th>
                            <th>TAKEN BOOK</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connection.php';

                            $selectquery = " select * from book ";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $res['id']; ?></td>
                                <td><?php echo $res['bookname']; ?></td>
                                <td><?php echo $res['author']; ?></td>
                                <td><?php echo $res['edition']; ?></td>
                                <td><?php echo $res['bookquantity']; ?></td>
                                <td><?php echo $res['availablebook']; ?></td>
                                <td><?php echo $res['takenbook']; ?></td>
                                <td><a href ="bookupdate.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "UPDATE"><i class='far fa-edit' aria-hidden ="true" ></i></a></td>
                                <td><a href ="bookdelete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "DELETE    "><i class='fas fa-trash' aria-hidden = "true"></i></a></td>
                        </tr>

                        <?php

                            }

                         ?>

                        
                    </tbody>
                </table>
            </div>
         </div>
    </div>
    <div class="next">
        <button><a href="book.php">Back</a></button>
    </div>
<script>
    $(document).ready(function(){
        $('[data-toggle = "tooltip]').tooltip();
    });
</script>

</body>
</html>