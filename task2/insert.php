<?php
//1. POSTデータ取得
$task = $_POST["task"];
$day  = $_POST["day"];
$time = $_POST["time"];
$memo = $_POST["memo"];

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=*****;charset=utf8;host=localhost','*****','*****');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//3. データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_task(id, task, day, time, memo)VALUES(NULL, :task, :day, :time, :memo)");
$stmt->bindValue(':task', $task, PDO::PARAM_STR);
$stmt->bindValue(':day', $day, PDO::PARAM_STR);
$stmt->bindValue(':time', $time, PDO::PARAM_STR);
$stmt->bindValue(':memo', $memo, PDO::PARAM_STR);
$status = $stmt->execute();

//4. データ登録処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{

//5.index.phpへリダイレクト
  header("Location: input.php");
  exit;
}
?>