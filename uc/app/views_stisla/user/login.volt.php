<?php $this->_macros['error_messages'] = function($__p = null) { if (isset($__p[0])) { $message = $__p[0]; } else { if (isset($__p["message"])) { $message = $__p["message"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'error_messages' was called without parameter: message");  } } if (isset($__p[1])) { $type = $__p[1]; } else { if (isset($__p["type"])) { $type = $__p["type"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'error_messages' was called without parameter: type");  } }  ?>
    <div class="alert alert-<?= $type ?> alert-dismissible fade show mt-1" role="alert">
        <?= $message ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div><?php }; $this->_macros['error_messages'] = \Closure::bind($this->_macros['error_messages'], $this); ?>
<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            轻量云用户中心
        </div>
        <?php if ($pageException) { ?>
            <?= $this->callMacro('error_messages', [$pageException->getMessage(), 'warning']) ?>
        <?php } ?>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Login</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required
                            autofocus value="<?= $this->request->getPost('email') ?>">
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