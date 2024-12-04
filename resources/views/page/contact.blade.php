@section('title')
    Liên Hệ
@endsection

@extends('index')

@section('content')
    <!-- Page Content -->
    <div class="container">

        @include('block.slide')

        <div class="space20"></div>

        <div class="row main-left">
            @include('block.menu')

            <div class="col-md-9">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
                    </div>

                    <div class="panel-body">
                        <!-- item -->
                        <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
                        
                        <div class="break"></div>
                        <h4><span class="glyphicon glyphicon-home"></span> Địa chỉ :</h4>
                        <p>149 Lý Thường Kiệt, Thành Phố Đồng Hới, Quảng Bình</p>

                        <h4><span class="glyphicon glyphicon-envelope"></span> Email :</h4>
                        <!-- Tạo liên kết tới địa chỉ email bằng mailto -->
                        <p><a href="mailto:clinh1749@gmail.com">clinh1749@gmail.com</a></p>

                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại :</h4>
                        <p>0123.245.679</p>

                        <br><br>
                
                        <div class="break"></div><br>

                        <!-- Thêm tên bản đồ -->
                        <h4><span class="glyphicon glyphicon-map-marker"></span> Bản Đồ :</h4>
                        
                        <!-- Google Maps Embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.168689227344!2d106.68708381485703!3d10.772697692322123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292925b4a3d1%3A0x3c93e3fd5a55f313!2s149%20L%C3%BD%20Th%C6%B0%E1%BB%9Dng%20Ki%E1%BB%87t%2C%20Th%C3%A0nh%20Ph%E1%BB%91%20%C4%90%E1%BB%93ng%20H%E1%BB%9Bi%2C%20Qu%E1%BA%A3ng%20B%C3%ACnh%2C%20Vi%E1%BB%87t%20Nam!5e0!3m2!1sen!2sus!4v1636737225407!5m2!1sen!2sus" 
                            width="600" 
                            height="450" 
                            frameborder="0" 
                            style="border:0" 
                            allowfullscreen 
                            loading="lazy">
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection