<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>K-ONE Click - Đi cảnh thời gian rảnh  </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('public/frontend/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/frontend/style.css')}}">
    <style type="text/css">
        .seo_content{
            text-overflow: ellipsis;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    display: -webkit-box;
            }
        .hiencmt{
            overflow:hidden;
             transition: max-height 0.2s ease-out;
            }
    </style>
    <script src="jquey.js"></script>
    <script>
var acc = document.getElementsByClassName("thugon");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
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
<script >
    function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#repassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Mật khẩu không khớp");
    else
        $("#divCheckPasswordMatch").html("Mật khẩu khớp");
}
</script>
<script>
function doimau() {
$('link[href="{{asset('public/frontend/style.css')}}"]').attr('href',"{{asset('public/frontend/style2.css')}}");
}

</script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <button onclick="doimau()">doi</button><br />
    <!-- ##### Header Area Start ##### -->
    @include("elements.menu")
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->

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
    <!-- ##### Vizew Psot Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include("elements.footer")
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('public/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('public/frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('public/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('public/frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('public/frontend/js/active.js')}}"></script>
</body>

</html>