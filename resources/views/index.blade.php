<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <base href="{{ asset('') }}">
    <link rel="stylesheet" type="text/css" href="admin_asset/dist/css/style.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67444e882480f5b4f5a38864/1idhd5i1k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<body>
    

    @include('block.header')

    @yield('content')
    
    @include('block.footer')
    
    <div style="text-align: left;" id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-login">

            <!-- Modal content-->
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Đăng nhập</h4></div>
                <div class="panel-body">

                    <form action="dang-nhap" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <label>Email</label>
                            <input type="email" class="form-control input" placeholder="Địa Chỉ Email" name="email" 
                            >
                        </div>
                        <br>    
                        <div>
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Mật Khẩu" name="password">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Đăng nhập
                            </button>    
                        </div>
                        <div class="form-group" style="margin-bottom: 3em;">
                            <a href="">Quên Mật Khẩu?</a>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
