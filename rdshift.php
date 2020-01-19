<?php
if (isset($_POST['team'])) {
    echo "Chia ca  làm việc nhóm : " . $_POST['team'];
    $team = $_POST['team'];
    //show team : 
                
                $filepath = realpath(dirname(__FILE__));
                include_once($filepath . '/classes/nhanvien.php');
                include_once($filepath . '/../helpers/format.php');
                //
                //PHP OOP
                $cs = new nhanvien();
                //$nv=$cs->Fillter_Team($team);
                $getnv=$cs->show_nhanvien();
                while($kq=$getnv->fetch_assoc())
                {
                $ten=$kq['ten'];
                $nv=$cs->SortShiftNV($team,$ten);
                $tn=$cs->SortShiftCashier($team,$ten);
                }
                

                //=---------------------------------


                //

                header('Location: sortshift.php?action=oke');
exit;  
}
?>
