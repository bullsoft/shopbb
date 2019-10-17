<?php $this->_macros['error_messages'] = function($__p = null) { if (isset($__p[0])) { $message = $__p[0]; } else { if (isset($__p["message"])) { $message = $__p["message"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'error_messages' was called without parameter: message");  } } if (isset($__p[1])) { $type = $__p[1]; } else { if (isset($__p["type"])) { $type = $__p["type"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro 'error_messages' was called without parameter: type");  } }  ?>
    <div class="alert alert-<?= $type ?> alert-dismissible fade show mt-1" role="alert">
        <?= $message ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div><?php }; $this->_macros['error_messages'] = \Closure::bind($this->_macros['error_messages'], $this); ?>