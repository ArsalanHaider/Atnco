<?php  $page='index'; include 'header.php';?>





<div id="main-slide" class="carousel slide slider-2" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#main-slide" data-slide-to="0" class="active"></li>
<li data-target="#main-slide" data-slide-to="1"></li>
<li data-target="#main-slide" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="assets/images/slider/slide_1.jpg" alt="First slide">
<div class="carousel-caption second-slider d-md-block text-left">
<h1 class="wow fadeInLeft hero-heading" data-wow-delay="700ms">Crafted Carefully with Love</h1>
<h5 class="wow fadeInLeft hero-sub-heading" data-wow-delay="500ms">Material Design Meets With The Power of Bootstrap 4</h5>
<a href="javascript:void(0)" class="fadeInLeft wow btn btn-common" data-wow-delay="300ms"><i class="material-icons mdi mdi-lightbulb-outline"></i> Explore<div class="ripple-container"></div></a>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="assets/images/slider/slide_2.jpg" alt="Second slide">
<div class="carousel-caption second-slider d-md-block text-left">
<h1 class="wow fadeInUp hero-heading" data-wow-delay="700ms">UI Kit and Template</h1>
<h5 class="wow fadeInUp hero-sub-heading" data-wow-delay="500ms">Extensively Customizable Tons of UI Elements</h5>
<a href="javascript:void(0)" class="fadeInUp wow btn btn-common" data-wow-delay="300ms"><i class="material-icons mdi mdi-cart-outline"></i> Purchase</a>
<a href="javascript:void(0)" class="fadeInUp wow btn btn-border" data-wow-delay="500ms"><i class="material-icons mdi mdi-lightbulb-outline"></i> Learn More <div class="ripple-container"></div></a>
</div>
</div>
<div class="carousel-item">
<img class="d-block w-100" src="assets/images/slider/slide_3.jpg" alt="Third slide">
<div class="carousel-caption second-slider d-md-block text-left">
<h1 class="wow fadeInDown hero-heading" data-wow-delay="700ms">Feature Rich Elements</h1>
<h5 class="fadeInDown wow hero-sub-heading" data-wow-delay="500ms">Ready to Use for Business, Agency, Startup, Portfolio Sites and More...</h5>
<a href="javascript:void(0)" class="fadeInDown wow btn btn-common" data-wow-delay="300ms"><i class="material-icons mdi mdi-arrow-collapse-down"></i> Download Now</a>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
<span class="carousel-control" aria-hidden="true"><i class="mdi mdi-arrow-left" data-ripple-color="#F0F0F0"></i></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
<span class="carousel-control" aria-hidden="true"><i class="mdi mdi-arrow-right" data-ripple-color="#F0F0F0"></i></span>
<span class="sr-only">Next</span>
</a>
</div>


<?php include 'aboutus.php';?>
<?php include 'certificate.php';?>
<?php include 'products-info.php';?>


<section class="Material-portfolio-section section-padding section-dark">
<div class="container">
<div class="row">

<div class="col-md-4 col-lg-4 col-xl-6  Material-title-section wow animated fadeInLeft" data-wow-delay=".2s">
<h1 class="section-title">Featured Works</h1>
</div>

<div class="col-md-8 col-lg-8 col-xl-6  portfolio-nav mb-3 wow animated fadeInRight" data-wow-delay=".2s">
<ul class="nav nav-pills">
<li><a class="filter active" data-filter="all">All</a></li>
<li><a class="filter" data-filter=".business">Business</a></li>
<li><a class="filter" data-filter=".development">Development</a></li>
<li><a class="filter" data-filter=".creative">Creative</a></li>
<li><a class="filter" data-filter=".more">More</a></li>
</ul>
</div>
<div class="portfolio-item-wrapper clearfix wow animated fadeInUp" data-wow-delay=".5s" id="Material-portfolio">

<div class="col-md-6 col-lg-4 col-xl-4 pb-4 mix business">
<figure class="single-portfolio">
<img class="img-fluid" src="assets/images/portfolio/work1.jpg" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
<a href="portfolio-single.html"><h2 class="subtitle">Business Cards</h2></a>
<p>Asus Inc.</p>
</figcaption>
</figure>
</div>

<div class="col-md-6 col-lg-4 col-xl-4 mix development more">
<figure class="single-portfolio">
<img class="img-fluid" src="assets/images/portfolio/work2.jpg" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
<a href="portfolio-single.html"><h2 class="subtitle">Brochure Design</h2></a>
<p>Tesla Motors</p>
</figcaption>
</figure>
</div>

<div class="col-md-6 col-lg-4 col-xl-4 mix creative business">
<figure class="single-portfolio">
<img class="img-fluid" src="assets/images/portfolio/work3.jpg" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
<a href="portfolio-single.html"><h2 class="subtitle">Coffee Cup</h2></a>
<p>Starbucks USA</p>
</figcaption>
</figure>
</div>

<div class="col-md-6 col-lg-4 col-xl-4 mix creative more development">
<figure class="single-portfolio">
<img class="img-fluid" src="assets/images/portfolio/work4.jpg" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
<a href="portfolio-single.html"><h2 class="subtitle">Landing Page</h2></a>
<p>Uniliver, India</p>
</figcaption>
</figure>
</div>

<div class="col-md-6 col-lg-4 col-xl-4 mix more development">
<figure class="single-portfolio">
<img class="img-fluid" src="assets/images/portfolio/work5.jpg" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
<a href="portfolio-single.html"><h2 class="subtitle">Dashboard Design</h2></a>
<p>Linode Inc.</p>
</figcaption>
</figure>
</div>

<div class="col-md-6 col-lg-4 col-xl-4 mix creative business">
<figure class="single-portfolio">
<img class="img-fluid" src="assets/images/portfolio/work6.jpg" alt="">
<figcaption class="hover-content">
<a class="btn btn-round btn-fab btn-xs" href="portfolio-single.html"><i class="material-icons mdi mdi-arrow-right"></i><div class="ripple-container"></div></a>
<a href="portfolio-single.html"><h2 class="subtitle">Re-Branding</h2></a>
<p>Alphabet Inc.</p>
</figcaption>
</figure>
</div>
</div>
</div>
<div class="row mt-4 wow animated fadeInUp" data-wow-delay=".3s">
<div class="col-md-12 text-center">
<a href="javascript:void(0)" class="animated4 btn btn-common" data-ripple-color="#000"><i class="material-icons mdi mdi-lightbulb-outline"></i> Browse All<div class="ripple-container"></div></a>
</div>
</div>
</div>
</section>








<section class="Material-contact-section section-padding">
<div class="container">
<div class="row">

<div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
<?php include 'sendEmail.php';?>

</div>
</div>



</div>
</div>
</section>

<?php include 'footer.php';?>


