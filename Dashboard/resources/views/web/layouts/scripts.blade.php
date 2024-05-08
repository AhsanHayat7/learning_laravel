<script src="{{url('web/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{url('web/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('web/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{url('web/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('web/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
<script src="{{url('web/js/front.js')}}"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{url('frontend/assets/js/main.js')}}"></script>
<script>
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

@if(session('success'))
    toastr.success("{{session('success')}}")
@elseif(session('error'))
    toastr.error("{{session('error')}}")
@endif
</script>
