<?php

$tsuki = $_POST['tsuki'];

if($tsuki < 1 || $tsuki > 12){
    header('Location:shun.html');
    exit();
}


$yasai[] = '';
$yasai[] = 'ブロッコリー';
$yasai[] = 'カリフラワー';
$yasai[] = 'レタス';
$yasai[] = 'みつば';
$yasai[] = 'アスパラガス';
$yasai[] = 'セロリ';
$yasai[] = 'ナス';
$yasai[] = 'ピーマン';
$yasai[] = 'オクラ';
$yasai[] = 'さつまいも';
$yasai[] = '大根';
$yasai[] = 'ほうれん草';

print $tsuki;
print '月は';
print $yasai[$tsuki];
print 'が旬です。';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
</body>
</html>