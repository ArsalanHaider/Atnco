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
    $searchsql="SELECT * from product where id='$codeId'";
    $rs=$con->query($searchsql);
    while($row=mysqli_fetch_assoc($rs)){
        $code_id=$row['id'];
        $code=$row['pname'];
        $detail=$row['detail'];
        $image=$row['pimage'];
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $image).'"/>';
    echo "<br/><br/>
    <div class='col-md-6 col-lg-4 col-xl-4 pb-4 mix business'>
    <figure class='single-portfolio' style='height: 160px;width: 300px;'>
    
    </figure>
    <h2 class='subtitle'>Product Name: $code</h2>
    <h2 class='subtitle'>Product Detail: $detail</h2>

    </div>";
    
    
    //echo '<img src="data:assets/images/products/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
   // echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';
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