<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>create_book_db</title>
</head>

<body>
    <?php
        // データベース接続設定
        require_once("admin/db_certification.php");

        // BOOK テーブルを作成
        $sql = "CREATE TABLE IF NOT EXISTS ANSWERS"
        . " ("
        . "id INT AUTO_INCREMENT PRIMARY KEY,"
        . "username CHAR(32),"
        . "bookID INT,"
        . "page INT,"
        . "ProblemNUM INT,"
        . "answer TEXT,"
        . "good INT,"
        . "pdate TIMESTAMP"
        . ");"; 

        $stmt = $pdo->query($sql);

        echo "ANSWERSテーブルの作成に成功しました。";
    ?>
</body>
</html>
