<html>
    <head>
        <meta charset="utf-8">
				<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        //$u_name = $_POST["u_name_box"];   //get에서 "u_name_box" 데이터만 만 꺼내라
        // $u_addr = $_POST["u_addr_box"];
        // $u_email = $_POST["u_email_box"];
        // $u_phone = $_POST["u_phone_box"];
        // $u_personalID = $_POST["u_personalID_box"];
        // $u_travel = $_POST["u_travel_box"];
        
        $u_name = $_GET["u_name_box"];      //get에서 "u_name_box" 데이터만 만 꺼내라
        $u_addr = $_GET["u_addr_box"];
        $u_phone = $_GET["u_phone_box"];

        // $u_email = $_GET["u_email_box"];
        // $u_personalID = $_GET["u_personalID_box"];
        // $u_travel = $_GET["u_travel_box"];
        // $data = array($u_name, $u_addr, $u_email, $u_phone, $u_personalID, $u_travel)


        // 데이터베이스 접속
        $conn = mysqli_connect("localhost", "root", "", "temp_db");

        mysqli_query($conn, 
                    "INSERT INTO temp_t (u_name, u_addr, u_phone)
                    VALUES ('{$u_name}', '{$u_addr}', '{$u_phone}')" );

        // $how_many = mysqli_num_rows($search_result);

        // for($loop=1; $loop <= $how_many; $loop++){
        //     $record = mysqli_fetch_array($search_result);
        //     echo("name:" . $record["name"]);
        //     echo("address:" . $record["address"] . "<hr>");
        // }

        mysqli_close($conn);
		
        
        ?>


        <table border="2">
					<tr>
						<th colspan=2 scope="rowgroup">[회원정보]</th>
					</tr>

          <tr>
            <td>u_name</td>
            <td><?=$u_name?></td>
          </tr>

          <tr>
            <td>u_phone</td>
            <td><?=$u_phone?></td>
          </tr>
          
          <tr>
            <td>u_addr</td>
            <td><?=$u_addr?></td>
          </tr>
          
          <!-- <tr>
            <td>u_email</td>
            <td><?=$u_email?></td>
          </tr>

          <tr>
            <td>u_personalID</td>
            <td><?=$u_personalID?></td>
          </tr>

          <tr>
            <td>u_travel</td>
            <td><?=$u_travel?></td>
          </tr> -->
        </table>
    </body>
</html>