<?php
// var_dump($_GET);
// exit();

// 関数ファイルの読み込み
include('functions.php');
// GETデータ取得
$user_id = $_GET['user_id'];
$book_id = $_GET['book_id'];
// DB接続
$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM like_table WHERE user_id=:user_id AND
book_id=:book_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $like_count = $stmt->fetch();
}
if ($like_count[0] != 0) {
    $sql =
        'DELETE FROM like_table WHERE user_id=:user_id AND book_id=:book_id';
} else {
    $sql = 'INSERT INTO like_table(id, user_id, book_id, created_at)
VALUES(NULL, :user_id, :book_id, sysdate())'; // 1行で記述！
}
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $like_count = $stmt->fetch();
    header('Location:guidebook.php');
}
