<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
        name="viewport">
    <title>轻量云用户中心</title>

    <link rel="stylesheet" href="/vendor/stisla/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/stisla/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/vendor/stisla/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="/vendor/stisla/css/demo.css">
    <link rel="stylesheet" href="/vendor/stisla/css/style.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar"<?php if (!$showSider) { ?> style="left: 0"<?php } ?>>
    <form class="form-inline mr-auto">
        
        <ul class="navbar-nav mr-3">
            <?php if ($showSider) { ?>
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                    <i class="ion ion-navicon-round"></i>
                </a>
            </li>
            <?php } else { ?>
            <li>
                <a href="<?= $this->url->get() ?>"  class="nav-link nav-link-lg">
                    <i class="fa fa-cloud"></i>
                </a>
            </li>
            <?php } ?>
            <li>
                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">
                    <i class="ion ion-search"></i>
                </a>
            </li>
        </ul>
        
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <?php if ($this->session->read('identity') > 0) { ?>
        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep">
                <i class="ion ion-ios-bell-outline"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">通知
                    <div class="float-right">
                        <a href="#">查看全部</a>
                    </div>
                </div>
                <div class="dropdown-list-content">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <img alt="image" src="/vendor/stisla/img/avatar/avatar-1.jpeg"
                            class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                <i class="ion ion-android-person d-lg-none"></i>
                <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->user->nickname ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?= $this->url->get('user/reset-password') ?>" class="dropdown-item has-icon">
                    <i class="ion ion-toggle"></i> 重置密码
                </a>
                <a href="<?= $this->url->get('user/logout') ?>" class="dropdown-item has-icon">
                    <i class="ion ion-log-out"></i> 退出
                </a>
            </div>
        </li>
        <?php } else { ?>
        <li>
            <a href="<?= $this->url->get('user/login') ?>" class="nav-link nav-link-lg">
                <div class="d-sm-none d-lg-inline-block">登录</div>
            </a>
        </li>
        <?php } ?>
    </ul>
</nav>
            <?php if ($showSider) { ?>
            <div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla Lite</a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image" src="/vendor/stisla/img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">Ujang Maman</div>
                <div class="user-role">
                    Administrator
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
                <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Components</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
                <ul class="menu-dropdown">
                    <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                    <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
                    <li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
                    <li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
                <ul class="menu-dropdown">
                    <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                    <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                    <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
                </ul>
            </li>
            <li>
                <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
            </li>
            <li>
                <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
            </li>
            <li>
                <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
            </li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                <ul class="menu-dropdown">
                    <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                    <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                    <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                    <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                    <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                </ul>
            </li>

            <li class="menu-header">More</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                        <ul class="menu-dropdown">
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                            <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                    3</a>
                                <ul class="menu-dropdown">
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
            </li>
            <li class="active">
                <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
            </li>
        </ul>
        <div class="p-3 mt-4 mb-4">
            <a href="http://stisla.multinity.com/"
                class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
                <i class="ion ion-help-buoy"></i>
                <div>Go PRO!</div>
            </a>
        </div>
    </aside>
</div>
            <?php } ?>
            <div class="main-content"<?php if (!$showSider) { ?> style="padding-left: 30px"<?php } ?>>
                <section class="section">
                    <h1 class="section-header">
                        <div><?= $title ?></div>
                    </h1>
                    <div class="section-body"></div>
                    <?= $this->getContent() ?>
                </section>
            </div>
            <footer class="main-footer"<?php if (!$showSider) { ?> style="padding-left: 0px; text-align: center;"<?php } ?>>
    <div class="footer-left">
        Copyright &copy; <?= date('Y') ?> 
        <div class="bullet"></div>
        <a href="https://www.bullsoft.org" target="_blank">BullSoft.org</a>
    </div>
    <div class="footer-right"></div>
</footer>
        </div>
    </div>
    <script src="/vendor/stisla/modules/jquery.min.js"></script>
<script src="/vendor/stisla/modules/popper.js"></script>
<script src="/vendor/stisla/modules/tooltip.js"></script>
<script src="/vendor/stisla/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/stisla/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="/vendor/stisla/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
<script src="/vendor/stisla/js/sa-functions.js"></script>

<script src="/vendor/stisla/js/scripts.js"></script>
<script src="/vendor/stisla/js/custom.js"></script>
<!--<script src="/vendor/stisla/js/demo.js"></script>-->
</body>

</html>