<?php
$siteConf = [
    // Default
    "headDesc"     => "这是网站描述",
    "headKeywords" => "这是网站关键词",
    "template"     =>  "default",
    "titles" => [
        // IndexController
        "index" => [
            "index" => "欢迎访问轻量云",
        ],
        // UserController
        "user" => [
            "login" => "欢迎回来",
            "register" => "欢迎入住",
            "forgotPassword" => "还有忘记密码这回事?",
            "resetPassword" => "重置密码",
        ]
    ],
];

return $siteConf;
