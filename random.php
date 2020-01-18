<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/nhanvien.php');
include_once ($filepath.'/../helpers/format.php');
$staff= new nhanvien();
//---------------------------------------------------
$nv= $staff->show_nhanvien();
//---------------------------------------------------
$key= $_GET['key'];
for ($i = 1; $i <= (int)$key; $i++) {
    while($kq=$nv->fetch_assoc())
    {
    $ten=$kq['ten'];
    $staff->SortTeam($ten);
    }
    
}echo '<script>window.location.href = "sortteam.php";</script>';
?>

<?php include 'head.php'; ?>
<?php include 'sidebar.php'; ?>

