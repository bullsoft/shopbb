<!DOCTYPE html>
<html lang="zh-CN">

{% include "layouts/head.volt" %}

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- 404 Error Text -->
                <div class="text-center" style="padding-top: 10%; padding-bottom: 10%;">
                    <div class="error mx-auto" data-text="404">404</div>
                    <p class="lead text-gray-800 mb-5">Page Not Found: {{notFoundUrl}}</p>
                    <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                    <a href="{{url('/index/')}}">&larr; Back to Dashboard</a>
                </div>
                
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {% include "layouts/footer.volt" %}
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    {% include "layouts/foot.volt" %}
</body>
</html>