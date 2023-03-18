<?php
    session_start();
    if(!$_SESSION["isAdmin"]){
      header('Location: ../index.html');
    }
    include '../db.php';

    $EditorIsOpen = false;
    $numberofQuestions = 0;
    $quizID = null;

    if(isset($_POST["addquiz"])){
        $title = $_POST["title"];
        $diffLevel = $_POST["level"];
        $numberofQuestions = $_POST["numberofquestion"];

        $level = "advance";
        $addQuizQ = "INSERT INTO `quiz`(`diffLevel`, `title`) VALUES ('$level','$title')";
        
        $addQuizRes = mysqli_query($conn, $addQuizQ);
        if(!$addQuizRes){
            echo mysqli_error($conn);
        } else {   
            $id = mysqli_insert_id($conn);
            $quizID = $id;
        }
        
        $EditorIsOpen = true;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../quiz/quiz.css">
</head>
<body>
    <div class="quiz_container">
            <div class="quiz_wrapper">
                <h1 class="addquiz_title"></h1>
                <div class="quiz_section">
                    <form action="#"  method="POST">
                        <div class="quiz_radio_wrapper addQuizAns">
                            <input name="title" type="text" placeholder="Quiz title">
                            <input name="level" type="text" placeholder="Dificulty Level">  
                            <input name="numberofquestion" type="text" placeholder="Number of Questions">
                            <input name="addquiz" type="submit">
                        </div>
                    </form>
                </div>
                <?php
                if($EditorIsOpen){
                    echo "<form action='#' name='uploadquestions'>";
                    ?>
                        <?php
                            for($i = 1; $numberofQuestions >= $i; $i++){?>
                            <div class="quiz_section" style="margin-top: 1rem;">
                                <?php echo "Q$i"?><input style="margin-left: 5px" placeholder="Question"/>
                                <div class="quiz_radio_wrapper addQuizAns">
                                    <input placeholder="Answer1"/>
                                    <input placeholder="Answer2"/>
                                    <input placeholder="Answer3"/>
                                    <input placeholder="Answer4"/>
                                    <input placeholder="Answer5" value="None of above"/>
                                </div>  
                            </div>

                        <?php
                            }?>
                            <div class="quiz_section" style="margin-top: 1rem;">
                                <div class="quiz_radio_wrapper addQuizAns">
                                    <input type="submit" placeholder="Submit" />
                                </div>
                            </div><?php
                        ?>
                    <?php
                    echo "</form>";
                        }
                    ?>
                
            </div>
    </div>
    
</body>
</html>