<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>create_likes_answer_db</title>
</head>

<body>
    <?php
        // データベース接続設定
        require_once("db_password.php");

        // LIKES_ANSWER テーブルを作成
        $sql = "CREATE TABLE IF NOT EXISTS LIKES_ANSWER"
        ." ("
        . "id INT AUTO_INCREMENT PRIMARY KEY,"
        . "user_id CHAR(32),"
        . "post_id INT,"
        . "liked BOOLEAN,"
        . "created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,"
        . "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        . ");"; 

        $stmt = $pdo->query($sql);

        echo "LIKES_ANSWERテーブルの作成に成功しました。";
    ?>
</body>
</html>
