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
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


                                            echo "Thứ: " . $date['weekday'] . " >";
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
                                                                $get_nv = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv) {
                                                                    while ($result = $get_nv->fetch_assoc()) {
                                                                        echo $result['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nv410 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv410) {
                                                                    while ($result410 = $get_nv410->fetch_assoc()) {
                                                                        echo $result410['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt2) {
                                                                    while ($result2 = $get_nvt2->fetch_assoc()) {
                                                                        echo $result2['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt249 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt249) {
                                                                    while ($result249 = $get_nvt249->fetch_assoc()) {
                                                                        echo $result249['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 3</th>
                                                            <td>
                                                                <?php
                                                                $get_nv3 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv3) {
                                                                    while ($result3 = $get_nv3->fetch_assoc()) {
                                                                        echo $result3['ten']. ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4100 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4100) {
                                                                    while ($result4100 = $get_nv4100->fetch_assoc()) {
                                                                        echo $result4100['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>


                                                            <td>
                                                                <?php
                                                                $get_nvt3 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt3) {
                                                                    while ($result3 = $get_nvt3->fetch_assoc()) {
                                                                        echo $result3['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2493 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2493) {
                                                                    while ($result2493 = $get_nvt2493->fetch_assoc()) {
                                                                        echo $result2493['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thứ 4</th>
                                                            <td>
                                                                <?php
                                                                $get_nv4 = $cs->show_shiftnhanvien("9AM-4PM", "1");
                                                                if ($get_nv4) {
                                                                    while ($result4 = $get_nv4->fetch_assoc()) {
                                                                        echo $result4['ten']. ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4104 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4104) {
                                                                    while ($result4104 = $get_nv4104->fetch_assoc()) {
                                                                        echo $result4104['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt4 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt4) {
                                                                    while ($result4 = $get_nvt4->fetch_assoc()) {
                                                                        echo $result4['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2494 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2494) {
                                                                    while ($result2494 = $get_nvt2494->fetch_assoc()) {
                                                                        echo $result2494['ten']. ",<br/>";
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
                                                                        echo $result5['ten']. ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4105 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4105) {
                                                                    while ($result4105 = $get_nv4105->fetch_assoc()) {
                                                                        echo $result4105['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt5 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt5) {
                                                                    while ($result5 = $get_nvt5->fetch_assoc()) {
                                                                        echo $result5['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2495 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2495) {
                                                                    while ($result2495 = $get_nvt2495->fetch_assoc()) {
                                                                        echo $result2495['ten']. ",<br/>";
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
                                                                        echo $result6['ten']. ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4106 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4106) {
                                                                    while ($result4106 = $get_nv4106->fetch_assoc()) {
                                                                        echo $result4106['ten']. ",<br/>";
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
                                                                        echo $result2496['ten']. ",<br/>";
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
                                                                        echo $result7['ten']. ",<br/>";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4107 = $cs->show_shiftnhanvien("4PM-10PM", "1");
                                                                if ($get_nv4107) {
                                                                    while ($result4107 = $get_nv4107->fetch_assoc()) {
                                                                        echo $result4107['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt7 = $cs->show_shiftCashier("10AM-4PM", "1");
                                                                if ($get_nvt7) {
                                                                    while ($result7 = $get_nvt7->fetch_assoc()) {
                                                                        echo $result7['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2497 = $cs->show_shiftCashier("4PM-9PM", "1");
                                                                if ($get_nvt2497) {
                                                                    while ($result2497 = $get_nvt2497->fetch_assoc()) {
                                                                        echo $result2497['ten']. ",<br/>";
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
                                                                        echo $result410cn['ten']. ",<br/>";
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
                                                                        echo $result2499['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!--Team 2 -->
                                                <table class="mb-0 table table-striped">
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
                                                                        echo $kqt2['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nv410t2 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv410t2) {
                                                                    while ($result410t2 = $get_nv410t2->fetch_assoc()) {
                                                                        echo $result410t2['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2t2 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt2t2) {
                                                                    while ($result2t2 = $get_nvt2t2->fetch_assoc()) {
                                                                        echo $result2t2['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt249t2 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt249t2) {
                                                                    while ($result249t2 = $get_nvt249t2->fetch_assoc()) {
                                                                        echo $result249t2['ten']. ",<br/>";
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
                                                                        echo $kqt23t3['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4100t3 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4100t3) {
                                                                    while ($result4100t3 = $get_nv4100t3->fetch_assoc()) {
                                                                        echo $result4100t3['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nvt3t3 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt3t3) {
                                                                    while ($result3t3 = $get_nvt3t3->fetch_assoc()) {
                                                                        echo $result3t3['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2493t3 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2493t3) {
                                                                    while ($result2493t3 = $get_nvt2493t3->fetch_assoc()) {
                                                                        echo $result2493t3['ten']. ",<br/>";
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
                                                                    echo $result4t4['ten']. ",<br/>";
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4104t4 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4104t4) {
                                                                    while ($result4104t4 = $get_nv4104t4->fetch_assoc()) {
                                                                        echo $result4104t4['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt4t4 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt4t4) {
                                                                    while ($result4t4 = $get_nvt4t4->fetch_assoc()) {
                                                                        echo $result4t4['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2494t4 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2494t4) {
                                                                    while ($result2494t4 = $get_nvt2494t4->fetch_assoc()) {
                                                                        echo $result2494t4['ten']. ",<br/>";
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
                                                                    echo $result5t5['ten']. ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4105t5 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4105t5) {
                                                                    while ($result4105t5 = $get_nv4105t5->fetch_assoc()) {
                                                                        echo $result4105t5['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt5t5 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt5t5) {
                                                                    while ($result5t5 = $get_nvt5t5->fetch_assoc()) {
                                                                        echo $result5t5['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2495t5 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2495t5) {
                                                                    while ($result2495t5 = $get_nvt2495t5->fetch_assoc()) {
                                                                        echo $result2495t5['ten']. ",<br/>";
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
                                                                    echo $result6t6['ten']. ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4106t6 = $cs->show_shiftnhanvien("4PM-10PM", "2");
                                                                if ($get_nv4106t6) {
                                                                    while ($result4106t6 = $get_nv4106t6->fetch_assoc()) {
                                                                        echo $result4106t6['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt6t6 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt6t6) {
                                                                    while ($result6t6 = $get_nvt6t6->fetch_assoc()) {
                                                                        echo $result6t6['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2496t6 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2496t6) {
                                                                    while ($result2496t6 = $get_nvt2496t6->fetch_assoc()) {
                                                                        echo $result2496t6['ten']. ",<br/>";
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
                                                                    echo $result7t7['ten']. ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv4107t7 = $cs->show_shiftnhanvien("4PM-10PM", "2");

                                                                while ($result4107t7 = $get_nv4107t7->fetch_assoc()) {
                                                                    echo $result4107t7['ten']. ",<br/>";
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt7t7t7 = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt7t7t7) {
                                                                    while ($result7t7t8 = $get_nvt7t7t7->fetch_assoc()) {
                                                                        echo $result7t7t8['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt2497t7 = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2497t7) {
                                                                    while ($result2497t7 = $get_nvt2497t7->fetch_assoc()) {
                                                                        echo $result2497t7['ten']. ",<br/>";
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
                                                                    echo $result44cn1['ten']. ",<br/>";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nv410cnn = $cs->show_shiftnhanvien("4PM-10PM", "2");

                                                                while ($result410cnn = $get_nv410cnn->fetch_assoc()) {
                                                                    echo $result410cnn['ten']. ",<br/>";
                                                                }

                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $get_nvt33n = $cs->show_shiftCashier("10AM-4PM", "2");
                                                                if ($get_nvt33n) {
                                                                    while ($result33n = $get_nvt33n->fetch_assoc()) {
                                                                        echo $result33n['ten']. ",<br/>";
                                                                    }
                                                                }

                                                                ?>
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $get_nvt2499n = $cs->show_shiftCashier("4PM-9PM", "2");
                                                                if ($get_nvt2499n) {
                                                                    while ($result2499n = $get_nvt2499n->fetch_assoc()) {
                                                                        echo $result2499n['ten']. ",<br/>";
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