<!DOCTYPE html>
<html lang="zh-CN">

{% include "layouts/head.volt" %}

<body class="bg-gradient-primary">

    <div class="container">
        {% if pageException %}
            {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}
        {% if regStatus %}
        <div class="card mt-3 py-1 border-left-success">
            <div class="card-body text-center">
                注册成功，请稍后查收邮件({{email}})激活账号，前往<a href="{{url('')}}">首页</a> ...
            </div>
        </div>
        {% endif %}
        <div class="card o-hidden border-0 shadow-lg my-5">
                
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">创建账号，终于盼到你</h1>
                            </div>
                            <form class="user" id="user-reg" method="POST" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="请输入您的名" name="firstName" value="{{request.getPost('firstName')}}" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="请输入您的姓" name="lastName" value="{{request.getPost('lastName')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email"  value="{{request.getPost('email')}}" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="passwd" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="passwd1" />
                                    </div>
                                </div>
                                <a href="#"  onclick="document.getElementById('user-reg').submit();" class="btn btn-primary btn-user btn-block">
                                    注册账号
                                </a>
                                <hr>
                                <a href="#"  onClick="javascript: alert('暂不支持谷歌注册')" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#"   onClick="javascript: alert('暂不支持脸书注册')" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">忘记密码?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">别打扰我，我要登录!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {% include "layouts/foot.volt" %}

</body>

</html>