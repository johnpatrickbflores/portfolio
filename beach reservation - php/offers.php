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
    <div class="offers-cover" data-aos="fade-down">
        <img src = "./img/offers-cover.jpg">
    </div> 
        <div class="offers-container1" data-aos="fade-up">
            <div class="offers-welcome-text">
                <p class="what-we-offer">WHAT WE OFFER</p>  
                <p class="beach-name">Alipio's Beach Resort</p>
                <p class="offers-description">If you're looking for a day of adventure fun and excitement or some heart warming and enjoyable memories. We've got your back, Alipio's beach resort offers different fun and refreshing activities that you can enjoy with your friends and family while floating at the sea. We offer banana boat, kayak, floaters, paddle boards, and jetski. You can enjoy these activities while being wet under the sun. If you don't want to get wet but still wants to make unforgettable memories Alipio's Beach Resort have a thing for you. We offer camping tents and Campfires that you can enjoy while being cozy and sharing stories with your friends and love ones. All of these activities are available at Alipio's Beach Resort, a place to forget all of your problems.</p>
            </div>
    </div>
    <div class="offers-container2" data-aos="fade-left">
        <div class="offers">
            <div class="banana-boat">
                <div class ="banana-text" id="banana-boat-container">
                    <p class="banana-boat-text">Banana Boat</p>
                    <p class="banana-boat-desc">Banana boat is one of the activities that you can't afford to miss. This is similar to a water sled, this yellow-colored and banana-shaped inflatable boat is attached to a speedboat that will pull all of you  to the depper water at high speed. Banana boat ride gives you the same excitement as other adventure water sports like a Jet Ski ride. However, you don’t have to increase the speed of a banana boat to experience the fun and adventure.</p>
                </div>
                <div class="banana-boat-pic" id="bananaB">
                    <img src="./img/banana-boat.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="offers-container2" data-aos="fade-right">
        <div class="offers">
            <div class="kayak">
                <div id="kayak-container">
                    <p class="kayak-text">Kayak</p>
                    <p class="kayak-desc">Kayaking is a fun activity that involves moving through water in a small water vessel with the aid of a double-bladed paddle. It allows the boat driver to maneuver through waterways by sitting face-forward and propelling ahead with alternating side-to-side paddle strokes. The paddler sits in the cockpit with the legs extended beneath a closed deck, leaving the upper body free and exposed.</p>
                </div>
                <div class="kayak-pic" id="kayakB">
                    <img src="./img/kayak.jpg">
                </div>
            </div>
        </div>  
    </div>

    <div class="offers-container2" data-aos="fade-left">
        <div class="offers">
            <div class="paddle-board">
                <div id="paddle-board-container">
                    <p class="paddle-board-text">Paddle Board</p>
                    <p class="paddle-board-desc">Stand up paddle boarding, also known as SUP, is a popular water sport activity that involves standing up on a board and using a paddle to make your way through the water. You'll use your arms while standing or kneeling to propel you and your board forward. Although SUP is similar to surfing and kayaking, you can use a paddle board for a myriad of activities such as surfing, adventuring, touring, fishing, yoga, racing, whitewater and more! </p>
                </div>
                <div class="paddle-board-pic" id="paddleB">
                    <img src="./img/paddle-board.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="offers-container2" data-aos="fade-right">
        <div class="offers">
            <div class="camping-tent">
                <div id="camping-tent-container">
                    <p class="camping-tent-text">Camping Tent</p>
                    <p class="camping-tent-desc">We offer camping tents to those customers that don't want to occupy cottages especially couples that just want to enjoy their moment on the beach. These tents are designed perfectly for providing protection from the sun during the day and will let you stay comfy and enjoy the moonlight during the night at Alipio's Beach Resort.
                    </p>
                </div>
                <div class="camping-tent-pic" id="campingT">
                    <img src="./img/camping-tent.jpg">
                </div>
            </div> 
        </div>
    </div>

    <div class="offers-container2" data-aos="fade-left">
        <div class="offers">
            <div class="jetski">
                <div id="jetski-container">
                    <p class="jetski-text">Jetski</p>
                    <p class="jetski-desc">Jetski is one of the activities that you can't afford to miss whenever you are going to a beach. This high-speed Jet-ski can be a fun way to spend a sunny day and a great way to stay healthy and fit when done on a regular basis. With today’s jet skis the acceleration is amazing. The maneuverability of a jet ski is also very responsive and fun. Feel the adrenaline rush as you speed along Alipio's Beach pristine waters!</p>
                </div>
                <div class="jetski-pic" id="jetskiR">
                    <img src="./img/jetski.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="offers-container2" data-aos="fade-right">
        <div class="offers">
            <div class="campfire">
                <div id="campfire-container">
                    <p class="campfire-text">Campfire</p>
                    <p class="campfire-desc">A campfire is a fire at a campsite that provides light and warmth, and heat for cooking. We offer this so that the customers can enjoy the warmth of the fire with their love ones while sharing scary or funny stories so that their vacation will become memorable.</p>
                </div>
                <div class="campfire-pic" id="campfireT">
                    <img src="./img/campfire.jpg">
                </div>
            </div> 
        </div>
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
