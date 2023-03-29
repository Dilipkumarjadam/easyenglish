<html>
    <head>
        <title>EE</title>
        <link rel="stylesheet" href="css/notes.css">
    </head>
    <body>
<?php

// This will return all files in that folder
$files = scandir("adminnotes");

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
        <p><?php echo 'Download from this button ------------------------------------------------------------------' ?></p>
        </div>

        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        
        <a href="adminnotes/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
        <button class="display_notes_btn">Download</button>
        </a>
    </div> 

    <?php 
}