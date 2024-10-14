<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_6</title>
</head>

<body>
    <?php

        require_once("admin/db_certification.php");

        $sql = "CREATE TABLE IF NOT EXISTS DB6"
        ." ("
        . "id INT AUTO_INCREMENT PRIMARY KEY,"
        . "name CHAR(32),"
        . "bookID INT,"
        . "bookimg TEXT,"
        . "review TEXT,"
        . "good INT,"
        . "pdate TIMESTAMP"
        .");"; 

        $stmt = $pdo->query($sql);
    ?>
</body>
</html>