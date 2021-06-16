<?php
/**
 * Template Name: Thank You
 * @site talk2rep
 */
get_header();
?>
<!-- Global site tag (gtag.js) - Google Analytics -->

<div id="primary" class="content-area">

<section class="thanks-section">
<div class="container">
    <div class="col-lg-12 col-md-12">
        <div class="free-quote-success-message col-lg-12 col-md-12">
            <div class="col-lg-12 col-md-12">
                <h3>Thank you!</h3>
                <p>Thank you for contacting OutPlex! We appreciate your inquiry and will get back to you shortly.</p>
                <p>If you have questions in the meantime, feel free to send us an email at <a href="mailto:success@outplex.com" target="_top">Success@OutPLEX.com</a> or call us now!</p>
                <p>(866) 856-2737</p>
            </div>
        </div>

    </div>
</div>
</section>
</div>

<?php

if(isset($_POST['SubmitButton'])){ //check if form was submitted

    $checkArry = $_POST['fqchecks'];
    $strChecks = ' ';
    if(isset($checkArry)) {
        foreach ($checkArry as $value) {
            $strChecks = $strChecks . ', ' . $value;
        }

    }
	
	// 	Blacklist section, grows depends on the errors come up
	if ($_POST['company'] == 'talkwithwebvisitor.com') {
		http_response_code(400);
		exit;
	}
	
	if ($_POST['email'] == 'eric.jones.z.mail@gmail.com') {
		http_response_code(400);
		exit;
	}
	// 	End of Blacklist

    $to = 'success@outplex.com';
    $subject = 'Free Quote - OutPlex Site';
    $message = "<h3>Free Quote Request</h3> <br />".
        "<b>I’m interested in:</b>". $strChecks . "<br />".
        "<br />".
        "<b>First name:</b> ".$_POST['firstname']."<br />".
        "<br />".
        "<b>Last name:</b> ".$_POST['lastname']."<br />".
        "<br />".
        "<b>Email:</b> ".$_POST['email']."<br />".
        "<br />".
        "<b>Company:</b> ".$_POST['company']."<br />".
        "<br />".
        "<b>Phone:</b> ".$_POST['phone']."<br />".
        "<br />".
        "<b>How did you learn about us:</b> ".$_POST['slctnlearn']."<br />".
        "<br />".
        "<b>Tell us about your needs: \n</b><br />".
        "<br />".
        $_POST['message'];
	
	$secretKey = "6Le82MYZAAAAABNAeuWUZohOhsmxjXFhB6N6zBQ7";
	$responseKey = $_POST["g-recaptcha-response"];
	$userIP = $_SERVER["REMOTE_ADDR"];
	$url_goo_check = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
	
	$respx = file_get_contents( $url_goo_check );
	$respx = json_decode( $respx );
	
	if($respx->success){
		wp_mail( $to, $subject, $message);


		// SEND FORM TO A LEADS
		$url = "https://api.getbase.com/v2/leads";

		$arg_data = array( 
			'data' => array(
				'first_name' => $_POST['firstname'],
				'last_name' => $_POST['lastname'],
				'organization_name' => $_POST['company'],
				'description' => $_POST['message'],
				'email' => $_POST['email'],
				'phone' => $_POST['phone'],
				'custom_fields' => array(
					'learn_by' => $_POST['slctnlearn']
				)
			)
		);

		$data = json_encode( $arg_data );

		$args = array(
			'method' => 'POST',
			'headers' => array(
			'Accept' => 'application/json',
			'Authorization' => 'Bearer 9fd527d7934413a8e896f2127f7b743ae18b71dd7368c2a6e4f9c7761707b17d',
			'Content-Type'=> 'application/json'    
			),
			'body' => $data 
		);

		$response = wp_remote_post($url, $args);
		echo "<p class=\"form-status\">Form sent successfully!</p>";
	}else{
		echo "<div class=\"form-status-error\"><p>Form submission failed<br />Please go back to the form and <br />check the \"Im not a robot\" checkbox</p></div>";
	}
	
    
}

?>

<!-- Event snippet for Quote Submission conversion page -->

<script>

    gtag('event', 'conversion', {

        'send_to': 'AW-785918302/arX8CPz4j4oBEN7S4PYC',

        'value': 1.0,

        'currency': 'USD'

    });

</script>

<?php
get_footer();
?>
