<?php
 //index.php



function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {

    $message = '
		<h3 align="center">Order Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">' . $_POST["name"] . '</td>
			</tr>
			<tr>
				<td width="30%">Address</td>
				<td width="70%">' . $_POST["address"] . '</td>
			</tr>
			<tr>
				<td width="30%">Email Address</td>
				<td width="70%">' . $_POST["email"] . '</td>
			</tr>
		
			<tr>
				<td width="30%">Product</td>
				<td width="70%">' . $_POST["product"] . '</td>
			</tr>
			<tr>
				<td width="30%">Color Code</td>
				<td width="70%">' . $_POST["code"] . '</td>
            </tr>
            <tr>
            <td width="30%">Quantity</td>
            <td width="70%">' . $_POST["quantity"] . '</td>
        </tr>
        <tr>
        <td width="30%">Custom Color</td>
        <td width="70%">' . $_POST["customColor"] . '</td>
    </tr>
			<tr>
				<td width="30%">Additional Information</td>
				<td width="70%">' . $_POST["additional_information"] . '</td>
			</tr>
		</table>
	';

    require 'class/class.phpmailer.php';

    $mail = new PHPMailer;
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';                                //Sets the default SMTP server port
    $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'therealarsalan@gmail.com';                    //Sets SMTP username
    $mail->Password = 'masterarsas';                    //Sets SMTP password
    $mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = $_POST["email"];                    //Sets the From email address for the message
    $mail->FromName = $_POST["name"];                //Sets the From name of the message
    $mail->AddAddress('therealarsalan@gmail.com');        //Adds a "To" address
    $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML					//Adds an attachment from a path on the filesystem
    $mail->Subject = 'NEW ORDER REQUEST';                //Sets the Subject of the message
    $mail->Body = $message;                            //An HTML or plain text message body
    if ($mail->Send())                                //Send an Email. Return true on success or false on error
        {

            echo '<div class="alert alert-primary">
            <strong>Order Sent!</strong> You may receive a reply in 48 hours.
             </div>';
        } else {
            echo '<div class="alert alert-danger">
            <strong>Error!</strong>There seems to be an error.
             </div>';
    }
}

?>

<style>

.comment-box .form-control {
    color:#D1CFCF !important;

}

</style>
<section class="Material-contact-section section-padding">
    <div class="container">
        <div class="row">
            <br />
            <h3 class="small-title">
                For products purchasing inquires please fill this form.
            </h3>

            <form method="post" enctype="multipart/form-data">

                <div class="col-md-12">

                    <div class="comment-box row x mt-5 clearfix wow fadeInUp animated" data-wow-delay=".4s">
                        <div class="col-md-6 ">
                            <div class="form-group label-floating">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" placeholder="Your Name" id="name" name="name" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="sr-only" for="useremail">Email</label>
                                <input type="email" placeholder="Email Address" id="email" name="email" required="" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="sr-only" for="useremail">Address</label>
                                <input type="text" placeholder=" Address" id="address" name="address" required="" class="form-control">
                            </div>
                        </div>




                        <div class="col-md-6">
                            <div class="form-group label-floating">

                                <select name="product" class="form-control" required>
                                    <option value="">Select Product</option>
                                    <option value="Polyester Sewing Thread">Polyester Sewing Thread</option>
                                    <option value="Cotton (Full Bleach)">Cotton (Full Bleach)</option>
                                    <option value="Cotton (Half Bleach)">Cotton (Half Bleach)</option>
                                    <option value="Grey Mercerize">Grey Mercerize</option>
                                    <option value="Denier 300/2">Denier 300/2</option>
                                    <option value="Denier 150/2">Denier 150/2</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="sr-only" for="useremail">Quantity</label>

                                <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control" pattern="\d*" id="userQuantity" name="userQuantity" required />

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="sr-only" for="useremail">Color Code</label>
                                <input type="text" name="code" placeholder="Enter color code" class="form-control" pattern="\d*" id="userColorCode" name="userColorCode" required="" />
                            </div>
                        </div>


                        <div class="form-group label-floating col-md-6">
                            <label class="sr-only" for="usermessage">Message</label>
                            <textarea name="additional_information" placeholder="Enter Additional Information" rows="1" required="" class="form-control" required rows="8"></textarea>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="sr-only" for="userurl">Custom Color</label>
                                <input style="border-bottom: 1px solid; padding: 11px; height:53.3px;" type="text" class="jscolor form-control" placeholder="Custom Color" id="customColor" rows="1" value="" name="customColor" required="">
                            
                            </div>
                        </div>
                        <div class="form-submit mt-4">
                            <button class="btn btn-common" type="submit" name="submit" value="Submit"><i class="material-icons mdi mdi-message-outline"></i> Send Order</button>

                            <div class="clearfix"></div>

                           


                        </div>
                    </div>

                </div>
        </div>
    </div>
</section> 