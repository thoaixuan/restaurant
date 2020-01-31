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
                $filepath = realpath(dirname(__FILE__));
                include_once($filepath . '/classes/nhanvien.php');
                include_once($filepath . '/../helpers/format.php');
                //
                //PHP OOP
                $cs = new nhanvien();
                $ten = $_GET['name'];
                $info = $cs->Find_staff($ten);

                ?>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Set default schedule: <?= $ten; ?></h5>
                            <?php

                            //
                            $nv = new nhanvien();
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST

                                $insertNV = $nv->ChangeAll($_POST, $_FILES); // hàm check Name khi submit lên
                            }
                            //
                            if (isset($insertNV)) {
                                echo $insertNV;
                            }


                            ?>
                            <form class="needs-validation" validate action="formchange.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip01">Tên</label>
                                        <input type="text" readonly class="form-control" name="ten" value="<?php echo $ten; ?>">
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip02">Phone</label>
                                        <input type="text" class="form-control" name="sdt" id="validationTooltip02" placeholder="Phone" value="<?php $result = $info->fetch_assoc();
                                                                                                                                                echo $result['sdt']; ?>">
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip02">Ca làm</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="input-group-text" name="calam" require>

                                                    <option>10AM-4PM</option>
                                                    <option>4PM-9PM</option>
                                                    <option title="Server">9AM-4PM</option>
                                                    <option title="Server">4PM-10PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltipUsername">GP</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="input-group-text" name="gp" require>
                                                    <option <?php if ($result['count'] == "1") {
                                                                echo "selected";
                                                            } ?>>1</option>
                                                    <option <?php if ($result['count'] == "2") {
                                                                echo "selected";
                                                            } ?>>2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltipUsername">Chức vụ</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="input-group-text" name="chucvu" id="validationTooltipUsernamePrepend" require>
                                                    <option <?php if ($result['chucvu'] == "Thu ngân") {
                                                                echo "selected";
                                                            } ?>>Thu ngân</option>
                                                    <option <?php if ($result['chucvu'] == "Chạy bàn") {
                                                                echo "selected";
                                                            } ?>>Chạy bàn</option>
                                                </select>
                                            </div>

                                            <div class="invalid-tooltip">
                                                Vui lòng chọn chức vụ.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltipUsername">Ngày làm</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select class="input-group-text" name="chucvu" id="validationTooltipUsernamePrepend" require>
                                                    <option>Thứ 2</option>
                                                    <option>Thứ 3</option>
                                                    <option>Thứ 4</option>
                                                    <option>Thứ 5</option>
                                                    <option>Thứ 6</option>
                                                    <option>Thứ 7</option>
                                                    <option>Chủ nhật</option>
                                                    <option selected></option>
                                                </select>
                                            </div>

                                            <div class="invalid-tooltip">
                                                Vui lòng chọn chức vụ.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">Ghi chú</label>
                                        <input type="text" name="note" class="form-control" id="validationTooltip03" value="<?= $result['ghichu'] ?>">
                                        <div class="invalid-tooltip">
                                            Please provide a valid note.
                                        </div>
                                    </div>
                                </div>
                                <input class="btn btn-primary" name="submit" type="submit" value="Change Info">
                            </form>
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