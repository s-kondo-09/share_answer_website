<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_5-4</title>
</head>

<body>
    <?php

        require_once("db_password.php");

        $sql = 'DROP TABLE ANSWERS';
        $stmt = $pdo->query($sql);

    ?>
</body>
</html>