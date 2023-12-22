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
<h2>1年後までのカレンダーを作成する</h2>
<pre>
<?php
for ($i=1; $i<=365; $i++) {
  $day = date('n/j(D)', strtotime('+' . $i . 'day'));
  print ($day . "\n");
}
?>
</pre>
</main>
</body>
</html>