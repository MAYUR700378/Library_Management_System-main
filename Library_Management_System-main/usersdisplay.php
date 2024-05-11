<!DOCTYPE html>
<html>
    <head>
    
        <title></title>
        <link rel="stylesheet" href= "css/Udisplay .css" />
        <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" />
</head>
<body>
    <div class = "main-div">
        <h1>users Data</h1>

        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>BOOK NAME</th>
                            <th>AUTHOR</th>
                            <th>EDITION</th>
                            <th>TOTAL NO OF BOOKS</th>
                            <th>DATE </th>
                            <th>RETURNDATE</th>
                            <th>FINE</th>
                            <th colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connection.php';

                            $selectquery = " select * from users ";

                            $query = mysqli_query($con,$selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $res['u_id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['takenbookname']; ?></td>
                                <td><?php echo $res['author']; ?></td>
                                <td><?php echo $res['edition']; ?></td>
                                <td><?php echo $res['totalbook']; ?></td>
                                <td><?php echo $res['takendate']; ?></td>
                                <td><?php echo $res['returndate']; ?></td>
                                <td><?php echo $res['fine']; ?></td>
                                <td><a href ="usersupdate.php?id=<?php echo $res['u_id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "UPDATE"><i class='far fa-edit' aria-hidden ="true" ></i></a></td>
                                <td><a href ="usersdelete.php?id=<?php echo $res['u_id']; ?>" data-toggle="tooltip" data-placement = "bottom" title = "DELETE    "><i class='fas fa-trash' aria-hidden = "true"></i></a></td>
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
        <button><a href="users.php">Back</a></button>
    </div>
<script>
    $(document).ready(function(){
        $('[data-toggle = "tooltip]').tooltip();
    });
</script>

</body>
</html>