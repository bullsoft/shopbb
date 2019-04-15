{% include "layouts/macros.volt" %}
<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-lg-md d-flex">
        <div class="col px-0">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="display-3  text-white">{{proj.title}}
                <span></span>
              </h1>
              <p class="lead  text-white">{{proj.desc}}</p>
              <div class="btn-wrapper">
                <a href="#" class="btn btn-wechat btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-default-1">
                  <span class="btn-inner--icon"><i class="fa fa-wechat"></i></span>
                  <span class="btn-inner--text">捐助该项目</span>
                </a>
                <a href="{{proj.repoUrl}}" class="btn btn-white btn-icon btn-github mb-3 mb-sm-0">
                  <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                  <span class="btn-inner--text">Github Repo</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <!-- 1st Hero Variation -->
  </div>
  <section class="section section-lg pt-lg-0 mt--200">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="row row-grid">
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                  <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                    <i class="ni ni-check-bold"></i>
                  </div>
                  <h6 class="text-primary text-uppercase">Download Argon</h6>
                  <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                  <div>
                    <span class="badge badge-pill badge-primary">design</span>
                    <span class="badge badge-pill badge-primary">system</span>
                    <span class="badge badge-pill badge-primary">creative</span>
                  </div>
                  <a href="#" class="btn btn-primary mt-4">Learn more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                  <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                    <i class="ni ni-istanbul"></i>
                  </div>
                  <h6 class="text-success text-uppercase">Build Something</h6>
                  <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                  <div>
                    <span class="badge badge-pill badge-success">business</span>
                    <span class="badge badge-pill badge-success">vision</span>
                    <span class="badge badge-pill badge-success">success</span>
                  </div>
                  <a href="#" class="btn btn-success mt-4">Learn more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                  <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                    <i class="ni ni-planet"></i>
                  </div>
                  <h6 class="text-warning text-uppercase">Prepare Launch</h6>
                  <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                  <div>
                    <span class="badge badge-pill badge-warning">marketing</span>
                    <span class="badge badge-pill badge-warning">product</span>
                    <span class="badge badge-pill badge-warning">launch</span>
                  </div>
                  <a href="#" class="btn btn-warning mt-4">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
{{msg_modal(1, '微信支付', '<p style="text-align: center;"><img width="80%" src="https://static.bullsoft.org/payme_wechat.jpeg" /></p>')}}