{% include "layouts/macros.volt" %}
<div class="position-relative">
    <section class="section section-lg section-hero section-shaped">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
            <span class="span-150"></span>
            <span class="span-50"></span>
            <span class="span-50"></span>
            <span class="span-75"></span>
            <span class="span-100"></span>
            <span class="span-75"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
        </div>
        <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <img src="/assets/img/brand/white.png" style="width: 200px;" class="img-fluid">
                        <p class="lead text-white">互联网+，科技为万物赋能。<br />布尔软件不忘初心，致力于成为您身边的软件专家</p>

                        <div class="btn-wrapper mt-5">
                            <a href="#" class="btn btn-lg btn-wechat btn-icon mb-3 mb-sm-0" data-toggle="modal"
                                data-target="#modal-default-1">
                                <span class="btn-inner--icon"><i class="fa fa-wechat"></i></span>
                                <span class="btn-inner--text">通过微信
                                    <span class="text-warning">赞助我们</span></span>
                            </a>
                            <a href="#" class="btn btn-lg btn-alipay btn-icon mb-3 mb-sm-0" data-toggle="modal"
                                data-target="#modal-default-2">
                                <span class="btn-inner--icon"><i class="fa fa-cny"></i></span>
                                <span class="btn-inner--text">通过支付宝
                                    <span class="text-warning">赞助我们</span></span>
                            </a>
                        </div>
                        <div class="mt-5">
                            <small class="text-white font-weight-bold mb-0 mr-2">Proudly made by <a
                                    href="http://guweigang.com" target="_blank">洋沙居士</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

    <section class="section section-components pb-0" id="section-components">
        <div class="container">
            <h2>We build softwares with:</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    {% for key, item in depends%}
                    {% if (loop.index-1) % 3 == 0 %}
                    <div class="row row-grid">
                    {% endif %}    
                        <div class="col-lg-4">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div style="text-align: center; line-height: 120px; background-color: {{item.backgroudColor}}">
                                            <img src="{{item.logoUrl}}" height="80px" />
                                        </div>
                                        <h6 class="text-primary text-uppercase">{{item.title}}</h6>
                                        <p class="description mt-3" style="height: 120px">
                                            {{item.desc}}
                                        </p>
                                        <div>
                                            {% for tag in item.tags %}
                                            <span class="badge badge-pill badge-primary">{{tag}}</span>
                                            {% endfor %}
                                        </div>
                                        <a href="{{item.website}}" target="_blank" class="btn btn-primary mt-4">点击进入官网</a>
                                    </div>
                                </div>
                        </div>
                    {% if (loop.index-1) % 3 == 2 %}       
                    </div>
                    {% endif %}
                    {% endfor %} 
                </div>
            </div>
        </div>
    </section>

<p>&nbsp;</p>

</div>

{{msg_modal(1, '微信赞助我们', '<p style="text-align: center;"><img width="80%" src="https://static.bullsoft.org/payme_wechat.jpeg" /></p>')}}
{{msg_modal(2, '支付宝赞助我们', '<p style="text-align: center;"><img width="60%" src="https://static.bullsoft.org/payme_alipay.png" /></p>')}}