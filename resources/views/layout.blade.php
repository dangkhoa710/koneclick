<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>K-ONE Click - Đi cảnh thời gian rảnh </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/favicon.ico')}}">

    <!-- Stylesheet -->
    @if($doitheme=="1")
        <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    @elseif($doitheme=="2")
        <link rel="stylesheet" href="{{asset('frontend/style2.css')}}">
    @endif
    <style type="text/css">
        .seo_content {
            text-overflow: ellipsis;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            display: -webkit-box;
        }

        .hiencmt {
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
    <script src="jquey.js"></script>
    <script>
        var acc = document.getElementsByClassName("thugon");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        function checkPasswordMatch() {
            var password = $("#password").val();
            var confirmPassword = $("#repassword").val();

            if (password != confirmPassword)
                $("#divCheckPasswordMatch").html("Mật khẩu không khớp");
            else
                $("#divCheckPasswordMatch").html("Mật khẩu khớp");
        }
    </script>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

</head>

<body>
<!-- Preloader -->

@include("elements.menu")

<section class="vizew-post-area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8">
                @yield('content')
            </div>
            @include("elements.sliderbarleft")
        </div>
    </div>
</section>

@include("elements.footer")

<script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('frontend/js/active.js')}}"></script>
<script type="text/javascript">
    $('.js-quantityCheckBox').on('click', function (e) {
        let mode = $(this).prop("checked") == true ? 1 : 2;
         $.ajax({
            url: '{{ route('doigiaodien') }}',
            type: 'post',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',
                theme: mode,
            },
            success: function (res) {

            },
             error: function (err) {
                 window.location.reload();
             }
        });

    });
</script>
</body>

</html>
