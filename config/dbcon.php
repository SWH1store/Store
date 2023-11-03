

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check data base</title>
</head>
<body>

    <center>

   
    <div class="connect" >
    <?php 


$host ="localhost";
$username ="root";
$password ="";
$database = "swh-test";

$con = mysqli_connect($host, $username , $password, $database);
// check connect to databse

if(!$con){

   die("connection failed:". mysqli_connect_error());

}



else{
echo"connected successfully";

};


?>
</centter>
    </div>
</body>
</html>
<style>
    .connect{
        font-size:25px;
     color:red;
        
        height: center;

    }


</style>

