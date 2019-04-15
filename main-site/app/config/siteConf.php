<?php
$siteConf = [
    // Default
    "headDesc"     => "这是网站描述",
    "headKeywords" => "这是网站关键词",
    "template"     =>  "default",
    "titles" => [
        // IndexController
        "index" => [
            "index" => "轻量云-首页",
        ],
        // UserController
        "user" => [
            "webLogin" => "用户登录",
        ]
    ],

    // <a href="#" class="dropdown-item">Phalcon+框架</a>
    // <a href="#" class="dropdown-item">PHPython: 打通PHP和Python的利器</a>
    // <a href="#" class="dropdown-item">PHP-MySQL Binlog接收器</a>
    // <a href="#" class="dropdown-item">PNI: PHP Native Interface</a>
    // <a href="#" class="dropdown-item">CentCMS: Headless CMS系统</a>
    // <a href="#" class="dropdown-item">UserCenter: 集成OAuth2的用户中心</a>
    // <a href="#" class="dropdown-item">Yar4J: Yar协议的JAVA实现</a>
    
    "projects" => [
        "php-pinyin" => [
            "title"     => "PHP汉字转拼音扩展",
            "desc"      => "PHP-C扩展，汉字转拼音，支持多音字、词组等，支持批量转换，支持词典编辑和重新生成。",
            "repoUrl"   => "https://github.com/bullsoft/php-pinyin",
            "paperPath" => ""
        ],
        "phalconplus" => [
            "title"     => "Phalcon+：C扩展框架",
            "desc"      => "Phalcon也作falcon，意为猎鹰，一种猛禽，飞得快，飞得高，飞得好，她是对PHP框架的新尝试。Phalcon+是一个基于Phalcon的工具集，正是因为Phalcon的灵活性和模块间的低耦合性才让我有这个机会去包装她、修饰她、甚至改变她。",
            "repoUrl"   => "https://github.com/bullsoft/phalconplus",
            "paperPath" => ""
        ],
        "php-python" => [
            "title"     => "PHPython: 打通PHP和Python的利器",
            "desc"      => "Python是近年来最流行的脚本语言，同时受到学术界和产业界的喜爱。世界各大厂的大力支持，以及完善的开源生态和包管理使得Python是一个巨大的宝藏，与其感叹PHP在衰落，不如让PHP拥抱Python的强大。Web不死，PHP不灭！！！",
            "repoUrl"   => "https://github.com/bullsoft/PHPython",
            "paperPath" => ""
        ],
        "php-binlog" => [
            "title"     => "PHP-MySQL Binlog接收器",
            "desc"      => "让PHP也能接收MySQL的二进制流日志，这可是来自MySQL数据变更的事件驱动，让应用能第一时间获得通知。",
            "repoUrl"   => "https://github.com/bullsoft/php-binlog",
            "paperPath" => ""
        ]
    ]
];

return $siteConf;
