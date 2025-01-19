<div style="width: 100%; padding: 30px; background: #303030; color: white; margin-bottom: 10px;">

    <p><?= $no; ?>-<?= $msg; ?></p>
    <p><strong>Hatalı dosya: </strong><?= $file; ?></p>
    <p><strong>Hatalı satır: </strong><?= $line; ?></p>

    <?php

    $open_file = fopen($file, 'r');
    $satir = fgets($open_file);
    $count = 0;
    while ($satir = fgets($open_file)) {
        if (++$count == $line) {
            echo "<p><strong>Hatalı satır: </strong>".$satir."</p>";
        }
    }
    ?>

</div>