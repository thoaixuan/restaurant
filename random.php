<?php
$key= $_GET['key'] .'<br/>';
for ($i = 1; $i <= (int)$key; $i++) {
    echo $i.' :'.rand(0,1).' <br/>';
}
?>

<?php include 'head.php'; ?>
<?php include 'sidebar.php'; ?>

