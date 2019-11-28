<?php
  $conn = mysqli_connect('localhost','root','alfoqldpa002','game_calendar');
  $filtered_game = mysqli_real_escape_string($conn, $_GET['game']);
  $sql = "SELECT * FROM calendar WHERE calendar.id={$filtered_game}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  echo  '<h1>'.$row['title'].'</h1>' ;
  echo ($row['description']);
 ?>
