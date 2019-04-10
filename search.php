<?php $page='search'; include 'header.php';?>
<?php include 'searchbar.php';?>


    <?php 
$conn=mysqli_connect('localhost','root','','threads');
 // find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM colorcode";
$result = mysqli_query($conn,$sql);
$r = mysqli_fetch_row($result);
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 100;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT * FROM colorcode LIMIT $offset, $rowsperpage";
$result = mysqli_query($conn,$sql);

// while there are rows to be fetched...
while ($row = mysqli_fetch_assoc($result)) {
   // echo data
   $code_id=$row['id'];
   $code=$row['code'];
   $hexCode=$row['hexCode'];
   echo "
   <div class='col-md-6 col-lg-3 col-xl-3 pb-4 mix business'>
   <figure class='single-portfolio'  style='height: 128px;width: 170px;background-color:$hexCode;'>
   <figcaption class='hover-content'>
   <a class='btn btn-round btn-fab btn-xs' href='details.php?code_id=$code_id'><i class='material-icons mdi mdi-arrow-right'></i><div class='ripple-container'></div></a>
   <a href='details.php?code_id=$code_id'><h2 class='subtitle'>Color Code: $code</h2></a>
   </figcaption>
   </figure>
   </div> ";
} // end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo "
   <div class='col-md-12 col-lg-12 col-xl-12 pb-4'>
 
   <div class='pagination'>
   <div class='page-item'>
    <a class='page-link' href='{$_SERVER['PHP_SELF']}?currentpage=1'> &laquo; </a> 
    </div>";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo "<div class='page-item'>
   <a class='page-link' href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>Prev</a></div> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " <div class='page-item'> 
         <b class='page-link'>$x</b></div> ";
      // if not current page...
      } else {
         // make it a link
         echo "<div class='page-item'>
         <a class='page-link' href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></div> ";
      } // end else
   } // end if 
} // end for

// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo "<div class='page-item'>
   <a class='page-link' href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>Next</a> </div>";
   // echo forward link for lastpage
   echo "<div class='page-item'>
   <a class='page-link' href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>&raquo;</a></li><div></div> ";
} // end if
/****** end build pagination links ******/
?>

</section>
<?php include 'footer.php';?>