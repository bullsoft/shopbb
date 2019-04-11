<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{headDesc}}">
    <meta name="author" content="布尔软件">
    <title>轻量云用户中心 - {{title}}</title>
    <!-- Custom fonts for this template-->
    <link href="{{static_url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{static_url('templates/'~tpl~'/yourcss/sb-admin-2.min.css')}}?ver={{ver}}" rel="stylesheet">
    <!-- Custom CSS -->
    {{__invoke__('Volt::yourCss', whichController, whichAction)}}
</head>
{%- macro error_messages(message, type) %}
    <div class="alert alert-{{type}} alert-dismissible fade show" role="alert">
        {{ message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
{%- endmacro %}