<?php
$check1 = "";
$check2 = "";
$check3 = "";
$check4 = "";
$check7 = "";
$check6 = "";
$check5 = "";
$check8 = "";
$check9 = "";
$check10 = "";
$check = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

switch ($check) {
    case "index.php":
        $check1 = "mm-active";
        break;
    case "liststaff.php":
        $check2 = "mm-active";
        break;
    case "newstaff.php":
        $check3 = "mm-active";
        break;
    case "newcheft.php":
        $check3 = "mm-active";
        break;

    case "sortteam.php":
        $check4 = "mm-active";
        break;
    case "sortshift.php":
        $check5 = "mm-active";
        break;
    case "changeshift.php":
        $check6 = "mm-active";
        break;
    case "draganddrop.php":
        $check7 = "mm-active";
        break;
    case "listcheft.php":
        $check8 = "mm-active";
        break;
    case "formchangechef.php":
        $check8 = "mm-active";
        break;
    case "setschedule.php":
        $check9 = "mm-active";
        break;
    case "viewdraganddrop.php":
        $check10 = "mm-active";
        break;
    default:
        echo "";
}

?>
<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Dashboards</li>
            <li>
                <a href="index.php" class="<?php echo $check1 ?>">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Trang chủ
                </a>
            </li>
            <li class="app-sidebar__heading">Nhân viên</li>
            <li>
                <a href="liststaff.php" class="<?php echo $check2 ?>">
                    <i class="metismenu-icon pe-7s-tools"></i>
                    Danh sách NV
                </a>

                <a href="listcheft.php" class="<?= $check8 ?>">
                    <i class="metismenu-icon pe-7s-note"></i>
                    Manage Chef
                </a>

                <a href="newstaff.php" class="<?php echo $check3 ?>">
                    <i class="metismenu-icon pe-7s-news-paper"></i>
                    Thêm mới NV
                </a>


            </li>


            <li class="app-sidebar__heading">Shift</li>
            <li>
                <a href="setschedule.php" class="<?php echo $check9 ?>">
                    <i class="metismenu-icon pe-7s-helm"></i>
                    Set Schedule
                </a>
                <a href="sortshift.php" class="<?php echo $check5 ?>">
                    <i class="metismenu-icon pe-7s-note2"></i>
                    Chia ca làm
                </a>
                <a href="sortteam.php" class="<?php echo $check4 ?>">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Random GP 1 || GP 2
                </a>

                <a href="changeshift.php" class="<?php echo $check6 ?>">
                    <i class="metismenu-icon pe-7s-arc"></i>
                    Change Shift
                </a>
                <a href="draganddrop.php" class="<?php echo $check7 ?>">
                    <i class="metismenu-icon pe-7s-helm"></i>
                    Shift Cheft
                </a>
                <a href="viewdraganddrop.php" class="<?php echo $check10 ?>">
                    <i class="metismenu-icon pe-7s-helm"></i>
                    Xem trực quan Schedule
                </a>

            </li>


        </ul>
    </div>
</div>