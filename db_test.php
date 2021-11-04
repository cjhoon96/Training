<?php
// 데이터베이스 접속
$conn = mysqli_connect("localhost", "root", "", "temp_db");


//데이터베이스로 하고 싶은 작업
// 우리가 만든 데이터베이스의 테이블에 뭔가를 저장하고 싶다.
// temp_db 안에 temp_t 테이블이 있다. 여기에 데이터를 저장한다.
// 테이블 이름수정 --> 테이블의 칸(컬럼or필드)의 이름이 틀림
// 테이블 칸 수가 안맞음

// $search_result = mysqli_query($connect_no, "SLELCT * FROM login_t");

$result = mysqli_query($conn, 
                        "INSERT INTO temp_t (u_name, u_addr, u_phone)
                        VALUES ('superuser', 'SEOUL', '01099999999')" );
$result = mysqli_query($conn, 
                        "INSERT INTO temp_t (u_name, u_addr, u_phone)
                        VALUES ('superman', 'SEOUL', '01099999999')" );                        



// $result = mysqli_query($conn, 
//                         "INSERT INTO info (u_nema, u_addr, u_email, u_phone, u_personalID, u_travel)
//                         VALUES ($u_nema, $u_addr, $u_email, $u_phone, $u_personalID, $u_travel)" )

// $how_many = mysqli_num_rows($search_result);

// for($loop=1; $loop <= $how_many; $loop++){
//     $record = mysqli_fetch_array($search_result);
//     echo("name:" . $record["name"]);
//     echo("address:" . $record["address"] . "<hr>");
// }

mysqli_close($conn);

?>