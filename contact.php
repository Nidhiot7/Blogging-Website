<?php
include 'partials/header.php';



if(isset($_REQUEST['submit'])){
    if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['mobile']=="")||($_REQUEST['text']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill ALL Fields ';
    }else{
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $mobile=$_REQUEST['mobile'];
        $text=$_REQUEST['text'];
        $mailTo="csemansijunagade@gmail.com";
        $headers="From: ".$email;
        $txt="YOu have receivrd an email from". $name. "\n\n".$message;
        mail($mailTo,$subject,$txt,$headers);
        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Sent Successfully <div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
</head>
<body>
<section class="form_section">
        <div class="contact-text">
            <h2>Contact Us</h2>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="name" placeholder="Username" required>
                <input type="email" placeholder="Email" required>
                <input type="mobile" placeholder="Phone" required>
                <textarea  type="text" name="text" id="" cols="35" rows="10" placeholder="Message" required></textarea>
                <button type="submit" name="SendMessage" class="btn">Send Message</button>
            </form>

        </div>

    </section>
</body>
</html>
<!-- <section class="empty_page">
    <h1>Contact Page</h1>
</section> -->




<?php
include 'partials/footer.php';

?>