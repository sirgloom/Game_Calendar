<?php
session_start();
?>
<!doctype html>
<html>
<head>
  <title>게임 발매일</title>
  <meta charset="utf-8">
<style>
  body
  {
    margin-top : 0;
  }
  .wrapper
  {
    text-decoration: none;
    color:#ff5733;
    font-weight: bold;
    font-size:14px;
    display: grid;
    grid-template-columns: 150px 120px 100px 100px 1fr;
    grid-template-rows: 30px 30px 1fr;
    padding-top : 10px;
    margin-top:20px;
    margin-left : 20px;
  }
  .item1
  {
    background-color: transparent;
    text-decoration: none;
    border: none;
    cursor: pointer;
    display:inline;
    font-size:40px;
    font-weight: bold;
    border : 10px solid #ff5733;
    margin : 0px;
    margin-left : 50px;
    padding : 10px;
    color:#ff5733;
  }
  .item2
  {
    padding-left:30px;
  }
  .item3
  {
    padding-left:5px;

  }
  .item4
  {
    padding-left:20px;
  }
  .item5
  {
    padding-left:20px;
  }
  .item6
  {
    grid-column : 5/6;
    grid-row : 1/2;

  }
  .item7
  {
    grid-column : 1/2;
    grid-row : 2/3;
  }
  .item8
  {
    grid-column : 2/3;
  }
  .item9
  {
    grid-column : 3/6;
    grid-row : 2/3;

  }
  .item10
  {
    padding-top : 30px;
    grid-column : 1/6;
    grid-row : 3/4;
  }
  .calendar
  {
    display:grid;
    grid-template-columns : 50px 200px 180px 180px 180px 50px 180px 50px 207px;
    grid-template-rows: 20px 1fr;
    border-left : 1px solid #ff5733;
  }
  .game
  {
      padding-top:40px;
      border : 1px solid #ff5733;
      text-align:center;
  }
  .game_fav
  {
    padding-top:30px;
    border : 1px solid #ff5733;
    text-align:center;
  }
  .day
  {
    padding-top:30px;
    border : 1px solid #ff5733;
    text-align:center;
  }
  .model
  {
    padding-top:11px;
    border : 1px solid #ff5733;
    text-align:center;
    font-size : 10px;
  }
  .category
  {
    text-align:center;
    border : 1px solid #ff5733;
    background-color: #ff5733;
    color:white;
  }
  .image
  {
    border : 1px solid #ff5733;
    border-right : 2px solid #ff5733;
    padding-top : 3px;
    padding-left : 2px;
  }
  .checkbox
  {
    padding-top:32px;
    text-align:center;
    border : 1px solid #ff5733;
  }
  .empty
  {
    grid-column : 1/10;
    border-top : 1.5px solid #ff5733;
  }
  .page_button
  {
    background-color: transparent;
    border: none;
    cursor: pointer;
    text-decoration: none;
    color:#ff5733;
    font-weight: bold;

  }
  .page_button2
  {
    background-color: transparent;
    border: none;
    cursor: pointer;
    text-decoration: none;
    color:#ff5733;
    font-weight: bold;
    font-size : 11px;
  }

</style>

</head>

<script language="JavaScript">
      function go_GamePage(gameid)
      {
      var frm = document.frm;
      var url = "game.php?page=game&game="+gameid;
      window.open(url, "result", 'width=1280, height=650, left=0, top=0, location, menubar, scrollbars, resizable');

      frm.action = "game.php";
      frm.target = "result";
      frm.submit();
      }

        function cssChange(clicked,num) // 찜하면 색 변경 함수
        {
            var x = document.getElementsByClassName(clicked);

             var color = ["white","pink"];
             if(num==0)
             {
              for( var i = 0; i < x.length; i++ )
              { var y = x.item(i);
                  y.style.background = color[num]; }
                }
              else if(num==1)
              {
               for( var i = 0; i < x.length; i++ )
               { var y = x.item(i);
                  y.style.background = color[num]; }
              }

        }
