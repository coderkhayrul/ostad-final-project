<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/js/popper/popper.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap/bootstrap.min.js"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="{{ asset('frontend') }}/js/owl-carousel/owl-carousel.min.js"></script>
<script src="{{ asset('frontend') }}/js/slideshow/jquery.velocity.min.js"></script>
<script src="{{ asset('frontend') }}/js/slideshow/jquery.kenburnsy.js"></script>

<!-- Template Scripts (Do not remove)-->
<script src="{{ asset('frontend') }}/js/custom.js"></script>

@stack('frontend_scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 250
    });
</script>
</body>

</html>
