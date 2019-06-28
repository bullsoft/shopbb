{% include "layouts/macros.volt" %}
<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            轻量云用户中心
        </div>
        {% if pageException %}
            {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}

        <div class="card card-primary">
            <div class="card-header">
                <h4>Login</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                            autofocus value="{{request.getPost('email')}}">
                        <div class="invalid-feedback">
                            Please fill in your email
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="d-block">Password
                            <div class="float-right">
                                <a href="/user/forgot-password">
                                    忘记密码？
                                </a>
                            </div>
                        </label>
                        <input id="password" type="password" class="form-control" name="passwd" tabindex="2" required />
                        <div class="invalid-feedback">
                            please fill in your password
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="line-height: 44px">
                            <div class="col-lg-7">
                                <input type="text" name="captcha" tabindex="3" class="form-control form-control-user" id="exampleInputCaptcha"
                                    placeholder="验证码" required />
                            </div>
                            <div class="col-lg-5">
                                <img src="/index/captcha" onClick="this.src='/index/captcha?rand='+Math.random();" style="cursor: pointer;" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="4"
                                id="remember-me" />
                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="/user/register">Create One</a>
        </div>
        <div class="simple-footer">
            
        </div>
    </div>
</div>