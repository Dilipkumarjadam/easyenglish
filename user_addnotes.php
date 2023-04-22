
<html>
    <head>
        <title>EE</title>
        <link rel="stylesheet" href="css/notes.css">
    </head>
    <body>
    <div class="add_notes">
        <div class="add_notes_name">
        <h1>SEND NOTES</h1>
        <p>Here an user can upload a notes or pdfs which will we be displayed on the admin's side.
        You can add file or notes pdf by choosing file and click on SEND.</p>
<form method="POST" action="user_addnotes.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="SEND">
    <button>
        <a href="index.php">HOME</a>
    </button>
</form>

</body>
</html>

<?php


// Getting uploaded file
$file = $_FILES["file"];

// Uploading in "notes" folder
move_uploaded_file($file["tmp_name"], "adminnotes/" . $file["name"]);

// Redirecting back
// header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
<?php



