<?php
    include '../db.php';

   

    session_start();
    if(!isset($_SESSION["logedin"])){
        header("location: ../login.php");
    }
 
    //fetching questions
    $set = htmlspecialchars($_GET["set"]);
    $q = "SELECT * FROM questions WHERE quiz_id = '$set'";
    
    $ress = mysqli_query($conn, $q);

    //checking answers
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $i = 1;
        $score = 0;
        $count = 0;
        if(!empty($_POST["quizcheck"])){
            $selected = $_POST["quizcheck"];
            $count = count($selected);
            while($row = mysqli_fetch_array($ress)){
                if(isset($selected[$i])){
                    if($row["answer_id"] == $selected[$i]){
                        $score++;
                    }
                }
                $i++;
            }
        } 
        $totalquestions = $i - 1;

        //uploading result to history 
        $userid = $_SESSION['userid'];
        $uploadq = "INSERT INTO history (`userid`,`totalQuestions`,`rightAnswers`) VALUES ($userid, $totalquestions, $score )";
        $qresultt = mysqli_query($conn, $uploadq);

        echo mysqli_error($conn);
        echo "<h1>your score is $score</h1>";
        echo "<h1>you attempted $count out of $totalquestions</h1>";
        
    }

    echo mysqli_error($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./quiz.css">
</head>
<body>
    <div class="quiz_container">
        <form class="quiz_wrapper" method="POST" action="#">
            <div class="quiz_section">
                <h1>first quiz</h1>
            </div>
            <?php
                while($row = mysqli_fetch_array($ress)) {?>
                    <div class="quiz_section">
                        <span><?php echo $row["questions"] ?></span>

                        <?php
                            $q = "SELECT * from answer WHERE ans_id =".$row['qid'];
                            $answers = mysqli_query($conn, $q);

                            while($ans_row = mysqli_fetch_array($answers)){?>
                            <div class="quiz_radio_wrapper">
                                <input type="radio" 
                                    id=<?php echo $ans_row["aid"]?> 
                                    name="quizcheck[<?php echo $ans_row["ans_id"]?>]"
                                    value=<?php echo $ans_row["aid"]?> 
                                >

                                <label for=<?php echo $ans_row["aid"]?>>
                                    <?php echo $ans_row["answer"]?>
                                </label>
                            </div><?php
                            }
                        ?>
                    </div><?php
                }
            ?>
            <div class="quiz_actions">
                <button name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>