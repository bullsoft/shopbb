<!DOCTYPE html>
<html lang="zh-CN">

{% include "layouts/head.volt" %}

<style>
    #lightcloud-client::before {
        border-bottom: 2px dashed #1CC88A;
        content: "";
        left: 25%;
        position: absolute;
        top: 50%;
        width: 50%;
    }
</style>

<body class="bg-gradient-primary">

    <div class="container">
        {% if pageException %}
        {{ error_messages(pageException.getMessage(), "warning") }}
        {% endif %}
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6" style="margin: 0 auto">
                            <div class="p-5">
                                <div class="text-center" style="line-height: 96px; height: 96px">
                                        <div class="mb-4 rounded-circle" style="line-height: 96px; background-color: #c4e0f7; height: 96px; width: 96px; float: left;">
                                            <img src="https://assets.phalconphp.com/phalcon/favicons/favicon-96x96.png" height="64px" />
                                        </div>
                                        <a href="#" class="btn btn-success btn-circle">
                                            <i class="fas fa-check" style="z-index:10;"></i>
                                        </a>
                                        <div  id="lightcloud-client" class="mb-4 rounded-circle" style="float: right; line-height: 96px; background-color: rgb(78, 115, 223); height: 96px; width: 96px;">
                                            <img src="/favicon.png" height="64px" />
                                        </div>
                                </div>
                            </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="text-center">
                                        <h2 class="h4 text-gray-900 mb-4">授权应用登录</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="margin: 0 auto 30px auto">
                                <div class="p-2">
                                    <div class="list-group m-2">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{clientName}}</h5>
                                            <small>{{username}}</small>
                                            </div>
                                            <small>请求访问您的个人数据</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">轻量云用户中心</h5>
                                            <small class="text-muted">BullSoft.org</small>
                                            </div>
                                            <ul>
                                                {% for scope in scopes %}
                                                <li>
                                                <small class="text-muted">{{scope}}</small>
                                                </li>
                                                {% endfor %}
                                            </ul>
                                        </a>
                                        
                                    </div>
                                    <form class="oauth" method="POST" action="" id="approve">
                                        <input type="hidden" name="approve" value="1" />
                                    </form>
                                    <a href="#" onclick="document.getElementById('approve').submit();" class="btn btn-google btn-block p-3">同意授权</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {% include "layouts/foot.volt" %}

</body>

</html>