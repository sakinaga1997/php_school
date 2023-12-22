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
<h2>チェックボックスの値を取得する</h2>
<form action="submit.php" method="post"> 
<p>ご予約希望日（複数選択可）</p>
<p>
    <input type="checkbox" name="reserve[]" value="1/1"> 1月 1日<br>
    <input type="checkbox" name="reserve[]" value="1/2"> 1月 2日<br>
    <input type="checkbox" name="reserve[]" value="1/3"> 1月 3日<br>
  </p>
  
  <input type="submit" value="送信する">
</form>
  
<pre>
ご予約日：
<?php
foreach ($_POST['reserve'] as $reserve) {
  print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
}
?>
</pre>
</main>
</body>    
</html>