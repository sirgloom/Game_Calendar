<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $conn = mysqli_connect('localhost','root','alfoqldpa002','game_calendar');
      $filtered = array(
        'id' => mysqli_real_escape_string($conn, $_POST['id']),
        'favorite' => mysqli_real_escape_string($conn, $_POST['favorite'])
      );
echo ($filtered['favorite']);
      if($filtered['favorite']==0 || !isset($filtered['favorite']))
      {
        $filtered['favorite'] = 0;
        $filtered['favorite'] = $filtered['favorite'] + 1;
      }
      else
      {
        $filtered['favorite'] = 0;
      }
      $filtered['favorite'];
      echo ($filtered['favorite']);
     ?>
     <form action="main.php?page=list" method="post"><input type="hidden" name="favorite2" value="<?=$filtered['favorite']?>"><input type="submit" value="확인"></form>
  </body>
</html>
