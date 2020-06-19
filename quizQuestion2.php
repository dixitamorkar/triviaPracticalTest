<?php
include('connection.php');

session_start();

if ($_SESSION['user'] == "") {
    echo "<script>window.location='index.php';</script>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>trivia practical</title>
</head>

<body>
    <h1>
        <center>Trivia App</center>
    </h1>
    <div class="container">
        <center>
            <table style="width:50%">
                <tr>
                    <td style="border: 3px solid black">
                        <form method="post">
                            <label>what are the colour in indian national flag?</label><br>
                            <input type="checkbox" id="white" name="white" value="White">
                            <label for="white">A).White</label><br>

                            <input type="checkbox" id="yellow" name="yellow" value="Yellow">
                            <label for="yellow">B).Yellow</label><br>

                            <input type="checkbox" id="green" name="green" value="Green">
                            <label for="Green">C).Green</label><br>

                            <input type="checkbox" id="orange" name="orange" value="Orange">
                            <label for="orange">D).Orange</label><br>

                            <center><button id="finish" name="finish">Finish</button></center>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <?php
    if (isset($_POST["finish"])) {

        if ((isset($_POST["white"]) || isset($_POST["orange"]) || isset($_POST["green"])) && !isset($_POST["yellow"])) {
            $_SESSION['totalAns'] = $_SESSION['totalAns'] + 1;
        }

        $answers = array();
        if (isset($_POST["white"])) {
            array_push($answers, $_POST["white"]);
        }
        if (isset($_POST["orange"])) {
            array_push($answers, $_POST["orange"]);
        }
        if (isset($_POST["green"])) {
            array_push($answers, $_POST["green"]);
        }
        if (isset($_POST["yellow"])) {
            array_push($answers, $_POST["yellow"]);
        }

        $answers = implode(',', $answers);
        $_SESSION["ansKey2"] = $answers;

        $result = mysqli_query($conn, "INSERT INTO quizusers(userId, userName, answerKey1, answerKey2, totalScore) 
            VALUES(NULL, '" . $_SESSION["user"] . "', '" . $_SESSION["ansKey1"] . "', '" . $_SESSION["ansKey2"] . "', '" . $_SESSION["totalAns"] . "')");
        
        if ($result) {
            echo "<script>window.location='quizResult.php'</script>";
        } else {
            echo "<script>alert('Something Went Wrong!');</script>";
            echo "<script>window.location='index.php'</script>";
        }
    }
    ?>
</body>

</html>