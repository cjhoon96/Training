<!doctype html>
<html> 
  <head>
    <title>test</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
  <?php
    echo("<hr size=2>");
    $data = 12345;            // variable
    $data2 = 3;
    $result = $data - $data2;
    $div_1 = 7;
    $div_2 = 3;
    $div_rst = $div_1 / $div_2;
    $ceil = ceil($div_rst);

    echo("<font size=7 color=blue>");
    echo("데이터는" . $data . "입니다.<br>");
    echo("결과는" . $result . "입니다.<br>");
    echo("나누기 결과는" . $div_rst . "입니다.<br>");
    echo("div_rst의 올림은" . $ceil . "입니다.<br>");


    echo("이게보입니까?<br>");
    echo("<hr size=2>")
  ?>
  <h1>test</h1>
  <br>
  <a href = "https://www.naver.com"> <img src="Naver_Icon.png" width="30px" height="30px"> NAVER </a>
  </body>
</html>
