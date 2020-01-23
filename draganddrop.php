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
<style>
  .list-group-item {
    cursor: -webkit-grab;
    cursor: grab;
  }

  .list-group-item:active {
    cursor: -webkit-grab;
    cursor: grab;
  }

  #demo1 {
    width: 20%;
    float:left;
  }

  #demo2, #demo3,#demo4,#demo5,#demo6,#demo7 {
    width: 15%;
    float: left;
    margin: 0 0 0 10px;
  }
  #democn {
    width: 25%;
    float: left;
    margin: 0 0 0 10px;
  }
  #field {
    color:white;
  }

  .jumbotron {
    width: 100%;
  }
</style>

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
        $i = 1;
        $cs = new nhanvien();


        ?>
      </div>
      <div class="app-main__outer">
        <div class="app-main__inner">


          <div class="row">
            <div class="col-md-12">
              <div class="main-card mb-3 card">
                <div class="card-header">Clock: &nbsp;<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                  <div class="btn-actions-pane-right">

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
                    <button class="mb-2 mr-2 btn btn-default">
                      <?php
                      $date = getdate();


                      echo $date['weekday'] . " >";
                      echo "Ngày: " . $date['mday'] . " /";
                      echo "Tháng: " . $date['mon'] . "/";
                      echo "Năm: " . $date['year'] . "<br/>";
                      ?>
                    </button>
                    <div role="group" class="btn-group-sm btn-group">
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
                      <script src="assets/scripts/screen.js" type="text/javascript"></script>
                      <button class=" btn btn-focus" onclick="report()">Chụp màn hình</button>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                        View
                      </button>
                      <button class="btn btn-success" onclick="window.location = 'newcheft.php'" >Thêm đầu bếp</button>   
                    </div>
                  </div>
                </div>

                  <?php
                  $filepath = realpath(dirname(__FILE__));
                  include_once($filepath . '/classes/cheft.php');
                  include_once($filepath . '/../helpers/format.php');
                  //PHP OOP
                  $cs = new cheft();
                  $get_nv = $cs->show_cheft();
                  ?>

                  <div class="row mt-8">
                    <div class="col" style="margin: 0 0 10px 0;">
                      <div class="jumbotron">
                        <ul class="list-group" id="demo1">
                        <li class="list-group-item bg-info">Danh sách đầu bếp <?php $countcheft=$cs->Countcheft();$count=$countcheft->fetch_assoc();echo '*'.$count['cheft']; ?></li>
                          <?php
                          if ($get_nv) {
                            while ($result = $get_nv->fetch_assoc()) {

                          ?>
                              <li class="list-group-item"><?= $result['ten'] ?>
                              <!--<button class="btn btn-light" onclick="window.open('sortshift.php')">Details</button>-->
                            </li>
                          <?php
                            }
                          } ?>
                        </ul>

                        <ul class="list-group mt-1" id="demo2">
                          <li class="list-group-item bg-success">Monday</li>
                        </ul>

                        <ul class="list-group mt-1" id="demo3">
                          <li class="list-group-item bg-warning">Tuesday</li>
                        </ul>

                        <ul class="list-group mt-1" id="demo4">
                          <li class="list-group-item bg-focus" id="field">Wednesday</li>
                        </ul>

                        <ul class="list-group mt-1" id="demo5">
                          <li class="list-group-item bg-success">Thursday</li>
                        </ul>

                        <ul class="list-group mt-1" id="demo6">
                          <li class="list-group-item bg-info">Friday</li>
                        </ul>

                        <ul class="list-group mt-1" id="demo7">
                          <li class="list-group-item bg-default">Saturday</li>
                        </ul>

                        <ul class="list-group mt-1" id="democn">
                          <li class="list-group-item bg-danger">Sunday</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <script src="assets/scripts/sortable.js"></script>
                  <script>
                    Sortable.create(demo1, {
                      animation: 100,
                      group: 'list-1',
                      draggable: '.list-group-item',
                      handle: '.list-group-item',
                      sort: true,
                      filter: '.sortable-disabled',
                      chosenClass: 'active'
                    });

                    Sortable.create(demo2, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });

                    Sortable.create(demo3, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });
                    Sortable.create(demo4, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });
                    Sortable.create(demo5, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });
                    Sortable.create(demo6, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });
                    Sortable.create(demo7, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });
                    Sortable.create(democn, {
                      group: 'list-1',
                      handle: '.list-group-item',
                      chosenClass: 'active'
                    });
                  </script>

              </div>
            </div>
          </div>

        </div>
      </div>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
  </div>
  <script type="text/javascript" src="./assets/scripts/main.js"></script>
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
</body>

</html>