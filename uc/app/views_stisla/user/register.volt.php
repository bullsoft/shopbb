<?php $this->_macros['error_messages'] = function($__p = null) { if (isset($__p[0])) { $message = $__p[0]; } else { if (isset($__p["message"])) { $message = $__p["message"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'error_messages' was called without parameter: message");  } } if (isset($__p[1])) { $type = $__p[1]; } else { if (isset($__p["type"])) { $type = $__p["type"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'error_messages' was called without parameter: type");  } }  ?>
    <div class="alert alert-<?= $type ?> alert-dismissible fade show mt-1" role="alert">
        <?= $message ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div><?php }; $this->_macros['error_messages'] = \Closure::bind($this->_macros['error_messages'], $this); ?>
<div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
            创建账号，终于盼到你
        </div>

        <?php if ($pageException) { ?>
            <?= $this->callMacro('error_messages', [$pageException->getMessage(), 'warning']) ?>
        <?php } ?>

        <?php if ($regStatus) { ?>
            <?= $this->callMacro('error_messages', ['注册成功，请查收邮件激活账号。', 'success']) ?>
        <?php } ?>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Register</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="frist_name">名字</label>
                            <input id="frist_name" type="text" class="form-control" name="firstName" autofocus required value="<?= $this->request->getPost('firstName') ?>" />
                        </div>
                        <div class="form-group col-6">
                            <label for="last_name">姓氏</label>
                            <input id="last_name" type="text" class="form-control" name="lastName" value="<?= $this->request->getPost('lastName') ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input id="email" type="email" class="form-control" name="email" required value="<?= $this->request->getPost('email') ?>" />
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