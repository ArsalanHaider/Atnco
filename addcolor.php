<?php include 'header.php';?>


<section class="page-title-section section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-center">
<div class="title-middle">
<h1 class="page-title">Add Color</h1>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="Material-contact-section section-padding">
<div class="container">

<div class="row mt-5">
<div class="col-md-6  wow fadeInUp animated" data-wow-delay=".5s">
<h2 class="subtitle">Enter Details</h2>
<form class="shake" role="form" action="addcolor.php" method="post" data-toggle="validator">

<div class="form-group label-floating">
<label class="control-label" for="name">Color Code</label>
<input class="form-control" id="code" type="text" name="code" required data-error="Please enter code">
<div class="help-block with-errors"></div>
</div>

<div class="form-group label-floating">
<label class="control-label" for="email">HEX Code</label>
<input class="form-control" id="hcode" type="text" name="hcode" required data-error="Please enter hex code">
<div class="help-block with-errors"></div>
</div>


<div class="form-submit mt-4">
<button class="btn btn-common" type="submit" name="submit" id="submit"><i class="material-icons mdi mdi-message-outline"></i>Add Color</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</form>
</div>
</div>
</div>
</section>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


// if(isset($_POST['submit']))
// {
//     $hostname = "localhost";
//     $username = "root";
//     $password = "";
//     $databaseName = "threads";

// $code = $_POST['code'];
// $hcode = $_POST['hcode'];
// $connect = mysqli_connect($hostname, $username, $password, $databaseName);
// $sql="INSERT INTO 'colorcode'('code','hexcode') VALUES ('$code','$hcode')";
// $result = mysqli_query($connect,$sql);
// if($result)
// {
//     echo 'Data Inserted';
// }

// else{
//     echo 'Data Not Inserted';
// }

// mysqli_close($connect);
// }


?>
<?php
if(isset($_POST['submit']))
{
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "threads";
// Create connection
$conn = new mysqli($hostname, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else
$code = $_POST['code'];
$hcode = $_POST['hcode'];
$sql = "INSERT INTO colorcode(code,hexcode) VALUES ('$code','$hcode')";
if ($conn->query($sql) === TRUE) {
echo "";
} 
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location:addcolor.php");

}
?>

<?php include 'footer.php';?>