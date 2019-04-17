<!DOCTYPE html>
<html lang="zh-CN">

{% include "layouts/head.volt" %}

<body class="bg-gradient-primary">

    <div class="container">
        {% if pageException %}
            {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                
                <div class="card o-hidden border-0 shadow-lg my-5">    
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">欢 迎 回 来 !</h1>
                                    </div>
                                    <form class="user" method="POST" action="" id="user-login">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username..." value="{{request.getPost('username')}}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passwd" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row" style="line-height: 44px">
                                                <div class="col-lg-6">
                                                    <input type="password" name="passwd" class="form-control form-control-user" id="exampleInputCaptcha"
                                                        placeholder="验证码">
                                                </div>
                                                <div class="col-lg-5">
                                                    <img src="/index/captcha" onClick="this.src='/index/captcha?rand='+Math.random();" style="cursor: pointer;" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary btn-user btn-block" onclick="document.getElementById('user-login').submit();">
                                            登 录
                                        </a>
                                        <hr>
                                        <a href="#" onClick="javascript: alert('暂不支持谷歌登录')" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" onClick="javascript: alert('暂不支持脸书登录')" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">忘记密码?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">创建账号!</a>
                                    </div>
                                </div>
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