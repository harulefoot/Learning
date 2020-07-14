<?php
    // Level:D Eメールアドレス
    // 標準入力から改行を消すため、trim
    $local = trim(fgets(STDIN));
    $domain = trim(fgets(STDIN));
    echo $local."@".$domain;
?>
