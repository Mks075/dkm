@include('Backend.Layouts.modal')
</div>
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('Backend/assets/bundles/libscripts.bundle.js') }}"></script>
<!-- Plugin Js-->
<script src="{{ asset('Backend/assets/plugin/parsleyjs/js/parsley.js') }}"></script>
{{-- <script src="{{ asset('Backend/assets/bundles/apexcharts.bundle.js') }}"></script> --}}

<!-- Jquery Page Js -->
{{-- <script src="{{ asset('Backend/js/template.js') }}"></script> --}}
{{-- <script src="{{ asset('Backend/js/hr.js') }}"></script> --}}
<script>
    $(document).ready(function () {
        $('#showImage').change(function (e) {
            var reader = URL.createObjectURL(e.target.files[0])
            $('#iMg').attr('src', reader)
        })
    })
</script>

</body>

</html>