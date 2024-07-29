<?php
    session_start();
    include 'head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Offers - Beach De Alipio</title>
</head>
<body>
    <div class="contact-us-cover" data-aos="fade-down">
        <img src="./img/contact-us-cover.jpg">
    </div>
    <!-- <div class="contact-us-container1" data-aos="fade-up">
        <div class="contact-us-welcome-text">
            <p class="inquiries-and-questions">INQURIES AND QUESTIONS</p>  
            <p class="get-in-touch">Get in Touch</p>
            <p class="contact-us-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id mauris non tortor placerat maximus. Suspendisse cursus erat at ex condimentum, non egestas tellus porta. Quisque velit purus, viverra nec magna nec, maximus lacinia tellus. Vestibulum at risus placerat, dignissim libero vel, posuere odio. Curabitur mattis interdum nisl lacinia congue. Praesent enim lorem, pharetra at mattis ac, elementum quis lorem. Curabitur lacinia ipsum nisl, ut sagittis mauris tempor at. </p>
        </div> -->
</div>
    <div class="contact-us-container1" data-aos="zoom-in">
        <div class="resort-details">
            <p class="beach">Alipio's Beach House</p>
            <p class="address">#15 National Highway, Baretto, Olongapo City<br><br>
                For Inquiries & Questons, you may contact us at: <br><br>
                Alipio's Beach House Mobile: 0928 858 1042<br>
                Always open for Customers<br><br>
                Mobile: 0968 409 6015<br>Monday - Friday: 8:00am to 5:00pm<br>Saturday - Sunday: 8:00am to 12:00nn
            </p>
        </div>
        <div class="email-us-container">
            <div class="email-us-container1">
                <p class="email-us-text">Contact Us!</p>
                <p class="email-us-text1"><br><br>We are eager to hear from you; you may contact us using the following icons, and one of our staff members will contact you back shortly.</p>
                <ul class="contact-form">
                    <li>
                        <a href="https://web.facebook.com/Alipiosbeachhouse" target="_blank"><i class='bi bi-facebook'></i></a>
                    </li>
                    <li>
                        <a href="https://www.messenger.com/t/101714001794448" target="_blank"><i class='bi bi-messenger'></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class='bi bi-envelope-fill'></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p class="navigate" data-aos="fade-up">Navigate us!</p>
    <div class="map1" data-aos="fade-right">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1669237289123!6m8!1m7!1s1mFpFnmiEPmOIpEgd6CSGg!2m2!1d14.84786320456607!2d120.267247434985!3f219.34201132119603!4f-7.70001175050659!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
    <div class="map2" data-aos="fade-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.600621645984!2d120.26707379999999!3d14.847656200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339671456786c5bb%3A0xe4d19f1340d50b83!2sAlipio&#39;s%20Beach%20Resort!5e0!3m2!1sen!2sph!4v1669236669290!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php
            include('footer.php');
        ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 400,
        duration: 1000
    });
</script>
</body>
</html>