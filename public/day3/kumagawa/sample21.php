<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>郵便番号を正規表現を使ってチェックする</h2>
<pre>
<?php
$zip = '987-6543';

$zip = mb_convert_kana($zip, 'a', 'UTF-8');

if (preg_match("/\A\D{3}[-]\d{4}\z/", $zip)) {
} else {
    echo('※ 郵便番号を 123-4567の形式でご記入ください');
}
?>
</pre>
</main>
</body>    
</html>