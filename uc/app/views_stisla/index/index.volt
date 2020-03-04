<div class="jumbotron">
    <h1 class="profile-title text-left display-5">Hi, {{user.nickname}}</h1>
    <hr class="my-4" />
    <p class="lead"></p>

    <div class="row mt-4">

        <div class="col-12 col-sm-7 col-lg-7">
                <h5 class="text-on-back">首席架构师</h5>
                <p class="profile-description">
                    我的志愿是做一个校长，每天收集了学生的学费之后就去吃火锅，今天吃麻辣火锅，明天吃酸菜鱼火锅，后天吃猪骨头火锅…… 吃吃火锅遛遛弯儿，漫步中聊人生、谈未来、抒壮志，上下求索寻找人生的真谛！
                </p>
                <div class="btn-wrapper profile pt-3">
                    <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-twitter btn-round"
                        data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-weibo"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/creativetim"
                        class="btn btn-icon btn-facebook btn-round" data-toggle="tooltip" data-original-title="Like us">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-dribbble  btn-round"
                        data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
        </div>

        <div class="col-12 col-sm-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4>您的个人信息</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                aria-controls="home" aria-selected="true">注册信息</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                aria-controls="profile" aria-selected="false">客户端信息</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <div id="lg-flush" data-tab-group="list-group" class="active">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">邮箱：{{user.email}}</li>
                                    <li class="list-group-item">状态：{{user.status}}</li>
                                    <li class="list-group-item">注册时间：{{user.regTime}}</li>
                                    <li class="list-group-item">验证邮箱：{{user.isEmailVerified}}</li>
                                    <li class="list-group-item">更新时间：{{user.mtime.format("Ymd H:i:s")}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                            Sed sed metus vel la
                        </div>
                        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                            Vestibulum imperdiet
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>