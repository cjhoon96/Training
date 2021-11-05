<!doctype html>
<html> 
  <head>
    <title>login</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <h1>login page</h1>
    </header> 

    <article class="login">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "login_db");
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        
        $search = mysqli_num_rows( mysqli_query($conn, 
                                            "SELECT * FROM login_t 
                                            WHERE user_id = '{$id}' 
                                            AND user_pw = '{$pw}'"
                                            ));

        if ($search) {
            echo("<h2>로그인 성공</h2>");
        } else {
            echo ("<script>alert('id 또는 pw 가 일치하지 않습니다.')</script>");
            echo ("<script>location.href='http://localhost/login.html'</script>");
        // }
        ?>
    </article>
    </section>
  </body>
</html>