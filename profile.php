<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="cssprofile.css" rel="stylesheet" id="bootstrap-css">
    <?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath . '/classes/nhanvien.php');
    include_once($filepath . '/../helpers/format.php');
    //
    //PHP OOP
    $ten = $_GET['name'];
    $cs = new nhanvien();
    $get_nv = $cs->Find_staff($ten);
    if ($get_nv) {
        $kq = $get_nv->fetch_assoc();
    } else {
        echo "<b style='color:red;'>Error</b>";
        die;
    }
    ?><title>Profile <?= $kq['ten'] ?></title>

</head>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="assets/images/avatars/images.png" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="profile-head">
                        <h5>
                            <?= $kq['ten'] ?>
                        </h5>
                        <h6>
                            *Note: <?= $kq['ghichu'] ?>
                        </h6>
                        <p class="proile-rating">Chức vụ : <span><?= $kq['chucvu'] ?></span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>CAll</p>
                        <a target="_blank" style="color:Green;" href="tel:+<?= $kq['sdt'] ?>"> <img src="assets/images/phone.png"></img> CLICK CALL NOW</a><br />

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tên</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $kq['ten'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $kq['sdt'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Shift</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $kq['calamviec'] ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>GP</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $kq['count'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Lịch làm cố định</label>
                                </div>
                                <div class="col-md-6">
                                    <p style="color:red;"><?= $kq['schedule'] ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</body>