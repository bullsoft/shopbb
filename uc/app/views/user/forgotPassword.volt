<!DOCTYPE html>
<html lang="zh-CN">

{% include "layouts/head.volt" %}

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">还有忘记密码这回事?</h1>
                                        <p class="mb-4">别担心、别焦虑、千万别内分泌失调，有招儿帮你重置密码！一会儿你去收封邮件，点击邮件里的链接，会引导你重置密码的！</p>
                                    </div>
                                    <form class="user" id="user-forgot-passwd">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <a href="#"  onclick="document.getElementById('user-forgot-passwd').submit();" class="btn btn-primary btn-user btn-block">
                                            重置密码
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register">创建账号!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login">别打扰我，我要登录!</a>
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