<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>create_book_db</title>
</head>

<body>
    <?php
        // データベース接続設定
        require_once(dirname(__FILE__) . "/../admin/db_certification.php");

        // BOOK テーブルを作成
        $sql = "CREATE TABLE IF NOT EXISTS BOOK"
        . " ("
        . "id INT AUTO_INCREMENT PRIMARY KEY,"
        . "username CHAR(32),"
        . "booktitle TEXT,"
        . "author TEXT,"
        . "publisher TEXT,"
        . "bookimg TEXT,"
        . "pdate TIMESTAMP"
        . ");"; 

        $stmt = $pdo->query($sql);

        echo "BOOKテーブルの作成に成功しました。";
    ?>
</body>
</html>
