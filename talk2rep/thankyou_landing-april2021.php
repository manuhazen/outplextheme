<?php
/**
 * Template Name: Thank You - Landing Page April 2021
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
                <p>Thank you for contacting OutPLEX! We appreciate your inquiry and will get back to you shortly.</p>
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

    //$to = 'success@outplex.com';
    $to = 'erich@marketmentors.com';
    $subject = 'Free Quote - OutPlex Site';
    $message = "<h3>Free Quote Request | ".$_POST['LandingPage']."</h3> <br />".
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
