<?php

// Built-in PHP function to delete file
unlink($_GET["name"]);

// Redirecting back
header("Location: " . $_SERVER["HTTP_REFERER"]);






//this is a delete butn write in addnotes.php
<a href="delete.php?name=images/<?php echo $files[$a]; ?>" style="color: red;">
    Delete
</a>