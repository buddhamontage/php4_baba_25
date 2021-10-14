<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["lid"]) || $_POST["lid"]=="" ||
  !isset($_POST["lpw"]) || $_POST["lpw"]=="" 
){
  exit('ParamError');
}


//1. POSTデータ取得
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];




//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table2(id, lid, lpw, indate )VALUES(NULL, :lid, :lpw, sysdate())");

/*$sql = "INSERT INTO gs_db_table(id,name,email,naiyou,indate)VALUES(NULL,:a1,:a2,:a3,sysdate())";
 $stmt = $pdo->prepare($sql);*/


$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();



//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header('Location: https://www.facebook.com/?PHPSESSID=abcd');
  exit;

}




?>