<!--   Core JS Files   -->
<script src="{{ asset('js/core/popper.min.js') }}" defer></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}" defer></script>
<script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}" defer></script>
<script src="{{ asset('js/plugins/chartjs.min.js') }}" defer></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/material-dashboard.min.js?v=3.0.4') }}" defer></script>
