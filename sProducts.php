<?php include 'header.php';?>
<?php 
//     $con=mysqli_connect('localhost','root','','threads');
//     $searchsql="SELECT * from product";
//     $rs=$con->query(mysql_real_escape_string($searchsql));
//     if(mysqli_num_rows($rs)>0) {
//         while($row=mysqli_fetch_assoc($rs)){
//         $code_id=$row['id'];
//         $code=$row['pname'];
           
//         echo "
//         <div class='col-md-6 col-lg-4 col-xl-4 pb-4 mix business'>
//         <figure class='single-portfolio' style='height: 128px;width: 170px;background-color:white;'>
//         <figcaption class='hover-content'>
//         <a class='btn btn-round btn-fab btn-xs' href='details.php?code_id=$code_id'><i class='material-icons mdi mdi-arrow-right'></i><div class='ripple-container'></div></a>
//         <a href='details.php?code_id=$code_id'><h2 class='subtitle'>Color Code: $code</h2></a>
//         </figcaption>
//         </figure>
//         </div>";
//     }
   
//     } else{
//    echo "<div class='alert alert-dismissible alert-danger'>
//     <button type='button' class='close'>×</button>
    
//     </br>
//     <h4>No Record Found!</h4>
//     <a class='alert-link'>Please search a valid code number.</a>.</p>
//     </br></div>";
// }
// data-dismiss='alert'

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "threads";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, pname, pimage FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pimage'] ).'"/>';
        echo "id: " . $row["id"]. " - Name: " . $row["pname"]. "<br>";
        echo "<div>
        <a href='sPdetails.php?code_id=" . $row["id"]. " '><h2 class='subtitle'>Product:" . $row["pname"]. "</h2></a>
       </div>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
</section>
<?php include 'footer.php';?>