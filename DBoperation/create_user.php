<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_5-1</title>
</head>

<body>
    <?php

        require_once(dirname(__FILE__) . "/../admin/db_certification.php");
        $pdo = new PDO($dsn, $user, $password_db, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

        $sql = "CREATE TABLE IF NOT EXISTS DB_user"
        ." ("
        . "id INT AUTO_INCREMENT PRIMARY KEY,"
        . "name CHAR(32),"
        . "password TEXT,"
        . "pdate TIMESTAMP,"
        . "comment TEXT"
        .");"; 

        $stmt = $pdo->query($sql);
    ?>
</body>
</html>