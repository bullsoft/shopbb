{% include "layouts/macros.volt" %}

<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            忘记密码
        </div>
        {% if pageException %}
            {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}
        {% if resetPasswdStatus %}
            {{ error_messages("提交成功，请查收邮件并重置。", "success") }}
        {% endif %}
        <div class="card card-primary">
            <div class="card-header">
                <h4>Forgot Password</h4>
            </div>

            <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                            autofocus value="{{request.getPost('email')}}" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                            Forgot Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="simple-footer">
        </div>
    </div>
</div>