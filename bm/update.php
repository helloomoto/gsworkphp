<?php
include("functions.php");
//1.POSTでParamを取得
$id     = $_POST["id"];
$book   = $_POST["book"];
$url  = $_POST["url"];
$cmnt = $_POST["cmnt"];

//2.DB接続など
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_bm_table SET book=:book, url=:url, cmnt=:cmnt WHERE id=:id");
$stmt->bindValue(':book',  $book,   PDO::PARAM_STR);
$stmt->bindValue(':url', $url,  PDO::PARAM_STR);
$stmt->bindValue(':cmnt',$cmnt, PDO::PARAM_STR);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  header("Location: select.php");
  exit;
}

?>
