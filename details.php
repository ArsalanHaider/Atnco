<?php include 'header.php';?>

<section class="page-title-section section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="title-center">
<div class="title-middle">
<h1 class="page-title">Color Details</h1>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="Material-contact-section section-padding">
<div class="container">
<div class="row">
<div class="col-md-12">
</div>
</div>
<div class="row mt-5">

<div class="col-md-6 contact-widget-section2 wow fadeInUp animated" data-wow-delay=".5s">
<section class="Material-contact-section section-padding">
<?php 
    $con=mysqli_connect('localhost','root','','threads');
    if(isset($_GET['code_id'])){
        $codeId= $_GET['code_id'];
    $searchsql="SELECT * from colorcode where id='$codeId'";
    $rs=$con->query($searchsql);
    while($row=mysqli_fetch_assoc($rs)){
        $code_id=$row['id'];
        $code=$row['code'];
        $hexCode=$row['hexCode'];
       
    echo "<br/><br/>
    <div class='col-md-6 col-lg-4 col-xl-4 pb-4 mix business'>
    <figure class='single-portfolio' style='height: 160px;width: 300px;background-color:$hexCode;'>
    
    </figure>
    <h2 class='subtitle'>Color Code: $code</h2>
    </div>";
}
} 
    ?>
</section>
</div>

<div class="col-md-6 wow fadeInUp animated" data-wow-delay=".5s">
<?php include 'sendOrder.php';?>
</div>
</div>
</div>
</section>
 <?php include 'footer.php';?>