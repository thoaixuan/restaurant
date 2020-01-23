<?php
include 'lib/session.php';
Session::init();
include 'lib/database.php';
include 'helpers/format.php';
include 'helpers/slug.php';
?>
<!doctype html>
<html lang="vi">
<?php include 'head.php';?>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/nhanvien.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Admin
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        
        <?php require_once('option.php'); ?>
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
<?php 
include 'sidebar.php';
?>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                                 
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Danh sách nhân viên bếp
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class=" btn btn-info" onclick="window.location = 'newcheft.php'">Thêm nhân viên</button>
                                                
                                                <button class="btn btn-focus" onclick="window.location = 'draganddrop.php'">Chia ca làm việc</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Tên</th>
                                                <th class="text-center">Ngày làm</th>
                                                <th class="text-center">Ghi chú</th>
                                                
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            $filepath = realpath(dirname(__FILE__));
                                            include_once ($filepath.'/classes/cheft.php');
                                            include_once ($filepath.'/../helpers/format.php');
                                            //
                                            //PHP OOP
                                            $i=1;
                                            $cs = new cheft();   
                                            $get_nv = $cs->show_cheft();
                                                            if($get_nv){
                                                                while ($result = $get_nv->fetch_assoc()) 
                                                                {
                                                                              
                                            ?>
                                            <tr>
                                                <td class="text-center text-muted"><?=$i++?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/images.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?=$result['ten']?></div>
                                                                <div class="widget-subheading opacity-7">Phone : <?=$result['sdt']?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" ><?=$result['schechuledefault']?></td>
                                                <td class="text-center" title="SĐT : <?=$result['sdt']?>"><?=$result['ghichu']?></td>
                                                
                                                <td class="text-center">

                                                    <a style="color:red;" type="button" id="PopoverCustomT-2" onclick = "return confirm('Are you want to delete???')" 
                                                   href="?delid=<?php echo $result['ten'] ?>"> Xóa</a>
                                                   
                                                    <button onclick="window.open('formchangechef.php?name=<?=$result['ten']?>')" class="btn btn-info btn-sm">Change Shift</button>
                                                </td>   
                                            </tr>
                                            <?php 
                                             }
                                            }
                                            else{echo "Lỗi";}
                                            ?>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="d-block text-center card-footer">
                                    <button class="btn-wide btn btn-info"><?php
                                                // gọi class category
                                                   
                                                if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
                                                    
                                                    
                                                }else {
                                                    $id = $_GET['delid']; // Lấy catid trên host
                                                    $delCat = $cs -> del_cheft($id); // hàm check delete Name khi submit lên
                                                }
                                                
                                                if(isset($delCat)){
                                                    echo $delCat;
                                                    
                                                }
                                             
                                    ?></button>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                       </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
