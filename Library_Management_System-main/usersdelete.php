<?php
    include 'connection.php';

    $id =$_GET['id'];

    $delete = " delete from users where u_id=$id";

    $query = mysqli_query($con,$delete);

    if($query){
        ?>
            <script>
                alert("Deleted Sucessfully");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Record Not Deleted");
            </script>

        <?php
    }

    header('location:usersdisplay.php');





?>