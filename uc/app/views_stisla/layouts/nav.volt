<nav class="navbar navbar-expand-lg main-navbar"{% if !showSider %} style="left: 0"{% endif %}>
    <form class="form-inline mr-auto">
        
        <ul class="navbar-nav mr-3">
            {% if showSider %}
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                    <i class="ion ion-navicon-round"></i>
                </a>
            </li>
            {% else %}
            <li>
                <a href="{{url()}}"  class="nav-link nav-link-lg">
                    <i class="fa fa-cloud"></i>
                </a>
            </li>
            {% endif %}
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
        {% if session.get('identity') > 0 %}
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
                <div class="d-sm-none d-lg-inline-block">Hi, {{user.nickname}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{url('user/reset-password')}}" class="dropdown-item has-icon">
                    <i class="ion ion-toggle"></i> 重置密码
                </a>
                <a href="{{url('user/logout')}}" class="dropdown-item has-icon">
                    <i class="ion ion-log-out"></i> 退出
                </a>
            </div>
        </li>
        {% else %}
        <li>
            <a href="{{url('user/login')}}" class="nav-link nav-link-lg">
                <div class="d-sm-none d-lg-inline-block">登录</div>
            </a>
        </li>
        {% endif %}
    </ul>
</nav>