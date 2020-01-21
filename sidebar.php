<?php 
$check1="";$check2="";$check3="";$check4="";
$check= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
if($check =="index.php")
{
	$check1 ="mm-active";
}

if($check =="liststaff.php" )
{
	$check2 ="mm-active";
}

if($check =="newstaff.php")
{
	$check3 ="mm-active";
}
if( $check =="sortteam.php")
{
	$check4 ="mm-active";
}
if( $check =="sortshift.php")
{
	$check5 ="mm-active";
}
if( $check =="changeshift.php")
{
	$check6 ="mm-active";
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
                                    <a href="newstaff.php" class="<?php echo $check3 ?>">
                                        <i class="metismenu-icon pe-7s-news-paper"></i>
                                       Thêm mới NV
                                    </a>
                                    
                                </li>
                               

                                <li class="app-sidebar__heading">Shift</li>
                                <li>
                                    <a href="sortteam.php" class="<?php echo $check4 ?>">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Random GP 1 || GP 2
                                    </a>
                                    <a href="sortshift.php" class="<?php echo $check5 ?>">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Chia ca làm 
                                    </a>
                                    <a href="changeshift.php" class="<?php echo $check6 ?>">
                                        <i class="metismenu-icon pe-7s-arc"></i>
                                        Change Shift 
                                    </a>
                                </li>
                              
                                
                            </ul>
                        </div>
                    </div>