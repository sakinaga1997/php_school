<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>

<?php
$date=sprintf('%04d年 %02d月 %02d日',2018,1,23);
print($date);
?>

<?php
$fix=sprintf('%d',10);
print($fix);
?>

<?php
$fix=sprintf('%d','abc');
print($fix);
?>

<?php
$fix=sprintf('%s','abc');
print($fix);
?>

<?php
$fix=sprintf('%05d',10);
print($fix);
?>

</pre>
</main>
</body>    
</html>
