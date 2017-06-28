<?php
//0.外部ファイル読み込み
include("functions.php");

//入力チェック(受信確認処理追加)
if(
  !isset($_GET['lat']) || $_GET['lat']=="" ||
  !isset($_GET['lng']) || $_GET['lng']==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$lat  = $_GET['lat'];
$lng  = $_GET['lng'];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO jog_table(id, date, lat, lng)VALUES(NULL, sysdate(), :lat, :lng)");
$stmt->bindValue(':lat',  $lat,  PDO::PARAM_INT);
$stmt->bindValue(':lng',  $lng,  PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM jog_table");
$status = $stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

}
?>
