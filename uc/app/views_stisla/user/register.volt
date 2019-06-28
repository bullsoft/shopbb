{% include "layouts/macros.volt" %}
<div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
            创建账号，终于盼到你
        </div>

        {% if pageException %}
            {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}

        {% if regStatus %}
            {{ error_messages("注册成功，请查收邮件激活账号。", "success") }}
        {% endif %}

        <div class="card card-primary">
            <div class="card-header">
                <h4>Register</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="frist_name">名字</label>
                            <input id="frist_name" type="text" class="form-control" name="firstName" autofocus required value="{{request.getPost('firstName')}}" />
                        </div>
                        <div class="form-group col-6">
                            <label for="last_name">姓氏</label>
                            <input id="last_name" type="text" class="form-control" name="lastName" value="{{request.getPost('lastName')}}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input id="email" type="email" class="form-control" name="email" required value="{{request.getPost('email')}}" />
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password" class="d-block">密码</label>
                            <input id="password" type="password" class="form-control" name="passwd" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="password2" class="d-block">确认密码</label>
                            <input id="password2" type="password" class="form-control" name="passwd1" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="agree" required />
                            <label class="custom-control-label" for="agree">I agree with the terms and
                                conditions</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            注册
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 text-muted text-center">
            <a class="small" href="/user/login">别拦着我，我要登录!</a>
        </div>
        <div class="simple-footer">   
        </div>
    </div>
</div>