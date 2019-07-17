<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
<?php


try{
    $pro_name = $post['name'];
    $pro_price = $post['price'];
    $pro_gazou_name = $post['gazou_name'];

    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'insert into mst_product(name, price, gazou) values(?, ?, ?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $pro_name;
    $data[] = $pro_price;
    $data[] = $pro_gazou_name;

    $stmt->execute($data);

    $dbh = null;

    print $pro_name;
    print 'を追加しました。<br>';
}
catch(Exception $e){
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

?>

<a href="pro_list.php">戻る</a>
</body>
</html>