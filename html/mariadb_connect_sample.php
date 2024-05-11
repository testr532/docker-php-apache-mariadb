<?php
// MariaDBサーバー情報
$servername = "mariadb11";
$username = "mariauser";
$password = "password";
$database = "defaultdb";

// MySQLiでMariaDBに接続
$conn = new mysqli($servername, $username, $password, $database);

echo('<pre>');
var_dump($conn);
echo('</pre>');

// 接続エラーチェック
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

/*
CREATE table sample(
	id int auto_increment not null,
	name varchar(100),
	body text,
	primary key(id)
);
 
INSERT INTO sample (name, body) VALUES ('名前１', '本文１');
INSERT INTO sample (name, body) VALUES ('名前２', '本文２');
INSERT INTO sample (name, body) VALUES ('名前３', '本文３');


 */


# DBへ接続
// $conn->select_db()mysqli_select_db( $conn, $database);

# クエリの実行
$sql = "SELECT * FROM sample";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo('<pre>');
    var_dump($row);
    echo('</pre>');
}


// 接続を閉じる
$conn->close();
?>
