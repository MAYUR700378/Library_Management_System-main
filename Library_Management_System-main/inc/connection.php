<?php
$host="localhost";
$db_user = "root";
$db_pass = "";
$database = "library";

$con = mysqli_connect($host,$db_user,$db_pass,$database);

if($con){
    ?>
    <script>
        alert "Connection Sucessful";
    </script>
<?php
}else{
    die("no connection" .mysqli_connect_error());
}


?>