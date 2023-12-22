<?php
$email = 'master@h2o-space.com';

mb_language('japanese');
mb_internal_encoding('UTF-8');

$from = 'noreply@example.com';
$subject = 'よくわかるPHPの教科書';
$body = 'このメールは、　『よくわかるPHPの教科書』から送信しています';

$success = mb_send_mail($email, $subject, $body, 'From: ' . $from);
?>
<!doctype html>


<pre>
    <?php if ($success) : ?>
        電子メールを送信しました。メールボックスを確認してみてください。
        <?php else : ?>
            電子メールの送信に失敗しました。Webサーバーの設定などをご確認ください。
            <?php endif; ?>
        </pre>
        