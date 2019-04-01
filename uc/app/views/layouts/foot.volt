<!-- Bootstrap core JavaScript-->
<script src="{{ static_url('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ static_url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ static_url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{static_url('templates/'~tpl~'/yourjs/sb-admin-2.min.js')}}?ver={{ver}}"></script>
{{__invoke__('Volt::yourJs', whichController, whichAction)}}