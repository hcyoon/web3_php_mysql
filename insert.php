<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];

$conn = mysqli_connect("127.0.0.1", "root", "111111", "opentutorials");
$sql = "INSERT INTO topic (title, description, created) VALUES ('MySQL', 'MySQL is ..', NOW())";

$result = mysqli_query($conn, $sql);
if($result === false) {
  echo mysqli_error($conn);  # 실제 개발시에는 보안 차원에서 에러 echo 하면 안됨!
}
?>
