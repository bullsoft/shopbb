<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
          <img src="/assets/img/brand/white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="/index.html">
                  <img src="/assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
                  <a href="{{url('/')}}" class="nav-link" role="button">
                      首 页
                  </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">开源项目</span>
              </a>
              <div class="dropdown-menu">
                {% for name, item in projects %}
                  <a href="{{url('project/')}}?name={{name}}" class="dropdown-item">{{item.title}}</a>
                {% endfor %}
              </div>
            </li>
            <li class="nav-item">
                <a href="{{url('project/biz')}}" class="nav-link" role="button">
                    商业项目
                </a>
          </li>
            <li class="nav-item">
                    <a href="#" class="nav-link" role="button">
                        团队成员
                    </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" role="button">
                    关于我们
                </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="微信关注我们">
                <i class="fa fa-wechat"></i>
                <span class="nav-link-inner--text d-lg-none">微 信</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://github.com/bullsoft" target="_blank" data-toggle="tooltip" title="Github上关注我们">
                <i class="fa fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>