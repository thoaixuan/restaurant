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

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
                    <script src="assets/scripts/screen.js" type="text/javascript"></script>
                    <button class=" btn btn-focus" onclick="report()">Chụp màn hình</button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                        View
                    </button>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Chia GP
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class=" btn btn-focus" onclick="window.location = 'sortteam.php?nhom=1'">GP 1</button>
                                            <button class=" btn btn-success" onclick="window.location = 'sortteam.php?nhom=2'">GP 2</button>
                                            <button class=" btn btn-info" onclick="window.location = 'newstaff.php'">Thêm nhân viên</button>
                                            <button class="btn btn-primary" onclick="window.print()">Save</button>

                                        </div>

                                    </div>

                                </div>
                                <div style="text-align:right;">*Note: Đừng quên nhấn nút "SAVE" hoặc "Chụp màn hình" để lưu lại.</div>
                                <div class="table-responsive">

                                    <div class="d-block text-center card-footer">
                                        <form class="needs-validation" validate action="rdshift.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationTooltip01">Select GP</label>
                                                    <select class="form-control" name="team" id="validationTooltip01">
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                    </select>

                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>
                                                    <br /><input class="btn btn-primary" name="submit" type="submit" value="Random Shift"></br<input>
                                                </div>

                                            </div>
                                        </form>
                                        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                                        <script>
                                            function showTime() {
                                                var date = new Date();
                                                var h = date.getHours(); // 0 - 23
                                                var m = date.getMinutes(); // 0 - 59
                                                var s = date.getSeconds(); // 0 - 59
                                                var session = "AM";

                                                if (h == 0) {
                                                    h = 12;
                                                }

                                                if (h > 12) {
                                                    h = h - 12;
                                                    session = "PM";
                                                }

                                                h = (h < 10) ? "0" + h : h;
                                                m = (m < 10) ? "0" + m : m;
                                                s = (s < 10) ? "0" + s : s;

                                                var time = h + ":" + m + ":" + s + " " + session;
                                                document.getElementById("MyClockDisplay").innerText = time;
                                                document.getElementById("MyClockDisplay").textContent = time;

                                                setTimeout(showTime, 1000);

                                            }

                                            showTime();
                                        </script>
                                        <button class="mb-2 mr-2 btn btn-info" onclick="window.location = 'sortshift.php'">Refresh trang<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-default">
                                            <?php
                                            $date = getdate();
                                            echo $date['weekday'] . " >";
                                            echo "Ngày: " . $date['mday'] . " /";
                                            echo "Tháng: " . $date['mon'] . "/";
                                            echo "Năm: " . $date['year'] . "<br/>";
                                            ?>
                                        </button>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Shift </h5>

                                                <table class="mb-0 table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>GP 1</th>
                                                            <th>Morning Shift </th>
                                                            <th>Night Shift </th>
                                                            <th>Cashier Morning Shift</th>
                                                            <th>Cashier Night Shift</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Thứ 2</th>
                                                            <?php

                                                            $filepath = realpath(dirname(__FILE__));
                                                            include_once($filepath . '/classes/nhanvien.php');
                                                            include_once($filepath . '/../helpers/format.php');
                                                            //
                                                            //PHP OOP

                                                            $cs = new nhanvien();

                                                            ?>
                                                            <td>
                                                                <?php
                                                                $get_rd = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd1nv = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nv = $cs->CountGetSchedule("Thứ 2", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv = $count_nv->fetch_assoc();
                                                                if ($rescount_nv['nv'] == '2') {
                                                                    $get_nv = $cs->GetSchedule("Thứ 2", "9AM-4PM", "1");
                                                                    while ($result = $get_nv->fetch_assoc()) {
                                                                        echo $result['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv['nv'] == '1') {
                                                                    $get_nv = $cs->GetSchedule("Thứ 2", "9AM-4PM", "1");
                                                                    while ($result = $get_nv->fetch_assoc()) {
                                                                        echo $result['ten'] . ",<br/>";
                                                                    }
                                                                    while ($resultrd = $get_rd1nv->fetch_assoc()) {
                                                                        echo $resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv['nv'] == '0') {
                                                                    while ($resultrd = $get_rd->fetch_assoc()) {
                                                                        echo $resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                

                                                                ?>
                                                            </td>

                                                            <td>

                                                                <?php

                                                                $get_rdnight = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                $get_rd1nvnight = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
                                                                //
                                                                $count_nvdem = $cs->CountGetSchedule("Thứ 2", "4PM-10PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv = $count_nvdem->fetch_assoc();
                                                                if ($rescount_nv['nv'] == '2') {
                                                                    $get_nv = $cs->GetSchedule("Thứ 2", "4PM-10PM", "1");
                                                                    while ($result = $get_nv->fetch_assoc()) {
                                                                        echo $result['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv['nv'] == '1') {
                                                                    $get_nv = $cs->GetSchedule("Thứ 2", "4PM-10PM", "1");
                                                                    while ($result = $get_nv->fetch_assoc()) {
                                                                        echo $result['ten'] . ",<br/>";
                                                                    }
                                                                    while ($resultrd = $get_rd1nvnight->fetch_assoc()) {
                                                                        echo $resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv['nv'] == '0') {
                                                                    while ($resultrd = $get_rdnight->fetch_assoc()) {
                                                                        echo $resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt2) {
                                                                    while ($result2 = $get_nvt2->fetch_assoc()) {
                                                                        echo $result2['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt249 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt249) {
                                                                    while ($result249 = $get_nvt249->fetch_assoc()) {
                                                                        echo $result249['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 3</th>
                                                            <td>
                                                                <?php
                                                                // lay 2 nv va lay 1 nv neu co 1 nv default schedule ==! yeu cau 2 nhan vien  chay ban
                                                                $get_rdt3 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd1nvt3 = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nvt3 = $cs->CountGetSchedule("Thứ 3", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nvt3 = $count_nvt3->fetch_assoc();
                                                                if ($rescount_nvt3['nv'] == '2') {
                                                                    // neu ma co 2 nv thu3 thi lay 2 nhan vien do theo ca lam` + nhom'
                                                                    $get_nvt3 = $cs->GetSchedule("Thứ 3", "9AM-4PM", "1");
                                                                    while ($resultt3 = $get_nvt3->fetch_assoc()) {
                                                                        echo $resultt3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nvt3['nv'] == '1') {
                                                                    $get_nvt3 = $cs->GetSchedule("Thứ 3", "9AM-4PM", "1");
                                                                    while ($resultt3 = $get_nvt3->fetch_assoc()) {
                                                                        echo $resultt3['ten'] . ",<br/>";
                                                                    }
                                                                    while ($resultrd = $get_rd1nvt3->fetch_assoc()) {
                                                                        echo $resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nvt3['nv'] == '0') {
                                                                    while ($resultrd = $get_rdt3->fetch_assoc()) {
                                                                        echo $resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php

                                                                $get_rdnightt3n = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                $get_rd1nvnight3n = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
                                                                //
                                                                $count_nvdem3n = $cs->CountGetSchedule("Thứ 3", "4PM-10PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv3n = $count_nvdem3n->fetch_assoc();
                                                                if ($rescount_nv3n['nv'] == '2') {
                                                                    $get_nv_n3 = $cs->GetSchedule("Thứ 3", "4PM-10PM", "1");
                                                                    while ($resultn3 = $get_nv_n3->fetch_assoc()) {
                                                                        echo $resultn3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv3n['nv'] == '1') {
                                                                    $get_nv_n3 = $cs->GetSchedule("Thứ 3", "4PM-10PM", "1");
                                                                    while ($resultn3 = $get_nv_n3->fetch_assoc()) {
                                                                        echo $resultn3['ten'] . ",<br/>";
                                                                    }
                                                                    while ($resultn3rdn3 = $get_rd1nvnight3n->fetch_assoc()) {
                                                                        echo $resultn3rdn3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv3n['nv'] == '0') {
                                                                    while ($resultn3rdn3 = $get_rdnightt3n->fetch_assoc()) {
                                                                        echo $resultn3rdn3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                               

                                                                ?>
                                                            </td>


                                                            <td>
                                                                <?php
                                                                $get_nvt3 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt3) {
                                                                    while ($result3 = $get_nvt3->fetch_assoc()) {
                                                                        echo $result3['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2493 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2493) {
                                                                    while ($result2493 = $get_nvt2493->fetch_assoc()) {
                                                                        echo $result2493['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 4</th>
                                                            <td>
                                                            <?php
                                                                $get_rd_t4 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd_t41nv_t4 = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nv_t4 = $cs->CountGetSchedule("Thứ 4", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv_t4 = $count_nv_t4->fetch_assoc();
                                                                if ($rescount_nv_t4['nv'] == '2') {
                                                                    $get_nv_t4 = $cs->GetSchedule("Thứ 4", "9AM-4PM", "1");
                                                                    while ($result_t4 = $get_nv_t4->fetch_assoc()) {
                                                                        echo $result_t4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_t4['nv'] == '1') {
                                                                    $get_nv_t4 = $cs->GetSchedule("Thứ 4", "9AM-4PM", "1");
                                                                    while ($result_t4 = $get_nv_t4->fetch_assoc()) {
                                                                        echo $result_t4['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_t4rd_t4 = $get_rd_t41nv_t4->fetch_assoc()) {
                                                                        echo $result_t4rd_t4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_t4['nv'] == '0') {
                                                                    while ($result_t4rd_t4 = $get_rd_t4->fetch_assoc()) {
                                                                        echo $result_t4rd_t4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                

                                                                ?>
                                                            </td>

                                                            <td>
                                                            <?php

$get_rdnight_t4 = $cs->show_shiftnhanvien("4PM-10PM", "1");
$get_rd1nvnight_t4 = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
//
$count_nvdem_nt4 = $cs->CountGetSchedule("Thứ 4", "4PM-10PM", "1");
// truong hop 2nv
$rescount_nv_nt4 = $count_nvdem_nt4->fetch_assoc();
if ($rescount_nv_nt4['nv'] == '2') {
    $get_nv_nt4 = $cs->GetSchedule("Thứ 4", "4PM-10PM", "1");
    while ($result_nt4 = $get_nv_nt4->fetch_assoc()) {
        echo $result_nt4['ten'] . ",<br/>";
    }
}
// truong hop 1 nv
if ($rescount_nv_nt4['nv'] == '1') {
    $get_nv_nt4 = $cs->GetSchedule("Thứ 4", "4PM-10PM", "1");
    while ($result_nt4 = $get_nv_nt4->fetch_assoc()) {
        echo $result_nt4['ten'] . ",<br/>";
    }
    while ($result_nt4rd_nt4 = $get_rd1nvnight_t4->fetch_assoc()) {
        echo $result_nt4rd_nt4['ten'] . ",<br/>";
    }
}
// truong hop 0 nv
if ($rescount_nv_nt4['nv'] == '0') {
    while ($result_nt4rd_nt4 = $get_rdnight_t4->fetch_assoc()) {
        echo $result_nt4rd_nt4['ten'] . ",<br/>";
    }
}
?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nvt4 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt4) {
                                                                    while ($result4 = $get_nvt4->fetch_assoc()) {
                                                                        echo $result4['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2494 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2494) {
                                                                    while ($result2494 = $get_nvt2494->fetch_assoc()) {
                                                                        echo $result2494['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 5</th>
                                                            <td><?php
                                                                $get_nv5 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv5) {
                                                                    while ($result5 = $get_nv5->fetch_assoc()) {
                                                                        echo $result5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4105 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4105) {
                                                                    while ($result4105 = $get_nv4105->fetch_assoc()) {
                                                                        echo $result4105['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt5 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt5) {
                                                                    while ($result5 = $get_nvt5->fetch_assoc()) {
                                                                        echo $result5['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2495 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2495) {
                                                                    while ($result2495 = $get_nvt2495->fetch_assoc()) {
                                                                        echo $result2495['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 6</th>
                                                            <td>
                                                                <?php
                                                                $get_nv6 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv6) {
                                                                    while ($result6 = $get_nv6->fetch_assoc()) {
                                                                        echo $result6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4106 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4106) {
                                                                    while ($result4106 = $get_nv4106->fetch_assoc()) {
                                                                        echo $result4106['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt6 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt6) {
                                                                    while ($result6 = $get_nvt6->fetch_assoc()) {
                                                                        echo $result6['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2496 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2496) {
                                                                    while ($result2496 = $get_nvt2496->fetch_assoc()) {
                                                                        echo $result2496['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 7</th>
                                                            <td>
                                                                <?php
                                                                $get_nv7 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv7) {
                                                                    while ($result7 = $get_nv7->fetch_assoc()) {
                                                                        echo $result7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4107 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4107) {
                                                                    while ($result4107 = $get_nv4107->fetch_assoc()) {
                                                                        echo $result4107['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt7 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt7) {
                                                                    while ($result7 = $get_nvt7->fetch_assoc()) {
                                                                        echo $result7['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2497 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2497) {
                                                                    while ($result2497 = $get_nvt2497->fetch_assoc()) {
                                                                        echo $result2497['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Chủ nhật</th>
                                                            <td>
                                                                <?php
                                                                $get_nv44 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv44) {
                                                                    while ($result44 = $get_nv44->fetch_assoc()) {
                                                                        echo $result44['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv410cn = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv410cn) {
                                                                    while ($result410cn = $get_nv410cn->fetch_assoc()) {
                                                                        echo $result410cn['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt33 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt33) {
                                                                    while ($result33 = $get_nvt33->fetch_assoc()) {
                                                                        echo $result33['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nvt2499 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2499) {
                                                                    while ($result2499 = $get_nvt2499->fetch_assoc()) {
                                                                        echo $result2499['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!--Team 2 -->
                                                <table class="mb-0 table table-hover">
                                                    <thead>
                                                        <tr style="color:blue;">
                                                            <th>GP 2</th>
                                                            <th>Morning Shift </th>
                                                            <th>Night Shift </th>
                                                            <th>Cashier Morning Shift</th>
                                                            <th>Cashier Night Shift</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Thứ 2</th>
                                                            <td>
                                                                <?php
                                                                $nvt2 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                if ($nvt2) {
                                                                    while ($kqt2 = $nvt2->fetch_assoc()) {
                                                                        echo $kqt2['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nv410t2 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv410t2) {
                                                                    while ($result410t2 = $get_nv410t2->fetch_assoc()) {
                                                                        echo $result410t2['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2t2 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt2t2) {
                                                                    while ($result2t2 = $get_nvt2t2->fetch_assoc()) {
                                                                        echo $result2t2['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt249t2 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt249t2) {
                                                                    while ($result249t2 = $get_nvt249t2->fetch_assoc()) {
                                                                        echo $result249t2['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 3</th>
                                                            <td>
                                                                <?php
                                                                $nvt23t3 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                if ($nvt23t3) {
                                                                    while ($kqt23t3 = $nvt23t3->fetch_assoc()) {
                                                                        echo $kqt23t3['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4100t3 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4100t3) {
                                                                    while ($result4100t3 = $get_nv4100t3->fetch_assoc()) {
                                                                        echo $result4100t3['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nvt3t3 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt3t3) {
                                                                    while ($result3t3 = $get_nvt3t3->fetch_assoc()) {
                                                                        echo $result3t3['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2493t3 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2493t3) {
                                                                    while ($result2493t3 = $get_nvt2493t3->fetch_assoc()) {
                                                                        echo $result2493t3['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 4</th>
                                                            <td>
                                                                <?php
                                                                $get_nv4t4 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                while ($result4t4 = $get_nv4t4->fetch_assoc()) {
                                                                    echo $result4t4['ten'] . ",<br/>";
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4104t4 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4104t4) {
                                                                    while ($result4104t4 = $get_nv4104t4->fetch_assoc()) {
                                                                        echo $result4104t4['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt4t4 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt4t4) {
                                                                    while ($result4t4 = $get_nvt4t4->fetch_assoc()) {
                                                                        echo $result4t4['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2494t4 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2494t4) {
                                                                    while ($result2494t4 = $get_nvt2494t4->fetch_assoc()) {
                                                                        echo $result2494t4['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 5</th>
                                                            <td><?php
                                                                $get_nv5t5 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                while ($result5t5 = $get_nv5t5->fetch_assoc()) {
                                                                    echo $result5t5['ten'] . ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4105t5 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4105t5) {
                                                                    while ($result4105t5 = $get_nv4105t5->fetch_assoc()) {
                                                                        echo $result4105t5['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt5t5 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt5t5) {
                                                                    while ($result5t5 = $get_nvt5t5->fetch_assoc()) {
                                                                        echo $result5t5['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2495t5 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2495t5) {
                                                                    while ($result2495t5 = $get_nvt2495t5->fetch_assoc()) {
                                                                        echo $result2495t5['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 6</th>
                                                            <td>
                                                                <?php
                                                                $get_nv6t6 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                while ($result6t6 = $get_nv6t6->fetch_assoc()) {
                                                                    echo $result6t6['ten'] . ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4106t6 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4106t6) {
                                                                    while ($result4106t6 = $get_nv4106t6->fetch_assoc()) {
                                                                        echo $result4106t6['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt6t6 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt6t6) {
                                                                    while ($result6t6 = $get_nvt6t6->fetch_assoc()) {
                                                                        echo $result6t6['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2496t6 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2496t6) {
                                                                    while ($result2496t6 = $get_nvt2496t6->fetch_assoc()) {
                                                                        echo $result2496t6['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 7</th>
                                                            <td>
                                                                <?php
                                                                $get_nv7t7 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                while ($result7t7 = $get_nv7t7->fetch_assoc()) {
                                                                    echo $result7t7['ten'] . ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4107t7 = $cs->show_shiftnhanvien("4PM-10PM", "2");

                                                                while ($result4107t7 = $get_nv4107t7->fetch_assoc()) {
                                                                    echo $result4107t7['ten'] . ",<br/>";
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt7t7t7 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt7t7t7) {
                                                                    while ($result7t7t8 = $get_nvt7t7t7->fetch_assoc()) {
                                                                        echo $result7t7t8['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2497t7 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2497t7) {
                                                                    while ($result2497t7 = $get_nvt2497t7->fetch_assoc()) {
                                                                        echo $result2497t7['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Chủ nhật</th>
                                                            <td>
                                                                <?php
                                                                $get_nv44cn1 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                while ($result44cn1 = $get_nv44cn1->fetch_assoc()) {
                                                                    echo $result44cn1['ten'] . ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv410cnn = $cs->show_shiftnhanvien("4PM-10PM", "2");

                                                                while ($result410cnn = $get_nv410cnn->fetch_assoc()) {
                                                                    echo $result410cnn['ten'] . ",<br/>";
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt33n = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt33n) {
                                                                    while ($result33n = $get_nvt33n->fetch_assoc()) {
                                                                        echo $result33n['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nvt2499n = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2499n) {
                                                                    while ($result2499n = $get_nvt2499n->fetch_assoc()) {
                                                                        echo $result2499n['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="bug-container hide" style="background: rgb(255,0,0,0.1); margin-top:20px; text-align: center;">
                    <div>View Shift (Chuột phải lưu ảnh về máy)</div>
                    <div class="bug" style="margin-top: 10px; cursor: crosshair;">
                        <img width="100%" class="screen">
                        <div class="region" style="position: absolute; background: rgba(255,0,0,0.4);"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>

</body>

</html>