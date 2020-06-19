<?php
include('connection.php');

session_start();
session_unset();

?>
<!DOCTYPE html>
<html>

<head>
    <title>trivia practical</title>
</head>

<body>
    <h1>
        <center>Game History</center>
    </h1>
    <div class="container">
        <center>
            <table style="width:50%;">
                <tr>
                    <td style="border: 3px solid black; padding: 50px;">
                        <table>
                            <?php
                            $count = 1;
                            $result = mysqli_query($conn, "SELECT * FROM quizusers;");

                            $rowCount = mysqli_num_rows($result);

                            if ($rowCount > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $date = strtotime($row["quizTime"]);
                            ?>
                                    <tr>
                                        <td><b>Game <?php echo $count;
                                                    $count++; ?> :</b> <?php echo date('d-M-Y h:i:s a', $date) ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Name :</b> <?php echo $row["userName"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>&nbsp;&nbsp;=>Who is the best cricketer in the world?</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ans:</b> <?php echo $row["answerKey1"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><b>&nbsp;&nbsp;=>What are the colors in the national flag?</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ans:</b> <?php echo $row["answerKey2"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td><b>No Quiz Data Found</b></td>
                                </tr>
                            <?php } ?>

                        </table>
                        <form method="post">
                            <button id="over" name="over">Go to Home </button>
                        </form>


                    </td>
                </tr>
            </table>
        </center>

        <?php
        if (isset($_POST['over'])) {
            echo "<script>window.location='index.php';</script>";
        }
        ?>
    </div>

</body>

</html>