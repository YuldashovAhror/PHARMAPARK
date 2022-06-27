<script src="{{ asset('/assets/libs/jquery/jquery.min.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
<script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>


@yield('script')
<script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>

{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        if ($value){
            $('#poisk').show();
        }else {
            $('#poisk').hide();
        }
        $.ajax({
            type : 'get',
            url : '/search',
            data:{'search':$value},
            success:function(data){
                console.log(data);
                $('#search1').html(data);
            }
        });
    });

    function t(e) {
        1 == a("#light-mode-switch").prop("checked") && "light-mode-switch" === e ? (a(".sun").css({"display": "none"}), a(".moon").fadeIn(), a(".uil-sun").addClass("uil-moon"), a(".uil-moon").removeClass("uil-sun"), a("html").removeAttr("dir"), a("#dark-mode-switch").prop("checked", !1), a("#rtl-mode-switch").prop("checked", !1), a("#dark-rtl-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "/assets/css/bootstrap.css"), a("#app-style").attr("href", "/assets/css/app.css"), sessionStorage.setItem("is_visited", "light-mode-switch")) :
            1 == a("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e ? (a(".moon").css({"display": "none"}), a(".sun").fadeIn(), a(".uil-moon").addClass("uil-sun"), a(".uil-sun").removeClass("uil-moon"), a("html").removeAttr("dir"), a("#light-mode-switch").prop("checked", !1), a("#rtl-mode-switch").prop("checked", !1), a("#dark-rtl-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "/assets/css/bootstrap-dark.css"), a("#app-style").attr("href", "/assets/css/app-dark.css"), sessionStorage.setItem("is_visited", "dark-mode-switch")) : 1 == a("#rtl-mode-switch").prop("checked") && "rtl-mode-switch" === e ? (a("#light-mode-switch").prop("checked", !1), a("#dark-mode-switch").prop("checked", !1), a("#dark-rtl-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "/assets/css/bootstrap-rtl.min.css"), a("#app-style").attr("href", "/assets/css/app-rtl.min.css"), a("html").attr("dir", "rtl"), sessionStorage.setItem("is_visited", "rtl-mode-switch")) : 1 == a("#dark-rtl-mode-switch").prop("checked") && "dark-rtl-mode-switch" === e && (a("#light-mode-switch").prop("checked", !1), a("#rtl-mode-switch").prop("checked", !1), a("#dark-mode-switch").prop("checked", !1), a("#bootstrap-style").attr("href", "/assets/css/bootstrap-dark-rtl.min.css"), a("#app-style").attr("href", "/assets/css/app-dark-rtl.min.css"), a("html").attr("dir", "rtl"), sessionStorage.setItem("is_visited", "dark-rtl-mode-switch"))
    }

</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

