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
                                                                // morning
                                                                $get_nvt2 = $cs->show_shiftCashier("Thứ 2", "10AM-4PM", "1");
                                                                $get_rd_nv = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvt2) {
                                                                    while ($result2 = $get_nvt2->fetch_assoc()) {
                                                                        echo $result2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t2 = $get_rd_nv->fetch_assoc()) {
                                                                        echo $resul_rd_t2['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt2_night = $cs->show_shiftCashier("Thứ 2", "4PM-9PM", "1");
                                                                $get_rd_nv_night = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvt2_night) {
                                                                    while ($result2_night = $get_nvt2_night->fetch_assoc()) {
                                                                        echo $result2_night['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t2_night = $get_rd_nv_night->fetch_assoc()) {
                                                                        echo $resul_rd_t2_night['ten'] . ",<br/>";
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
                                                                // morning
                                                                $get_nvt3_cahsier = $cs->show_shiftCashier("Thứ 3", "10AM-4PM", "1");
                                                                $get_rd_nv_t3_cashier = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvt3_cahsier) {
                                                                    while ($result3_cashier = $get_nvt3_cahsier->fetch_assoc()) {
                                                                        echo $result3_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t3_cashier = $get_rd_nv_t3_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_t3_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt3_cashier = $cs->show_shiftCashier("Thứ 3", "4PM-9PM", "1");
                                                                $get_rd_nv_night_cashier = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvt3_cashier) {
                                                                    while ($result2_night_cashier = $get_nvt3_cashier->fetch_assoc()) {
                                                                        echo $result2_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t2_night_cashier = $get_rd_nv_night_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_t2_night_cashier['ten'] . ",<br/>";
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
                                                                // morning
                                                                $get_nvt4_cahsier = $cs->show_shiftCashier("Thứ 4", "10AM-4PM", "1");
                                                                $get_rd_nv_t4_cashier = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvt4_cahsier) {
                                                                    while ($result4_cashier = $get_nvt4_cahsier->fetch_assoc()) {
                                                                        echo $result4_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t4_cashier = $get_rd_nv_t4_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_t4_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt4_cashier = $cs->show_shiftCashier("Thứ 4", "4PM-9PM", "1");
                                                                $get_rd_nv_night_cashier_t4 = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvt4_cashier) {
                                                                    while ($result4_night_cashier = $get_nvt4_cashier->fetch_assoc()) {
                                                                        echo $result4_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t4_night_cashier = $get_rd_nv_night_cashier_t4->fetch_assoc()) {
                                                                        echo $resul_rd_t4_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Thứ 5</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_t5 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd_t51nv_t5 = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nv_t5s = $cs->CountGetSchedule("Thứ 5", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv_st5 = $count_nv_t5s->fetch_assoc();
                                                                if ($rescount_nv_st5['nv'] == '2') {
                                                                    $get_nv_t5 = $cs->GetSchedule("Thứ 5", "9AM-4PM", "1");
                                                                    while ($result_st5 = $get_nv_t5->fetch_assoc()) {
                                                                        echo $result_st5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_st5['nv'] == '1') {
                                                                    $get_nv_t5 = $cs->GetSchedule("Thứ 5", "9AM-4PM", "1");
                                                                    while ($result_st5 = $get_nv_t5->fetch_assoc()) {
                                                                        echo $result_st5['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_st5rd_st5 = $get_rd_t51nv_t5->fetch_assoc()) {
                                                                        echo $result_st5rd_st5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_st5['nv'] == '0') {
                                                                    while ($result_st5rd_st5 = $get_rd_t5->fetch_assoc()) {
                                                                        echo $result_st5rd_st5['ten'] . ",<br/>";
                                                                    }
                                                                }


                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php

                                                                $get_rdnight_t5 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                $get_rd1nvnightt5 = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
                                                                //
                                                                $count_nvdemt5 = $cs->CountGetSchedule("Thứ 5", "4PM-10PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nvt5 = $count_nvdemt5->fetch_assoc();
                                                                if ($rescount_nvt5['nv'] == '2') {
                                                                    $get_nv_t5 = $cs->GetSchedule("Thứ 5", "4PM-10PM", "1");
                                                                    while ($t5result = $get_nv_t5->fetch_assoc()) {
                                                                        echo $t5result['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nvt5['nv'] == '1') {
                                                                    $get_nv_t5 = $cs->GetSchedule("Thứ 5", "4PM-10PM", "1");
                                                                    while ($t5result = $get_nv_t5->fetch_assoc()) {
                                                                        echo $t5result['ten'] . ",<br/>";
                                                                    }
                                                                    while ($t5resultrd = $get_rd1nvnightt5->fetch_assoc()) {
                                                                        echo $t5resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nvt5['nv'] == '0') {
                                                                    while ($t5resultrd = $get_rdnight_t5->fetch_assoc()) {
                                                                        echo $t5resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt5_cahsier = $cs->show_shiftCashier("Thứ 5", "10AM-4PM", "1");
                                                                $get_rd_nv_t5_cashier = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvt5_cahsier) {
                                                                    while ($result5_cashier = $get_nvt5_cahsier->fetch_assoc()) {
                                                                        echo $result5_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t5_cashier = $get_rd_nv_t5_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_t5_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt5_cashier = $cs->show_shiftCashier("Thứ 5", "4PM-9PM", "1");
                                                                $get_rd_nv_night_cashier_t5 = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvt5_cashier) {
                                                                    while ($result5_night_cashier = $get_nvt5_cashier->fetch_assoc()) {
                                                                        echo $result5_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t5_night_cashier = $get_rd_nv_night_cashier_t5->fetch_assoc()) {
                                                                        echo $resul_rd_t5_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Thứ 6</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_t6 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd_t61nv_t6 = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nv_t6s = $cs->CountGetSchedule("Thứ 6", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv_st6 = $count_nv_t6s->fetch_assoc();
                                                                if ($rescount_nv_st6['nv'] == '2') {
                                                                    $get_nv_t6 = $cs->GetSchedule("Thứ 6", "9AM-4PM", "1");
                                                                    while ($result_st6 = $get_nv_t6->fetch_assoc()) {
                                                                        echo $result_st6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_st6['nv'] == '1') {
                                                                    $get_nv_t6 = $cs->GetSchedule("Thứ 6", "9AM-4PM", "1");
                                                                    while ($result_st6 = $get_nv_t6->fetch_assoc()) {
                                                                        echo $result_st6['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_st6rd_t6 = $get_rd_t61nv_t6->fetch_assoc()) {
                                                                        echo $result_st6rd_t6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_st6['nv'] == '0') {
                                                                    while ($result_st6rd_t6 = $get_rd_t6->fetch_assoc()) {
                                                                        echo $result_st6rd_t6['ten'] . ",<br/>";
                                                                    }
                                                                }


                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php

                                                                $get_rdnight_t6 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                $get_rd1nvnightt6 = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
                                                                //
                                                                $count_nvdemt6 = $cs->CountGetSchedule("Thứ 6", "4PM-10PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nvt6 = $count_nvdemt6->fetch_assoc();
                                                                if ($rescount_nvt6['nv'] == '2') {
                                                                    $get_nv_t6 = $cs->GetSchedule("Thứ 6", "4PM-10PM", "1");
                                                                    while ($t6result = $get_nv_t6->fetch_assoc()) {
                                                                        echo $t6result['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nvt6['nv'] == '1') {
                                                                    $get_nv_t6 = $cs->GetSchedule("Thứ 6", "4PM-10PM", "1");
                                                                    while ($t6result = $get_nv_t6->fetch_assoc()) {
                                                                        echo $t6result['ten'] . ",<br/>";
                                                                    }
                                                                    while ($t6resultrd = $get_rd1nvnightt6->fetch_assoc()) {
                                                                        echo $t6resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nvt6['nv'] == '0') {
                                                                    while ($t6resultrd = $get_rdnight_t6->fetch_assoc()) {
                                                                        echo $t6resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt6_cahsier = $cs->show_shiftCashier("Thứ 6", "10AM-4PM", "1");
                                                                $get_rd_nv_t6_cashier = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvt6_cahsier) {
                                                                    while ($result6_cashier = $get_nvt6_cahsier->fetch_assoc()) {
                                                                        echo $result6_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t6_cashier = $get_rd_nv_t6_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_t6_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt6_cashier = $cs->show_shiftCashier("Thứ 6", "4PM-9PM", "1");
                                                                $get_rd_nv_night_cashier_t6 = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvt6_cashier) {
                                                                    while ($result6_night_cashier = $get_nvt6_cashier->fetch_assoc()) {
                                                                        echo $result6_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t6_night_cashier = $get_rd_nv_night_cashier_t6->fetch_assoc()) {
                                                                        echo $resul_rd_t6_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Thứ 7</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_t7 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd_t71nv_t7 = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nv_t7s = $cs->CountGetSchedule("Thứ 7", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv_st7 = $count_nv_t7s->fetch_assoc();
                                                                if ($rescount_nv_st7['nv'] == '2') {
                                                                    $get_nv_t7 = $cs->GetSchedule("Thứ 7", "9AM-4PM", "1");
                                                                    while ($result_st7 = $get_nv_t7->fetch_assoc()) {
                                                                        echo $result_st7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_st7['nv'] == '1') {
                                                                    $get_nv_t7 = $cs->GetSchedule("Thứ 7", "9AM-4PM", "1");
                                                                    while ($result_st7 = $get_nv_t7->fetch_assoc()) {
                                                                        echo $result_st7['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_st7rd_t7 = $get_rd_t71nv_t7->fetch_assoc()) {
                                                                        echo $result_st7rd_t7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_st7['nv'] == '0') {
                                                                    while ($result_st7rd_t7 = $get_rd_t7->fetch_assoc()) {
                                                                        echo $result_st7rd_t7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php

                                                                $get_rdnight_t7 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                $get_rd1nvnightt7 = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
                                                                //
                                                                $count_nvdemt7 = $cs->CountGetSchedule("Thứ 7", "4PM-10PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nvt7 = $count_nvdemt7->fetch_assoc();
                                                                if ($rescount_nvt7['nv'] == '2') {
                                                                    $get_nv_t7 = $cs->GetSchedule("Thứ 7", "4PM-10PM", "1");
                                                                    while ($t7result = $get_nv_t7->fetch_assoc()) {
                                                                        echo $t7result['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nvt7['nv'] == '1') {
                                                                    $get_nv_t7 = $cs->GetSchedule("Thứ 7", "4PM-10PM", "1");
                                                                    while ($t7result = $get_nv_t7->fetch_assoc()) {
                                                                        echo $t7result['ten'] . ",<br/>";
                                                                    }
                                                                    while ($t7resultrd = $get_rd1nvnightt7->fetch_assoc()) {
                                                                        echo $t7resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nvt7['nv'] == '0') {
                                                                    while ($t7resultrd = $get_rdnight_t7->fetch_assoc()) {
                                                                        echo $t7resultrd['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt7_cahsier = $cs->show_shiftCashier("Thứ 7", "10AM-4PM", "1");
                                                                $get_rd_nv_t7_cashier = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvt7_cahsier) {
                                                                    while ($result7_cashier = $get_nvt7_cahsier->fetch_assoc()) {
                                                                        echo $result7_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t7_cashier = $get_rd_nv_t7_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_t7_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt7_cashier = $cs->show_shiftCashier("Thứ 7", "4PM-9PM", "1");
                                                                $get_rd_nv_night_cashier_t7 = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvt7_cashier) {
                                                                    while ($result7_night_cashier = $get_nvt7_cashier->fetch_assoc()) {
                                                                        echo $result7_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t7_night_cashier = $get_rd_nv_night_cashier_t7->fetch_assoc()) {
                                                                        echo $resul_rd_t7_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Chủ nhật</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_cn = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                $get_rd_cn1nv_cn = $cs->show_shiftnhanvienRD1("9AM-4PM", "1");
                                                                //
                                                                $count_nv_cns = $cs->CountGetSchedule("Chủ nhật", "9AM-4PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nv_scn = $count_nv_cns->fetch_assoc();
                                                                if ($rescount_nv_scn['nv'] == '2') {
                                                                    $get_nv_cn = $cs->GetSchedule("Chủ nhật", "9AM-4PM", "1");
                                                                    while ($result_scn = $get_nv_cn->fetch_assoc()) {
                                                                        echo $result_scn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_scn['nv'] == '1') {
                                                                    $get_nv_cn = $cs->GetSchedule("Chủ nhật", "9AM-4PM", "1");
                                                                    while ($result_scn = $get_nv_cn->fetch_assoc()) {
                                                                        echo $result_scn['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_scnrd_cn = $get_rd_cn1nv_cn->fetch_assoc()) {
                                                                        echo $result_scnrd_cn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_scn['nv'] == '0') {
                                                                    while ($result_scnrd_cn = $get_rd_cn->fetch_assoc()) {
                                                                        echo $result_scnrd_cn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php

                                                                $get_rdnight_cn = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                $get_rd1nvnightcn = $cs->show_shiftnhanvienRD1("4PM-10PM", "1");
                                                                //
                                                                $count_nvdemCN = $cs->CountGetSchedule("Chủ nhật", "4PM-10PM", "1");
                                                                // truong hop 2nv
                                                                $rescount_nvcn = $count_nvdemCN->fetch_assoc();
                                                                if ($rescount_nvcn['nv'] == '2') {
                                                                    $get_nv_cn = $cs->GetSchedule("Chủ nhật", "4PM-10PM", "1");
                                                                    while ($CNresult = $get_nv_cn->fetch_assoc()) {
                                                                        echo $CNresult['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nvcn['nv'] == '1') {
                                                                    $get_nv_cn = $cs->GetSchedule("Chủ nhật", "4PM-10PM", "1");
                                                                    while ($CNresult = $get_nv_cn->fetch_assoc()) {
                                                                        echo $CNresult['ten'] . ",<br/>";
                                                                    }
                                                                    while ($CNresultrd = $get_rd1nvnightcn->fetch_assoc()) {
                                                                        echo $CNresultrd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nvcn['nv'] == '0') {
                                                                    while ($CNresultrd = $get_rdnight_cn->fetch_assoc()) {
                                                                        echo $CNresultrd['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                           
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvcn_cahsier = $cs->show_shiftCashier("Chủ nhật", "10AM-4PM", "1");
                                                                $get_rd_nv_cn_cashier = $cs->show_RD1_Cashier("10AM-4PM", "1");
                                                                if ($get_nvcn_cahsier) {
                                                                    while ($resulcn_cashier = $get_nvcn_cahsier->fetch_assoc()) {
                                                                        echo $resulcn_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_cn_cashier = $get_rd_nv_cn_cashier->fetch_assoc()) {
                                                                        echo $resul_rd_cn_cashier['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvcn_cashier = $cs->show_shiftCashier("Chủ nhật", "4PM-9PM", "1");
                                                                $get_rd_nv_night_cashier_cn = $cs->show_RD1_Cashier("4PM-9PM", "1");
                                                                if ($get_nvcn_cashier) {
                                                                    while ($resulcn_night_cashier = $get_nvcn_cashier->fetch_assoc()) {
                                                                        echo $resulcn_night_cashier['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_cn_night_cashier = $get_rd_nv_night_cashier_cn->fetch_assoc()) {
                                                                        echo $resul_rd_cn_night_cashier['ten'] . ",<br/>";
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
                                                                $get_rd_team2_t2 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2 = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2 = $cs->CountGetSchedule("Thứ 2", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2 = $count_nv_team2->fetch_assoc();
                                                                if ($rescount_nv_team2['nv'] == '2') {
                                                                    $get_nv_team2 = $cs->GetSchedule("Thứ 2", "9AM-4PM", "2");
                                                                    while ($result_steam2 = $get_nv_team2->fetch_assoc()) {
                                                                        echo $result_steam2['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2['nv'] == '1') {
                                                                    $get_nv_team2 = $cs->GetSchedule("Thứ 2", "9AM-4PM", "2");
                                                                    while ($result_steam2 = $get_nv_team2->fetch_assoc()) {
                                                                        echo $result_steam2['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_steam2rd_team2 = $get_rd_1nv_team2->fetch_assoc()) {
                                                                        echo $result_steam2rd_team2['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2['nv'] == '0') {
                                                                    while ($result_steam2rd_team2 = $get_rd_team2_t2->fetch_assoc()) {
                                                                        echo $result_steam2rd_team2['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2 = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_team2 = $cs->CountGetSchedule("Thứ 2", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2 = $count_nvdem_team2->fetch_assoc();
                                                                if ($rescount_nv_team2['nv'] == '2') {
                                                                    $get_nv_team2 = $cs->GetSchedule("Thứ 2", "4PM-10PM", "2");
                                                                    while ($result_team2_ = $get_nv_team2->fetch_assoc()) {
                                                                        echo $result_team2_['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2['nv'] == '1') {
                                                                    $get_nv_team2 = $cs->GetSchedule("Thứ 2", "4PM-10PM", "2");
                                                                    while ($result_team2_ = $get_nv_team2->fetch_assoc()) {
                                                                        echo $result_team2_['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd = $get_rd1nv_night_team2->fetch_assoc()) {
                                                                        echo $result_team2_rd['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2['nv'] == '0') {
                                                                    while ($result_team2_rd = $get_rdnight_team2->fetch_assoc()) {
                                                                        echo $result_team2_rd['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt2_team2_cas = $cs->show_shiftCashier("Thứ 2", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvt2_team2_cas) {
                                                                    while ($result2_cas = $get_nvt2_team2_cas->fetch_assoc()) {
                                                                        echo $result2_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t2team2_cas = $get_rd_nv_team2_cas->fetch_assoc()) {
                                                                        echo $resul_rd_t2team2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt2_team2_cas_night = $cs->show_shiftCashier("Thứ 2", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvt2_team2_cas_night) {
                                                                    while ($result2_cas_night_team2 = $get_nvt2_team2_cas_night->fetch_assoc()) {
                                                                        echo $result2_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t2team2_cas_night = $get_rd_nv_team2_cas_night->fetch_assoc()) {
                                                                        echo $resul_rd_t2team2_cas_night['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 3</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_team2_t3 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2_t3 = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2_t3 = $cs->CountGetSchedule("Thứ 3", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2_t3 = $count_nv_team2_t3->fetch_assoc();
                                                                if ($rescount_nv_team2_t3['nv'] == '2') {
                                                                    $get_nv_team2_t3 = $cs->GetSchedule("Thứ 3", "9AM-4PM", "2");
                                                                    while ($result_team2_t3 = $get_nv_team2_t3->fetch_assoc()) {
                                                                        echo $result_team2_t3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2_t3['nv'] == '1') {
                                                                    $get_nv_team2_t3 = $cs->GetSchedule("Thứ 3", "9AM-4PM", "2");
                                                                    while ($result_team2_t3 = $get_nv_team2_t3->fetch_assoc()) {
                                                                        echo $result_team2_t3['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_rd_team2_t3 = $get_rd_1nv_team2_t3->fetch_assoc()) {
                                                                        echo $result_rd_team2_t3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2_t3['nv'] == '0') {
                                                                    while ($result_rd_team2_t3 = $get_rd_team2_t3->fetch_assoc()) {
                                                                        echo $result_rd_team2_t3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2n_t3 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2_t3 = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_nteam2_t3 = $cs->CountGetSchedule("Thứ 3", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2n_t3 = $count_nvdem_nteam2_t3->fetch_assoc();
                                                                if ($rescount_nv_team2n_t3['nv'] == '2') {
                                                                    $get_nv_team2n_t3 = $cs->GetSchedule("Thứ 3", "4PM-10PM", "2");
                                                                    while ($result_team2_nt3 = $get_nv_team2n_t3->fetch_assoc()) {
                                                                        echo $result_team2_nt3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2n_t3['nv'] == '1') {
                                                                    $get_nv_team2n_t3 = $cs->GetSchedule("Thứ 3", "4PM-10PM", "2");
                                                                    while ($result_team2_nt3 = $get_nv_team2n_t3->fetch_assoc()) {
                                                                        echo $result_team2_nt3['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd_nt3 = $get_rd1nv_night_team2_t3->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt3['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2n_t3['nv'] == '0') {
                                                                    while ($result_team2_rd_nt3 = $get_rdnight_team2n_t3->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt3['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt3_team2_cas = $cs->show_shiftCashier("Thứ 3", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas_t3 = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvt3_team2_cas) {
                                                                    while ($result3_cas = $get_nvt3_team2_cas->fetch_assoc()) {
                                                                        echo $result3_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t3team2_cas = $get_rd_nv_team2_cas_t3->fetch_assoc()) {
                                                                        echo $resul_rd_t3team2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt3_team2_cas_night = $cs->show_shiftCashier("Thứ 3", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_t3_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvt3_team2_cas_night) {
                                                                    while ($result3_cas_night_team2 = $get_nvt3_team2_cas_night->fetch_assoc()) {
                                                                        echo $result3_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t3team2_cas_night = $get_rd_nv_team2_cas_t3_night->fetch_assoc()) {
                                                                        echo $resul_rd_t3team2_cas_night['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 4</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_team2_t4 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2_t4 = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2_t4 = $cs->CountGetSchedule("Thứ 4", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2_t4 = $count_nv_team2_t4->fetch_assoc();
                                                                if ($rescount_nv_team2_t4['nv'] == '2') {
                                                                    $get_nv_team2_t4 = $cs->GetSchedule("Thứ 4", "9AM-4PM", "2");
                                                                    while ($result_team2_t4 = $get_nv_team2_t4->fetch_assoc()) {
                                                                        echo $result_team2_t4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2_t4['nv'] == '1') {
                                                                    $get_nv_team2_t4 = $cs->GetSchedule("Thứ 4", "9AM-4PM", "2");
                                                                    while ($result_team2_t4 = $get_nv_team2_t4->fetch_assoc()) {
                                                                        echo $result_team2_t4['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_rd_team2_t4 = $get_rd_1nv_team2_t4->fetch_assoc()) {
                                                                        echo $result_rd_team2_t4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2_t4['nv'] == '0') {
                                                                    while ($result_rd_team2_t4 = $get_rd_team2_t4->fetch_assoc()) {
                                                                        echo $result_rd_team2_t4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2n_t4 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2_t4 = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_nteam2_t4 = $cs->CountGetSchedule("Thứ 4", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2n_t4 = $count_nvdem_nteam2_t4->fetch_assoc();
                                                                if ($rescount_nv_team2n_t4['nv'] == '2') {
                                                                    $get_nv_team2n_t4 = $cs->GetSchedule("Thứ 4", "4PM-10PM", "2");
                                                                    while ($result_team2_nt4 = $get_nv_team2n_t4->fetch_assoc()) {
                                                                        echo $result_team2_nt4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2n_t4['nv'] == '1') {
                                                                    $get_nv_team2n_t4 = $cs->GetSchedule("Thứ 4", "4PM-10PM", "2");
                                                                    while ($result_team2_nt4 = $get_nv_team2n_t4->fetch_assoc()) {
                                                                        echo $result_team2_nt4['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd_nt4 = $get_rd1nv_night_team2_t4->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt4['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2n_t4['nv'] == '0') {
                                                                    while ($result_team2_rd_nt4 = $get_rdnight_team2n_t4->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt4['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt4_team2_cas = $cs->show_shiftCashier("Thứ 4", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas_t4 = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvt4_team2_cas) {
                                                                    while ($result4_cas = $get_nvt4_team2_cas->fetch_assoc()) {
                                                                        echo $result4_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t4team2_cas = $get_rd_nv_team2_cas_t4->fetch_assoc()) {
                                                                        echo $resul_rd_t4team2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt4_team2_cas_night = $cs->show_shiftCashier("Thứ 4", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_t4_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvt4_team2_cas_night) {
                                                                    while ($result4_cas_night_team2 = $get_nvt4_team2_cas_night->fetch_assoc()) {
                                                                        echo $result4_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t4team2_cas_night = $get_rd_nv_team2_cas_t4_night->fetch_assoc()) {
                                                                        echo $resul_rd_t4team2_cas_night['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 5</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_team2_t5 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2_t5 = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2_t5 = $cs->CountGetSchedule("Thứ 5", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2_t5 = $count_nv_team2_t5->fetch_assoc();
                                                                if ($rescount_nv_team2_t5['nv'] == '2') {
                                                                    $get_nv_team2_t5 = $cs->GetSchedule("Thứ 5", "9AM-4PM", "2");
                                                                    while ($result_team2_t5 = $get_nv_team2_t5->fetch_assoc()) {
                                                                        echo $result_team2_t5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2_t5['nv'] == '1') {
                                                                    $get_nv_team2_t5 = $cs->GetSchedule("Thứ 5", "9AM-4PM", "2");
                                                                    while ($result_team2_t5 = $get_nv_team2_t5->fetch_assoc()) {
                                                                        echo $result_team2_t5['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_rd_team2_t5 = $get_rd_1nv_team2_t5->fetch_assoc()) {
                                                                        echo $result_rd_team2_t5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2_t5['nv'] == '0') {
                                                                    while ($result_rd_team2_t5 = $get_rd_team2_t5->fetch_assoc()) {
                                                                        echo $result_rd_team2_t5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2n_t5 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2_t5 = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_nteam2_t5 = $cs->CountGetSchedule("Thứ 5", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2n_t5 = $count_nvdem_nteam2_t5->fetch_assoc();
                                                                if ($rescount_nv_team2n_t5['nv'] == '2') {
                                                                    $get_nv_team2n_t5 = $cs->GetSchedule("Thứ 5", "4PM-10PM", "2");
                                                                    while ($result_team2_nt5 = $get_nv_team2n_t5->fetch_assoc()) {
                                                                        echo $result_team2_nt5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2n_t5['nv'] == '1') {
                                                                    $get_nv_team2n_t5 = $cs->GetSchedule("Thứ 5", "4PM-10PM", "2");
                                                                    while ($result_team2_nt5 = $get_nv_team2n_t5->fetch_assoc()) {
                                                                        echo $result_team2_nt5['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd_nt5 = $get_rd1nv_night_team2_t5->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt5['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2n_t5['nv'] == '0') {
                                                                    while ($result_team2_rd_nt5 = $get_rdnight_team2n_t5->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt5['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt5_team2_cas = $cs->show_shiftCashier("Thứ 5", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas_t5 = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvt5_team2_cas) {
                                                                    while ($result5_cas = $get_nvt5_team2_cas->fetch_assoc()) {
                                                                        echo $result5_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t5team2_cas = $get_rd_nv_team2_cas_t5->fetch_assoc()) {
                                                                        echo $resul_rd_t5team2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt5_team2_cas_night = $cs->show_shiftCashier("Thứ 5", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_t5_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvt5_team2_cas_night) {
                                                                    while ($result5_cas_night_team2 = $get_nvt5_team2_cas_night->fetch_assoc()) {
                                                                        echo $result5_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t5team2_cas_night = $get_rd_nv_team2_cas_t5_night->fetch_assoc()) {
                                                                        echo $resul_rd_t5team2_cas_night['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 6</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_team2_t6 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2_t6 = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2_t6 = $cs->CountGetSchedule("Thứ 6", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2_t6 = $count_nv_team2_t6->fetch_assoc();
                                                                if ($rescount_nv_team2_t6['nv'] == '2') {
                                                                    $get_nv_team2_t6 = $cs->GetSchedule("Thứ 6", "9AM-4PM", "2");
                                                                    while ($result_team2_t6 = $get_nv_team2_t6->fetch_assoc()) {
                                                                        echo $result_team2_t6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2_t6['nv'] == '1') {
                                                                    $get_nv_team2_t6 = $cs->GetSchedule("Thứ 6", "9AM-4PM", "2");
                                                                    while ($result_team2_t6 = $get_nv_team2_t6->fetch_assoc()) {
                                                                        echo $result_team2_t6['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_rd_team2_t6 = $get_rd_1nv_team2_t6->fetch_assoc()) {
                                                                        echo $result_rd_team2_t6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2_t6['nv'] == '0') {
                                                                    while ($result_rd_team2_t6 = $get_rd_team2_t6->fetch_assoc()) {
                                                                        echo $result_rd_team2_t6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2n_t6 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2_t6 = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_nteam2_t6 = $cs->CountGetSchedule("Thứ 6", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2n_t6 = $count_nvdem_nteam2_t6->fetch_assoc();
                                                                if ($rescount_nv_team2n_t6['nv'] == '2') {
                                                                    $get_nv_team2n_t6 = $cs->GetSchedule("Thứ 6", "4PM-10PM", "2");
                                                                    while ($result_team2_nt6 = $get_nv_team2n_t6->fetch_assoc()) {
                                                                        echo $result_team2_nt6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2n_t6['nv'] == '1') {
                                                                    $get_nv_team2n_t6 = $cs->GetSchedule("Thứ 6", "4PM-10PM", "2");
                                                                    while ($result_team2_nt6 = $get_nv_team2n_t6->fetch_assoc()) {
                                                                        echo $result_team2_nt6['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd_nt6 = $get_rd1nv_night_team2_t6->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt6['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2n_t6['nv'] == '0') {
                                                                    while ($result_team2_rd_nt6 = $get_rdnight_team2n_t6->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt6['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt6_team2_cas = $cs->show_shiftCashier("Thứ 6", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas_t6 = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvt6_team2_cas) {
                                                                    while ($result6_cas = $get_nvt6_team2_cas->fetch_assoc()) {
                                                                        echo $result6_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t6team2_cas = $get_rd_nv_team2_cas_t6->fetch_assoc()) {
                                                                        echo $resul_rd_t6team2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt6_team2_cas_night = $cs->show_shiftCashier("Thứ 6", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_t6_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvt6_team2_cas_night) {
                                                                    while ($result6_cas_night_team2 = $get_nvt6_team2_cas_night->fetch_assoc()) {
                                                                        echo $result6_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t6team2_cas_night = $get_rd_nv_team2_cas_t6_night->fetch_assoc()) {
                                                                        echo $resul_rd_t6team2_cas_night['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 7</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_team2_t7 = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2_t7 = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2_t7 = $cs->CountGetSchedule("Thứ 7", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2_t7 = $count_nv_team2_t7->fetch_assoc();
                                                                if ($rescount_nv_team2_t7['nv'] == '2') {
                                                                    $get_nv_team2_t7 = $cs->GetSchedule("Thứ 7", "9AM-4PM", "2");
                                                                    while ($result_team2_t7 = $get_nv_team2_t7->fetch_assoc()) {
                                                                        echo $result_team2_t7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2_t7['nv'] == '1') {
                                                                    $get_nv_team2_t7 = $cs->GetSchedule("Thứ 7", "9AM-4PM", "2");
                                                                    while ($result_team2_t7 = $get_nv_team2_t7->fetch_assoc()) {
                                                                        echo $result_team2_t7['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_rd_team2_t7 = $get_rd_1nv_team2_t7->fetch_assoc()) {
                                                                        echo $result_rd_team2_t7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2_t7['nv'] == '0') {
                                                                    while ($result_rd_team2_t7 = $get_rd_team2_t7->fetch_assoc()) {
                                                                        echo $result_rd_team2_t7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2n_t7 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2_t7 = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_nteam2_t7 = $cs->CountGetSchedule("Thứ 7", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2n_t7 = $count_nvdem_nteam2_t7->fetch_assoc();
                                                                if ($rescount_nv_team2n_t7['nv'] == '2') {
                                                                    $get_nv_team2n_t7 = $cs->GetSchedule("Thứ 7", "4PM-10PM", "2");
                                                                    while ($result_team2_nt7 = $get_nv_team2n_t7->fetch_assoc()) {
                                                                        echo $result_team2_nt7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2n_t7['nv'] == '1') {
                                                                    $get_nv_team2n_t7 = $cs->GetSchedule("Thứ 7", "4PM-10PM", "2");
                                                                    while ($result_team2_nt7 = $get_nv_team2n_t7->fetch_assoc()) {
                                                                        echo $result_team2_nt7['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd_nt7 = $get_rd1nv_night_team2_t7->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt7['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2n_t7['nv'] == '0') {
                                                                    while ($result_team2_rd_nt7 = $get_rdnight_team2n_t7->fetch_assoc()) {
                                                                        echo $result_team2_rd_nt7['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvt7_team2_cas = $cs->show_shiftCashier("Thứ 7", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas_t7 = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvt7_team2_cas) {
                                                                    while ($result7_cas = $get_nvt7_team2_cas->fetch_assoc()) {
                                                                        echo $result7_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t7team2_cas = $get_rd_nv_team2_cas_t7->fetch_assoc()) {
                                                                        echo $resul_rd_t7team2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvt7_team2_cas_night = $cs->show_shiftCashier("Thứ 7", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_t7_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvt7_team2_cas_night) {
                                                                    while ($result7_cas_night_team2 = $get_nvt7_team2_cas_night->fetch_assoc()) {
                                                                        echo $result7_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_t7team2_cas_night = $get_rd_nv_team2_cas_t7_night->fetch_assoc()) {
                                                                        echo $resul_rd_t7team2_cas_night['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Chủ nhật</th>
                                                            <td>
                                                                <?php
                                                                $get_rd_team2_cn = $cs->show_shiftnhanvien("9AM-4PM", "2");
                                                                $get_rd_1nv_team2_cn = $cs->show_shiftnhanvienRD1("9AM-4PM", "2");
                                                                //
                                                                $count_nv_team2_cn = $cs->CountGetSchedule("Chủ nhật", "9AM-4PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2_cn = $count_nv_team2_cn->fetch_assoc();
                                                                if ($rescount_nv_team2_cn['nv'] == '2') {
                                                                    $get_nv_team2_cn = $cs->GetSchedule("Chủ nhật", "9AM-4PM", "2");
                                                                    while ($result_team2_cn = $get_nv_team2_cn->fetch_assoc()) {
                                                                        echo $result_team2_cn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2_cn['nv'] == '1') {
                                                                    $get_nv_team2_cn = $cs->GetSchedule("Chủ nhật", "9AM-4PM", "2");
                                                                    while ($result_team2_cn = $get_nv_team2_cn->fetch_assoc()) {
                                                                        echo $result_team2_cn['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_rd_team2_cn = $get_rd_1nv_team2_cn->fetch_assoc()) {
                                                                        echo $result_rd_team2_cn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2_cn['nv'] == '0') {
                                                                    while ($result_rd_team2_cn = $get_rd_team2_cn->fetch_assoc()) {
                                                                        echo $result_rd_team2_cn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_rdnight_team2n_cn = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                $get_rd1nv_night_team2_cn = $cs->show_shiftnhanvienRD1("4PM-10PM", "2");
                                                                //
                                                                $count_nvdem_nteam2_cn = $cs->CountGetSchedule("Chủ nhật", "4PM-10PM", "2");
                                                                // truong hop 2nv
                                                                $rescount_nv_team2n_cn = $count_nvdem_nteam2_cn->fetch_assoc();
                                                                if ($rescount_nv_team2n_cn['nv'] == '2') {
                                                                    $get_nv_team2n_cn = $cs->GetSchedule("Chủ nhật", "4PM-10PM", "2");
                                                                    while ($result_team2_ncn = $get_nv_team2n_cn->fetch_assoc()) {
                                                                        echo $result_team2_ncn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 1 nv
                                                                if ($rescount_nv_team2n_cn['nv'] == '1') {
                                                                    $get_nv_team2n_cn = $cs->GetSchedule("Chủ nhật", "4PM-10PM", "2");
                                                                    while ($result_team2_ncn = $get_nv_team2n_cn->fetch_assoc()) {
                                                                        echo $result_team2_ncn['ten'] . ",<br/>";
                                                                    }
                                                                    while ($result_team2_rd_ncn = $get_rd1nv_night_team2_cn->fetch_assoc()) {
                                                                        echo $result_team2_rd_ncn['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                // truong hop 0 nv
                                                                if ($rescount_nv_team2n_cn['nv'] == '0') {
                                                                    while ($result_team2_rd_ncn = $get_rdnight_team2n_cn->fetch_assoc()) {
                                                                        echo $result_team2_rd_ncn['ten'] . ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <?php
                                                                // morning
                                                                $get_nvcn_team2_cas = $cs->show_shiftCashier("Chủ nhật", "10AM-4PM", "2");
                                                                $get_rd_nv_team2_cas_cn = $cs->show_RD1_Cashier("10AM-4PM", "2");
                                                                if ($get_nvcn_team2_cas) {
                                                                    while ($resulcn_cas = $get_nvcn_team2_cas->fetch_assoc()) {
                                                                        echo $resulcn_cas['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_cnteam2_cas = $get_rd_nv_team2_cas_cn->fetch_assoc()) {
                                                                        echo $resul_rd_cnteam2_cas['ten'] . ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                // night
                                                                $get_nvcn_team2_cas_night = $cs->show_shiftCashier("Chủ nhật", "4PM-9PM", "2");
                                                                $get_rd_nv_team2_cas_cn_night = $cs->show_RD1_Cashier("4PM-9PM", "2");
                                                                if ($get_nvcn_team2_cas_night) {
                                                                    while ($resulcn_cas_night_team2 = $get_nvcn_team2_cas_night->fetch_assoc()) {
                                                                        echo $resulcn_cas_night_team2['ten'] . ",<br/>";
                                                                    }
                                                                } else {
                                                                    while ($resul_rd_cnteam2_cas_night = $get_rd_nv_team2_cas_cn_night->fetch_assoc()) {
                                                                        echo $resul_rd_cnteam2_cas_night['ten'] . ",<br/>";
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