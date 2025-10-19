<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>proc.post.php</title></head>
<body>
<?php
$bil1 = $_POST['bil1'] ?? '';
$bil2 = $_POST['bil2'] ?? '';
?>
<h1>hasil perbandingan</h1>
<hr>
Bil I: <?php echo htmlspecialchars($bil1); ?><br>
Bil II: <?php echo htmlspecialchars($bil2); ?><br><br>
<?php
if (!is_numeric($bil1) || !is_numeric($bil2)) {
    echo "<b>Masukkan bilangan yang valid!</b>";
} else {
    $a = (float)$bil1;
    $b = (float)$bil2;
    if ($a < $b) echo "$a < $b";
    elseif ($a > $b) echo "$a > $b";
    else echo "$a sama dengan $b";
}
?>
</body>
</html>