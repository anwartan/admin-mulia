<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/feather-icons/feather-icons.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/plugins/lord-icon-2.1.0.min.js') }}"></script>
<script>
    if (
        document.querySelectorAll("[toast-list]") ||
        document.querySelectorAll("[data-choices]") ||
        document.querySelectorAll("[data-provider]")
    ) {
        document.writeln(
                `<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'>
</script>`
);
document.writeln(
`
<script type='text/javascript' src='{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}'></script>`
);
document.writeln(
`
<script type='text/javascript' src='{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}'></script>`
);
}
</script>
@yield('script')
@yield('script-bottom')
