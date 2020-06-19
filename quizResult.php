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
            <table style="width:50%;">
                <tr>
                    <td style="border: 3px solid black; padding: 50px;">
                        <h3>
                            Hello <?php echo $_SESSION['user']; ?>,
                        </h3>
                        <h3>
                            Here are the answers selected:
                        </h3> <br>
                        <table>
                            <tr>
                                <td><b>1). Who is the best cricketer in the world?</b></td>
                            </tr>
                            <tr>
                                <td><b>Ans:</b> <?php echo $_SESSION["ansKey1"] ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><b>2). What are the colors in the national flag?</b></td>
                            </tr>
                            <tr>
                                <td><b>Ans:</b> <?php echo $_SESSION["ansKey2"] ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                        <center>
                            <form method="post">
                                <button id="over" name="over">Over Game </button>
                                <button id="history" name="history">Go to History </button>
                            </form>
                        </center>
                    </td>
                </tr>
            </table>
        </center>

        <?php
        if (isset($_POST['over'])) {
            echo "<script>window.location='index.php';</script>";
        }
        if (isset($_POST['history'])) {
            echo "<script>window.location='history.php';</script>";
        }
        ?>
    </div>

</body>

</html>