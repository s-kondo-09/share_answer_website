<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_5-4</title>
</head>

<body>
    <?php

        require_once("admin/db_certification.php");

        $sql = 'DROP TABLE LIKES';
        $stmt = $pdo->query($sql);

    ?>
</body>
</html>