<?php
include 'lib/session.php';
Session::init();
include 'lib/database.php';
include 'helpers/format.php';
include 'helpers/slug.php';
?>
<!doctype html>
<html lang="vi">
<?php include 'head.php'; ?>

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
            </div>
            <div class="app-header__content">
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
                    </div>
                </div>
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
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Đặt lịch cố định ngày làm
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">

                                            <button class=" btn btn-info" onclick="window.location = 'newstaff.php'">Thêm nhân viên</button>
                                            <button class="btn btn-primary" onclick="window.print()">Save</button>
                                            <button class="btn btn-focus" onclick="window.location = 'sortshift.php'">Chia ca làm việc</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nhóm</th>
                                                <th>Tên</th>
                                                <th class="text-center">Chức vụ</th>
                                                <th class="text-center">Note</th>
                                                <th class="text-center">Set schedule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a = 0;
                                            $filepath = realpath(dirname(__FILE__));
                                            include_once($filepath . '/classes/nhanvien.php');
                                            include_once($filepath . '/../helpers/format.php');
                                            $staff = new nhanvien();
                                            $getteam = $staff->FillterStaff();
                                            $nhom = 0;
                                            if (isset($_GET['nhom'])) {
                                                $nhom = $_GET['nhom'];
                                            }
                                            if ($getteam) {
                                                if ($nhom == 1) {
                                                    echo "<h4>GP 1</h4>";
                                                    $z = 0;
                                                    while ($kqt1 = $getteam->fetch_assoc()) {
                                                        if ($kqt1['count'] == 1) {
                                                            $z++;
                                            ?>
                                                            <tr>
                                                                <td class="text-center"><?= $kqt1['count'] ?></td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/images.png" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading"><?= $kqt1['ten'] ?></div>
                                                                                <div class="widget-subheading opacity-7">Phone : <?= $kqt1['sdt'] ?></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-info"><?php if ($kqt1['chucvu'] != "Chạy bàn") echo $kqt1['chucvu'] . "<b style='color:red;'>*</b>";
                                                                                                    else echo $kqt1['chucvu'];  ?></div>

                                                                </td>

                                                                <td class="text-center">
                                                                    <div class="badge badge-default"><?= $kqt1['ghichu'] ?></div>
                                                                </td>

                                                            </tr>
                                                        <?php
                                                        }
                                                    }
                                                    echo $z . ' : Nhân viên';
                                                }
                                                if ($nhom == 2) {
                                                    echo "<h4>Nhóm 2</h4>";
                                                    $y = 0;
                                                    while ($kqt2 = $getteam->fetch_assoc()) {
                                                        if ($kqt2['count'] == 2) {
                                                            $y++;
                                                        ?>
                                                            <tr>
                                                                <td class="text-center"><?= $kqt2['count'] ?></td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/images.png" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading"><?= $kqt2['ten'] ?></div>
                                                                                <div class="widget-subheading opacity-7">Phone : <?= $kqt2['sdt'] ?></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-default"><?php if ($kqt2['chucvu'] != "Chạy bàn") echo $kqt2['chucvu'] . "<b style='color:red;'>*</b>";
                                                                                                        else echo $kqt2['chucvu'];  ?></div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-focus"><?= $kqt2['ghichu'] ?></div>
                                                                </td>

                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    echo $y . ' : Nhân viên';
                                                } else
                                                    while ($kq = $getteam->fetch_assoc()) {
                                                        $a++;
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?= $kq['count'] ?></td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/images.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading"><?= $kq['ten'] ?><a href="formchange.php?name=<?= $kq['ten'] ?>"> >>Change Shift or position</a></div>
                                                                        <div class="widget-subheading opacity-7">Phone : <?= $kq['sdt'] ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="badge badge-warning"><?php if ($kq['chucvu'] != "Chạy bàn") echo 'Cashier' . "<b style='color:red;'>*</b>";
                                                                                                else echo 'Server';  ?></div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="badge badge-default"><?= $kq['ghichu'] ?></div>
                                                        </td>

                                                        <!--Set Schedule-->
                                                        <td class="text-center">
                                                            <div class="badge badge-default">
                                                                <?php
                                                                $key=0;
                                                                $nv = new nhanvien();
                                                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                                                    // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
                                                                    $SetScheduleNV = $nv->SetSchedule_customers($_POST, $_FILES); // hàm check Name khi submit lên
                                                                }
                                                                //
                                                                if (isset($SetScheduleNV)) {
                                                                    echo $SetScheduleNV;
                                                                    
                                                                }
                                                                ?>
                                                                <form method="POST" class="needs-validation" validate="" action="setschedule.php" enctype="multipart/form-data">
                                                                    <select class="input-group-text" name="schedule" id="validationTooltipUsernamePrepend" require>
                                                                        <option>Để trống</option>
                                                                        <option>Thứ 2</option>
                                                                        <option>Thứ 3</option>
                                                                        <option>Thứ 4</option>
                                                                        <option>Thứ 5</option>
                                                                        <option>Thứ 6</option>
                                                                        <option>Thứ 7</option>
                                                                        <option>Chủ nhật</option>
                                                                        <option <?php if (isset($kq['schedule'])) echo "selected"; ?>><?= $kq['schedule'] ?></option>
                                                                        <input type="text" class="form-control" name="ten" value="<?= $kq['ten'] ?>" hidden>
                                                                    </select>
                                                                    <input type="submit" class="btn btn-primary" name="submit" value="Set Schedule Default" />
                                                                </form>

                                                            </div>
                                                        </td>
                                                        <!--End Set Schedule-->
                                                    </tr>
                                            <?php
                                                    }
                                            }
                                            ?>

                                        </tbody>
                                        
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>