</script>
<body>

  <br>
  <h1><form action="main.php"><input type="hidden" name="page" value="main"><input class="item1" type="submit"  value="게임발매일"></form></div></h1>
  <div class="wrapper">

    <div class="item2"><form action="main.php"><input type="hidden" name="page" value="list"><input class="page_button" type="submit"  value="게임 목록"></form></div>
    <div class="item3"><form action="main.php"><input type="hidden" name="page" value="favorite"><input class="page_button" type="submit" value="내가 찜한 게임"></form></div>
    <div class="item4"><form action="main.php"><input type="hidden" name="page" value="board"><input class="page_button" type="submit" value="게시판"></form></div>
    <div class="item5"><form action="main.php"><input type="hidden" name="page" value="login"><input class="page_button" type="submit" value="로그인"></form></div>
    <div class="item6"></div>
    <div class="item7">
      <form action ="main.php">
      <table>
      <td>
         <td valgn="top">
         <select name="yearSelect" id="yearSelect">
         <option value="2019">2019</option>
         <option value="2020">2020</option>
         <option value="발매일미정">발매일미정</option>
         </select>
         </td>
      </td>

      <td>
         <td valgn="top">
         <select name="monthSelect" id="monthSelect">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         </select>
         </td>
      </td>
      </table>
        </div>

    <div class="item8"><input type="submit" value="확인"></form></div>

    <div class="item9"><form action="gamesearch.php"><input type="text" name="gameID" placeholder="게임검색" size="20">
                            <input type="submit" value="확인">  </form></div>

    <div class="item10">
<?php
      $PageNum = 1; // 년도 선택  있으면0 달력, 없으면1 해당페이지

      if(isset($_GET['yearSelect']))
      {

      $PageNum = 0;
      $conn = mysqli_connect('localhost','root','alfoqldpa002','game_calendar');
      $filtered_yearSelect = mysqli_real_escape_string($conn, $_GET['yearSelect']);
      $filtered_monthSelect = mysqli_real_escape_string($conn, $_GET['monthSelect']);
      $sql = "SELECT * FROM calendar WHERE year={$filtered_yearSelect} AND month={$filtered_monthSelect}";
      $result = mysqli_query($conn, $sql);

      ?>
      <div><?=$filtered_yearSelect.'년 '.$filtered_monthSelect.'월'?></div>
      <div class ="calendar" id="tableId">
        <div class="category">발매일</div><div class="category">제목</div><div class="category">제작사</div><div class="category">기종</div><div class="category">
          장르</div><div class="category">한글화</div><div class="category">가격</div><div class="category">찜하기</div><div class="category">사진</div>
          <?php
          while ($row = mysqli_fetch_array($result))
      {
        $filtered = array(
          'id'  => htmlspecialchars($row['id']),
          'year' => htmlspecialchars($row['year']),
          'month' => htmlspecialchars($row['month']),
          'day' => htmlspecialchars($row['day']),
          'title' => htmlspecialchars($row['title']),
          'production' => htmlspecialchars($row['production']),
          'model' => htmlspecialchars($row['model']),
          'genre' => htmlspecialchars($row['genre']),
          'price' => htmlspecialchars($row['price']),
          'language' => htmlspecialchars($row['language']),
          'picture' => htmlspecialchars($row['picture']),
          'model2' => htmlspecialchars($row['model2']),
          'model3' => htmlspecialchars($row['model3']),
          'model4' => htmlspecialchars($row['model4']),
          'model5' => htmlspecialchars($row['model5'])
        ); ?>

        <div class="<?=$filtered['id']?> game"><?=$filtered['day']?></div>
        <div class="<?=$filtered['id']?> game"><form action="game.php" id="frm"><input type="hidden" name="page" value="game"><input type="hidden" name="game" value="<?=$filtered['id']?>">
          <input class="page_button" type="button" onclick=go_GamePage('<?=$filtered['id']?>') value="<?=$filtered['title']?>"></form></div>
          <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="production"><input type="hidden" name="production" value="<?=$filtered['production']?>">
            <input class="page_button" type="submit"  value="<?=$filtered['production']?>"></form></div>
        <div class="<?=$filtered['id']?> model"><form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model']?>">
            <input class="page_button2" type="submit"  value="<?=$filtered['model']?>"></form>
            <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model2']?>">
                <input class="page_button2" type="submit"  value="<?=$filtered['model2']?>"></form>
            <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model3']?>">
                <input class="page_button2" type="submit"  value="<?=$filtered['model3']?>"></form>
            <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model4']?>">
                <input class="page_button2" type="submit"  value="<?=$filtered['model4']?>"></form>
            <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model5']?>">
                <input class="page_button2" type="submit"  value="<?=$filtered['model5']?>"></form>
        </div>

        <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="genre"><input type="hidden" name="genre" value="<?=$filtered['genre']?>">
            <input class="page_button" type="submit"  value="<?=$filtered['genre']?>"></form>
          </div>
        <div class="<?=$filtered['id']?> game"> <?=$filtered['language']?></div>
        <div class="<?=$filtered['id']?> game"> <?=$filtered['price']?></div>
        <div class="<?=$filtered['id']?> game_fav">
              <input type="button" class="page_button" value="찜!" onclick="cssChange(<?=$filtered['id']?>,1)">
              <input type="button" class="page_button" value="취소" onclick="cssChange(<?=$filtered['id']?>,0)">
        </div>
            <div class="<?=$filtered['id']?> image"><?='<img src="'.$filtered['picture'].'"width=200px height=94px>'?></div>

            <?php
          }
            ?>
          <div class="empty"></div>
          </div><?php
      }?> <!-- 달력선택 -->
