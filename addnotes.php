
<html>
    <head>
        <title>EE</title>
        <link rel="stylesheet" href="css/notes.css">
    </head>
    <body>
    <div class="add_notes">
        <div class="add_notes_name">
        <h1>ADD NOTES</h1>
        <p>Here an admin or teacher can upload a notes or pdfs which will we be displayed on the user's side.
        You can add file or notes pdf by choosing file and click on add</p>
<form method="POST" action="addnotes.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ADD">
</form>
<div class="add_notes_name">
        <h1>SHOW NOTES</h1>
        <p>Here an admin or teacher can uploaded notes or pdfs by user, by clicking on show notes you can see and download notes and verify it, and if it is relevant to learners or english than you can add or upload it for other learners to download.</p>
<a href="user_notes.php">
    <button class="user_addnotes_btn">Show Notes</button>
</a>
</div>
</body>
</html>

<?php


// Getting uploaded file
$file = $_FILES["file"];

// Uploading in "notes" folder
move_uploaded_file($file["tmp_name"], "notes/" . $file["name"]);

// Redirecting back
// header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
<?php



