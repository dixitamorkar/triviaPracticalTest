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
                            <label>who is the best cricketer in world?</label><br>
                            <input type="radio" id="crickter" name="crickter" value="Sachin Tendulkar">
                            <label for="sachin tendulkar">Sachin Tendulkar</label><br>

                            <input type="radio" id="crickter" name="crickter" value="Virat Kohli">
                            <label for="virat kohli">Virat Kohli</label><br>

                            <input type="radio" id="crickter" name="crickter" value="Adam Gilchrist">
                            <label for="Adam Gilchrist">Adam Gilchrist</label><br>

                            <input type="radio" id="crickter" name="crickter" value="Jacques Kallis">
                            <label for="Jacques Kallis">Jacques Kallis</label><br>

                            <center><button id="next" name="next" onclick="myFunction()">Next</button></center>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <script>
        function myFunction() {
            document.getElementById("crickter").required = true;
        }
    </script>

    <?php
    if (isset($_POST["next"])) {
        $answer1 = $_POST["crickter"];
        if ($answer1 == "Sachin Tendulkar") {
            $_SESSION["totalAns"] = $_SESSION["totalAns"] + 1;
        }
        $_SESSION["ansKey1"] = $answer1;
        echo "<script>window.location='quizQuestion2.php'</script>";
    }

    ?>
</body>

</html>