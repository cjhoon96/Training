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
    <?php
        $conn = mysqli_connect("localhost", "root", "", "member_db");
        $name = $_GET["name_box"];
        $result = mysqli_query($conn, 
                            "SELECT * FROM member_t 
                            WHERE u_name LIKE '%$name%'");
        $length = mysqli_num_rows($result);
        $record = mysqli_fetch_array($result);
    ?>	
	<section>
		<form action="search.html" method="get">
			<input type="text">
			<input type="submit" value = "reset">
		</form>
	</section>
    
    <section>
        <table border="2">
            <tr>
                <th colspan=2 scope="rowgroup">[회원정보]</th>
            </tr>

            <tr>
                <td>u_name</td>
                <td>
                    <?php
                    for ($i = 0 ; $i < $length ; $i++){
                        $now = $record;
                        echo($record['u_name']. '<br>');
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>u_addr</td>
                <td>
                    <?php
                    for ($i = 0 ; $i < $length ; $i++){
                        $now = $record;
                        echo($record['u_addr']. '<br>');
                    }
                    ?>
                </td>
            </tr>
            
            <tr>
                <td>u_email</td>
                <td>
                    <?php
                    for ($i = 0 ; $i < $length ; $i++){
                        $now = $record;
                        echo($record['u_email']. '<br>');
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>u_phone</td>
                <td>
                    <?php
                    for ($i = 0 ; $i < $length ; $i++){
                        $now = $record;
                        echo($record['u_phone']. '<br>');
                    }
                    ?>
                </td>
            </tr>
            
            <tr>
                <td>u_personalID</td>
                <td>
                    <?php
                    for ($i = 0 ; $i < $length ; $i++){
                        $now = $record;
                        echo($record['u_personalID']. '<br>');
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>u_travel</td>
                <td>
                    <?php
                    for ($i = 0 ; $i < $length ; $i++){
                        $now = $record;
                        echo($record['u_travel']. '<br>');
                    }
                    ?>
                </td>
            </tr>
        </table>

        
    </section>
</body>
</html>