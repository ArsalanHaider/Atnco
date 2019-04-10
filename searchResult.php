<?php include 'header.php';?>
<?php include 'searchbar.php';?>
<?php 
    $con=mysqli_connect('localhost','root','','threads');
    if(isset($_GET['submit']))
    {
        $search = mysqli_real_escape_string($con,$_GET['txtSearch']);
        $searchsql="SELECT * from colorcode where code like '%$search%'";
        $rs=$con->query($searchsql);

        if(mysqli_num_rows($rs)>0) {
        while($row=mysqli_fetch_assoc($rs)){
            $code_id=$row['id'];
            $code=$row['code'];
            $hexCode=$row['hexCode'];
           
        echo "
        <div class='col-md-6 col-lg-4 col-xl-4 pb-4 mix business'>
        <figure class='single-portfolio' style='height: 128px;width: 170px;background-color:$hexCode;'>
        <figcaption class='hover-content'>
        <a class='btn btn-round btn-fab btn-xs' href='details.php?code_id=$code_id'><i class='material-icons mdi mdi-arrow-right'></i><div class='ripple-container'></div></a>
        <a href='details.php?code_id=$code_id'><h2 class='subtitle'>Color Code: $code</h2></a>
        </figcaption>
        </figure>
        </div>";
    }
   
    } else{
   echo "<div class='alert alert-dismissible alert-danger'>
    <button type='button' class='close'>×</button>
    
    </br>
    <h4>No Record Found!</h4>
    <a class='alert-link'>Please search a valid code number.</a>.</p>
    </br></div>";
}
// data-dismiss='alert'
    }
?>
</section>
<?php include 'footer.php';?>