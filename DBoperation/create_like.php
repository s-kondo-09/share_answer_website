<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_6</title>
</head>

<body>
    <?php

    require_once(dirname(__FILE__) . "/../admin/db_certification.php");

        $sql = "CREATE TABLE IF NOT EXISTS LIKES"
        ." ("
        . "id INT AUTO_INCREMENT PRIMARY KEY,"
        . "user_id CHAR(32),"
        . "post_id INT,"
        . "liked BOOLEAN,"
        . "created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,"
        . "updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
        . ");"; 

        $stmt = $pdo->query($sql);
    ?>
</body>
</html>