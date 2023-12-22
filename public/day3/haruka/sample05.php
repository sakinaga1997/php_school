<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS   -->
<!-- link rel="stylesheet" href="css/style.css" -->

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normak">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>変数を使って、計算結果を保管する</h2>
<pre>
<?php
$sum = 100+1050+200;
?>
合計金額は: <?php print($sum); ?>円です
税込金額は: <?php print($sum * 1.08); ?>円です
<?php
$sum = 100+1050+200+50;
$tax = 1.08;
print($sum * $tax);
?>
<br>
<?php
// print('\n');
$sum = 8 + 2;
print($sum);
?>
</pre>
</main>
</body>
</html>