<?php
      if($PageNum == 1)
      {
        $conn = mysqli_connect('localhost','root','alfoqldpa002','game_calendar');
        $filtered_page = mysqli_real_escape_string($conn, $_GET['page']);

        if($filtered_page == 'main')
        {
          echo($filtered_page);
        }

       if($filtered_page == "list")
       {

                    $sql = "SELECT * FROM calendar order by title asc";
                    $result = mysqli_query($conn, $sql);
                    ?>
                    <div class ="calendar" id="tableId">
                      <div class="category">발매일</div><div class="category">제목</div><div class="category">제작사</div><div class="category">기종</div><div class="category">
                        장르</div><div class="category">한글화</div><div class="category">가격</div><div class="category">찜하기</div><div class="category">사진</div>
                        <?php
                        while ($row = mysqli_fetch_array($result))
                    {
                      $filtered = array(
                        'id'  => htmlspecialchars($row['id']),
                        'year' => htmlspecialchars($row['year']),
                        'month' => htmlspecialchars($row['month']),
                        'day' => htmlspecialchars($row['day']),
                        'title' => htmlspecialchars($row['title']),
                        'production' => htmlspecialchars($row['production']),
                        'model' => htmlspecialchars($row['model']),
                        'genre' => htmlspecialchars($row['genre']),
                        'price' => htmlspecialchars($row['price']),
                        'language' => htmlspecialchars($row['language']),
                        'picture' => htmlspecialchars($row['picture']),
                        'model2' => htmlspecialchars($row['model2']),
                        'model3' => htmlspecialchars($row['model3']),
                        'model4' => htmlspecialchars($row['model4']),
                        'model5' => htmlspecialchars($row['model5'])
                      );
                      ?>





                      <div class="<?=$filtered['id']?> day"> <?=$filtered['year']?><br><?=$filtered['month']?>/<?=$filtered['day']?></div>
                      <div class="<?=$filtered['id']?> game"><form action="game.php" id="frm"><input type="hidden" name="page" value="game"><input type="hidden" name="game" value="<?=$filtered['id']?>">
                        <input class="page_button" type="button" onclick=go_GamePage('<?=$filtered['id']?>') value="<?=$filtered['title']?>"></form></div>
                        <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="production"><input type="hidden" name="production" value="<?=$filtered['production']?>">
                          <input class="page_button" type="submit"  value="<?=$filtered['production']?>"></form></div>
                      <div class="<?=$filtered['id']?> model"><form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model']?>">
                          <input class="page_button2" type="submit"  value="<?=$filtered['model']?>"></form>
                          <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model2']?>">
                              <input class="page_button2" type="submit"  value="<?=$filtered['model2']?>"></form>
                          <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model3']?>">
                              <input class="page_button2" type="submit"  value="<?=$filtered['model3']?>"></form>
                          <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model4']?>">
                              <input class="page_button2" type="submit"  value="<?=$filtered['model4']?>"></form>
                          <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model5']?>">
                              <input class="page_button2" type="submit"  value="<?=$filtered['model5']?>"></form>
                      </div>

                      <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="genre"><input type="hidden" name="genre" value="<?=$filtered['genre']?>">
                          <input class="page_button" type="submit"  value="<?=$filtered['genre']?>"></form>
                        </div>
                      <div class="<?=$filtered['id']?> game"> <?=$filtered['language']?></div>
                      <div class="<?=$filtered['id']?> game"> <?=$filtered['price']?></div>

                      <div class="<?=$filtered['id']?> game_fav">
                            <input type="button" class="page_button" value="찜!" onclick="cssChange(<?=$filtered['id']?>,1)">
                            <input type="button" class="page_button" value="취소" onclick="cssChange(<?=$filtered['id']?>,0)">
                      </div>


                      <div class="<?=$filtered['id']?> image"><?='<img src="'.$filtered['picture'].'"width=200px height=94px>'?></div>
                    <?php } ?>
                    <div class="empty"></div>
                    </div><?php
            } // 게임검색 눌렀을때



       if($filtered_page == 'favorite')
       {

       }

       if($filtered_page == 'board')
       {

       }

       if($filtered_page == 'game')
       {
         $filtered_game = mysqli_real_escape_string($conn, $_GET['game']);
         $sql = "SELECT * FROM calendar WHERE calendar.id={$filtered_game}";
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_array($result);
         echo ($row['title']);?><br><?php
         echo ($row['description']);
       }

       if($filtered_page == 'production')
       {
         $filtered_production = mysqli_real_escape_string($conn, $_GET['production']);
         $sql = "SELECT * FROM calendar WHERE calendar.production LIKE '{$filtered_production}' order by title asc";
         $result = mysqli_query($conn, $sql);?>
         <div><?=$filtered_production?></div>
         <div class ="calendar" id="tableId">
           <div class="category">발매일</div><div class="category">제목</div><div class="category">제작사</div><div class="category">기종</div><div class="category">
             장르</div><div class="category">한글화</div><div class="category">가격</div><div class="category">찜하기</div><div class="category">사진</div><?php
             while ($row = mysqli_fetch_array($result))
         {
           $filtered = array(
             'id'  => htmlspecialchars($row['id']),
             'year' => htmlspecialchars($row['year']),
             'month' => htmlspecialchars($row['month']),
             'day' => htmlspecialchars($row['day']),
             'title' => htmlspecialchars($row['title']),
             'production' => htmlspecialchars($row['production']),
             'model' => htmlspecialchars($row['model']),
             'genre' => htmlspecialchars($row['genre']),
             'price' => htmlspecialchars($row['price']),
             'language' => htmlspecialchars($row['language']),
             'picture' => htmlspecialchars($row['picture']),
             'model2' => htmlspecialchars($row['model2']),
             'model3' => htmlspecialchars($row['model3']),
             'model4' => htmlspecialchars($row['model4']),
             'model5' => htmlspecialchars($row['model5'])
           ); ?>

           <div class="<?=$filtered['id']?> day"> <?=$filtered['year']?><br><?=$filtered['month']?>/<?=$filtered['day']?></div>
           <div class="<?=$filtered['id']?> game"><form action="game.php" id="frm"><input type="hidden" name="page" value="game"><input type="hidden" name="game" value="<?=$filtered['id']?>">
             <input class="page_button" type="button" onclick=go_GamePage('<?=$filtered['id']?>') value="<?=$filtered['title']?>"></form></div>
             <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="production"><input type="hidden" name="production" value="<?=$filtered['production']?>">
               <input class="page_button" type="submit"  value="<?=$filtered['production']?>"></form></div>
           <div class="<?=$filtered['id']?> model"><form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model']?>">
               <input class="page_button2" type="submit"  value="<?=$filtered['model']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model2']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model2']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model3']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model3']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model4']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model4']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model5']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model5']?>"></form>
           </div>

           <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="genre"><input type="hidden" name="genre" value="<?=$filtered['genre']?>">
               <input class="page_button" type="submit"  value="<?=$filtered['genre']?>"></form>
             </div>
           <div class="<?=$filtered['id']?> game"> <?=$filtered['language']?></div>
           <div class="<?=$filtered['id']?> game"> <?=$filtered['price']?></div>
           <div class="<?=$filtered['id']?> game_fav">
                 <input type="button" class="page_button" value="찜!" onclick="cssChange(<?=$filtered['id']?>,1)">
                 <input type="button" class="page_button" value="취소" onclick="cssChange(<?=$filtered['id']?>,0)">
           </div>
           <div class="<?=$filtered['id']?> image"><?='<img src="'.$filtered['picture'].'"width=200px height=94px>'?></div>
         <?php } ?>
         <div class="empty"></div>
         </div><?php
       }

       if($filtered_page == 'model')
       {
         $filtered_model = mysqli_real_escape_string($conn, $_GET['model']);
         $sql = "SELECT * FROM calendar WHERE (model LIKE '{$filtered_model}' || model2 LIKE '{$filtered_model}' ||
         model3 LIKE '{$filtered_model}' || model4 LIKE '{$filtered_model}' || model5 LIKE '{$filtered_model}') order by title asc";
         $result = mysqli_query($conn, $sql);?>
         <div><?=$filtered_model?></div>
         <div class ="calendar" id="tableId">
           <div class="category">발매일</div><div class="category">제목</div><div class="category">제작사</div><div class="category">기종</div><div class="category">
             장르</div><div class="category">한글화</div><div class="category">가격</div><div class="category">찜하기</div><div class="category">사진</div><?php
             while ($row = mysqli_fetch_array($result))
         {
           $filtered = array(
             'id'  => htmlspecialchars($row['id']),
             'year' => htmlspecialchars($row['year']),
             'month' => htmlspecialchars($row['month']),
             'day' => htmlspecialchars($row['day']),
             'title' => htmlspecialchars($row['title']),
             'production' => htmlspecialchars($row['production']),
             'model' => htmlspecialchars($row['model']),
             'genre' => htmlspecialchars($row['genre']),
             'price' => htmlspecialchars($row['price']),
             'language' => htmlspecialchars($row['language']),
             'picture' => htmlspecialchars($row['picture']),
             'model2' => htmlspecialchars($row['model2']),
             'model3' => htmlspecialchars($row['model3']),
             'model4' => htmlspecialchars($row['model4']),
             'model5' => htmlspecialchars($row['model5'])
           ); ?>

           <div class="<?=$filtered['id']?> day"> <?=$filtered['year']?><br><?=$filtered['month']?>/<?=$filtered['day']?></div>
           <div class="<?=$filtered['id']?> game"><form action="game.php" id="frm"><input type="hidden" name="page" value="game"><input type="hidden" name="game" value="<?=$filtered['id']?>">
             <input class="page_button" type="button" onclick=go_GamePage('<?=$filtered['id']?>') value="<?=$filtered['title']?>"></form></div>
             <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="production"><input type="hidden" name="production" value="<?=$filtered['production']?>">
               <input class="page_button" type="submit"  value="<?=$filtered['production']?>"></form></div>
           <div class="<?=$filtered['id']?> model"><form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model']?>">
               <input class="page_button2" type="submit"  value="<?=$filtered['model']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model2']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model2']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model3']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model3']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model4']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model4']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model5']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model5']?>"></form>
           </div>

           <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="genre"><input type="hidden" name="genre" value="<?=$filtered['genre']?>">
               <input class="page_button" type="submit"  value="<?=$filtered['genre']?>"></form>
             </div>
           <div class="<?=$filtered['id']?> game"> <?=$filtered['language']?></div>
           <div class="<?=$filtered['id']?> game"> <?=$filtered['price']?></div>
           <div class="<?=$filtered['id']?> game_fav">
                 <input type="button" class="page_button" value="찜!" onclick="cssChange(<?=$filtered['id']?>,1)">
                 <input type="button" class="page_button" value="취소" onclick="cssChange(<?=$filtered['id']?>,0)">
           </div>
           <div class="<?=$filtered['id']?> image"><?='<img src="'.$filtered['picture'].'"width=200px height=94px>'?></div>
         <?php } ?>
         <div class="empty"></div>
         </div><?php
       }

       if($filtered_page == 'genre')
       {
         $filtered_genre = mysqli_real_escape_string($conn, $_GET['genre']);
         $sql = "SELECT * FROM calendar WHERE calendar.genre LIKE '{$filtered_genre}' order by title asc";
         $result = mysqli_query($conn, $sql);?>
         <div><?=$filtered_genre?></div>
         <div class ="calendar" id="tableId">
           <div class="category">발매일</div><div class="category">제목</div><div class="category">제작사</div><div class="category">기종</div><div class="category">
             장르</div><div class="category">한글화</div><div class="category">가격</div><div class="category">찜하기</div><div class="category">사진</div><?php
             while ($row = mysqli_fetch_array($result))
         {
           $filtered = array(
             'id'  => htmlspecialchars($row['id']),
             'year' => htmlspecialchars($row['year']),
             'month' => htmlspecialchars($row['month']),
             'day' => htmlspecialchars($row['day']),
             'title' => htmlspecialchars($row['title']),
             'production' => htmlspecialchars($row['production']),
             'model' => htmlspecialchars($row['model']),
             'genre' => htmlspecialchars($row['genre']),
             'price' => htmlspecialchars($row['price']),
             'language' => htmlspecialchars($row['language']),
             'picture' => htmlspecialchars($row['picture']),
             'model2' => htmlspecialchars($row['model2']),
             'model3' => htmlspecialchars($row['model3']),
             'model4' => htmlspecialchars($row['model4']),
             'model5' => htmlspecialchars($row['model5'])
           ); ?>

           <div class="<?=$filtered['id']?> day"> <?=$filtered['year']?><br><?=$filtered['month']?>/<?=$filtered['day']?></div>
           <div class="<?=$filtered['id']?> game"><form action="game.php" id="frm"><input type="hidden" name="page" value="game"><input type="hidden" name="game" value="<?=$filtered['id']?>">
             <input class="page_button" type="button" onclick=go_GamePage('<?=$filtered['id']?>') value="<?=$filtered['title']?>"></form></div>
             <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="production"><input type="hidden" name="production" value="<?=$filtered['production']?>">
               <input class="page_button" type="submit"  value="<?=$filtered['production']?>"></form></div>
           <div class="<?=$filtered['id']?> model"><form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model']?>">
               <input class="page_button2" type="submit"  value="<?=$filtered['model']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model2']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model2']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model3']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model3']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model4']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model4']?>"></form>
               <form action="main.php"><input type="hidden" name="page" value="model"><input type="hidden" name="model" value="<?=$filtered['model5']?>">
                   <input class="page_button2" type="submit"  value="<?=$filtered['model5']?>"></form>
           </div>

           <div class="<?=$filtered['id']?> game"><form action="main.php"><input type="hidden" name="page" value="genre"><input type="hidden" name="genre" value="<?=$filtered['genre']?>">
               <input class="page_button" type="submit"  value="<?=$filtered['genre']?>"></form>
             </div>
           <div class="<?=$filtered['id']?> game"> <?=$filtered['language']?></div>
           <div class="<?=$filtered['id']?> game"> <?=$filtered['price']?></div>
           <div class="<?=$filtered['id']?> game_fav">
                 <input type="button" class="page_button" value="찜!" onclick="cssChange(<?=$filtered['id']?>,1)">
                 <input type="button" class="page_button" value="취소" onclick="cssChange(<?=$filtered['id']?>,0)">
           </div>
           <div class="<?=$filtered['id']?> image"><?='<img src="'.$filtered['picture'].'"width=200px height=94px>'?></div>
         <?php } ?>
         <div class="empty"></div>
         </div><?php
       }

       if($filtered_page == 'login')
       {?>
         <html lang="ko">
         <head>
         <script type="text/javascript" src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.0.js" charset="utf-8"></script>
         </head>
         <body>
         <!-- 네이버아이디로로그인 버튼 노출 영역 -->
         <div id="naverIdLogin"></div>
         <!-- //네이버아이디로로그인 버튼 노출 영역 -->

         <!-- 네이버아디디로로그인 초기화 Script -->
         <script type="text/javascript">
          var naverLogin = new naver.LoginWithNaverId(
            {
              clientId: "개발자센터에 등록한 ClientID",
              callbackUrl: "개발자센터에 등록한 callback Url",
              isPopup: false, /* 팝업을 통한 연동처리 여부 */
              loginButton: {color: "green", type: 3, height: 60} /* 로그인 버튼의 타입을 지정 */
            }
          ); /* 설정정보를 초기화하고 연동을 준비 */
          naverLogin.init();
         </script> <!-- // 네이버아이디로로그인 초기화 Script -->
         </body>
         </html>
<?php
$_SESSION["user_ID"] = "green";
$_SESSION["favgame"] = "cat";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

       }

}
      ?>
    </div>

</body>
</html>
