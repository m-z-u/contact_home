<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM surveys');
    $stmt->execute();
    //連想配列　tableのcolumn名がkey名になる



    $results = $stmt->fetchAll();


   echo '<pre>';
   var_dump($results);
   exit;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>
<body>
<!-- //画面に表示する -->
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['nickname']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['content']); ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>