{% include "layouts/macros.volt" %}
<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            重置密码
        </div>
        {% if pageException %}
            {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}
        {% if resetPasswdStatus %}
            {{ error_messages("提交成功，请查收邮件并重置。", "success") }}
        {% endif %}
        <div class="card card-primary">
            <div class="card-header">
                <h4>Reset Password</h4>
            </div>

            <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                            autofocus value="{{email}}" disabled />
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control pwstrength"
                            data-indicator="pwindicator" name="passwd" tabindex="2" required>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="passwd1"
                            tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="changePasswd" value="{{request.getQuery('changePassword', 'int', 0)}}" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="simple-footer">
        </div>
    </div>
</div>