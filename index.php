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
    <center>Trivia App</center>
  </h1>
  <div class="container">
    <center>
      <table style="width:50%">
        <tr>
          <td style="border: 3px solid black">
            <form autocomplete="off" method="post">
              what is your Name: <input type="text" name="userName" id="userName" style="width:70%"><br><br><br>
              <center><button id="next" name="next">Next</button></center>
            </form>
          </td>
        </tr>
      </table>
    </center>

    <?php
    if (isset($_POST['next'])) {
      $userName = $_POST['userName'];
      $_SESSION["user"] = $userName;
      $_SESSION["totalAns"] = 0;
      echo "<script>window.location='quizQuestion1.php';</script>";
    }
    ?>
  </div>

</body>

</html>