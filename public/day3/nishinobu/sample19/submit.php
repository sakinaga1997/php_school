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
<h2>Practice</h2>
<pre>

<h2>23/11/11</h2>
<h2>3-19</h2>

ご予約日
<?php
foreach($_POST['reserve']as $reserve)
{print(htmlspecialchars($reserve,ENT_QUOTES).'　');
}
?>

</pre>
</main>
</body>    
</html>