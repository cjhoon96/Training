<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="style.css">
  <title>search</title>
</head>
<body>
	<header>
		<h1>Search</h1>
	</header>
	
	<section>
		<form action="search.html" method="get">
			<input type="text">
			<input type="submit" value = "reset">
		</form>
	</section>

    <section>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "temp_db");
            $name = $_GET["name_box"];
            $result = mysqli_query($conn, "SELECT u_name FROM member_t 
                        WHERE u_name LIKE '%$name%'");
            echo($result);
        ?>
    </section>
</body>
</html>