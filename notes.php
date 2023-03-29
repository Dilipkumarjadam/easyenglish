<html>
    <head>
        <title>EE</title>
        <link rel="stylesheet" href="css/notes.css">
    </head>
    <body>
    <?php include('shared/navbar.html'); ?>
<?php

// This will return all files in that folder
$files = scandir("notes");

// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <div class="display_notes">
    	<!-- Displaying file name !-->
        <div class="display_notes_name">
        <h1><?php echo $files[$a]; ?></h1>
        <p><?php echo 'Download from this button ---------------------------------------------------------------------' ?></p>
        </div>

        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        
        <a href="notes/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
        <button class="display_notes_btn">Download</button>
        </a>
    </div>  
    <?php 
}
?>
<?php {
    ?>
      <div class="user_addnotes">
            <div class="user_addnotes_name">
                <h1>NOTES SENDING FACILITY</h1><br><br>
                <p> Hii learners !!!!</p>
                <p> We have provided you a facility by which you can add or send notes to us, that you think that should be in our website to help other learners and gain more and more knowledge through this website.</p>
                <p>The notes sended by you will be very deeeply checked by our faculty and then if it is found relevant than it will be availabe to download for learners, you can send notes by clicking on button, which is shown below and send notes.</p>
                <a href="user_addnotes.php">
                    <button class="user_addnotes_btn">Send notes</button>
                </a>
            </div>
      </div>
      <div class="footer" id="contact">
            <div class="footer_info">
                <h1>CONTACT US</h1>
                <p>If you have a question about the Easy English, fill out our <a href="contact.php">Contact Form</a> , and we will get back to you asap.</p>
            </div>
            <div class="footer_social">
                <h1>FOLLOW US</h1>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThm_JmTb21mWC25SNujaR81FeIFVV2TuZB4Q&usqp=CAU"/>
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/instagram-round-color-icon.png"/>
                <img src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png"/>
            </div>
        </div>

        <?php
} 


