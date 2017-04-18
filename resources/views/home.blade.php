<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <title>Swapbook</title>

    
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="col-md-4lapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#">Swapbook</a>
            <div class="col-md-4lapse navbar-col-md-4lapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">มาแลกหนังสือกันเถอะ</h1>
            <p class="lead">เรามีหนังสือมากมายที่อยากจะแลกกัน ลองนึกดูสิจะดีแค่ไหนถ้าเราเอาหนังสือส่งต่อกับเพื่อนๆ แนะนำให้เพื่อนใหม่ที่รักการอ่านเหมือนคุณ</p>
            <a href="#" class="btn btn-primary btn-lg">สมัครสมาชิกเลย</a>
        </header>
        <!-- Page Features -->
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book1.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">เทคนิค อ่านไม่ลืม</h2>
                    <p class="card-text text-left">คุณหมดจิตแพทย์มาเปิดเผยเทคนิคที่ทำให้คุณอ่านหนังสือแล้วไม่ลืม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book2.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">แค่เราปรับ คนอื่นก็เปลี่ยน</h2>
                    <p class="card-text text-left">หนังสือที่แนะนำว่าคุณจะปรับตัวอย่างไรให้เข้ากับสังคม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book3.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">นิทานอีสัส</h2>
                    <p class="card-text text-left">จ่าพิชิต กับหนังสือที่เอาเรื่องนิทานต่างๆผสมกับการสอนเรื่องราวที่เปิดเผยความจริง</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            
        </div>
        <!-- /.card-deck -->
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book1.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">เทคนิค อ่านไม่ลืม</h2>
                    <p class="card-text text-left">คุณหมดจิตแพทย์มาเปิดเผยเทคนิคที่ทำให้คุณอ่านหนังสือแล้วไม่ลืม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book2.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">แค่เราปรับ คนอื่นก็เปลี่ยน</h2>
                    <p class="card-text text-left">หนังสือที่แนะนำว่าคุณจะปรับตัวอย่างไรให้เข้ากับสังคม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book3.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">นิทานอีสัส</h2>
                    <p class="card-text text-left">จ่าพิชิต กับหนังสือที่เอาเรื่องนิทานต่างๆผสมกับการสอนเรื่องราวที่เปิดเผยความจริง</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            
        </div>
        <!-- /.card-deck -->
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book1.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">เทคนิค อ่านไม่ลืม</h2>
                    <p class="card-text text-left">คุณหมดจิตแพทย์มาเปิดเผยเทคนิคที่ทำให้คุณอ่านหนังสือแล้วไม่ลืม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book2.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">แค่เราปรับ คนอื่นก็เปลี่ยน</h2>
                    <p class="card-text text-left">หนังสือที่แนะนำว่าคุณจะปรับตัวอย่างไรให้เข้ากับสังคม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book3.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">นิทานอีสัส</h2>
                    <p class="card-text text-left">จ่าพิชิต กับหนังสือที่เอาเรื่องนิทานต่างๆผสมกับการสอนเรื่องราวที่เปิดเผยความจริง</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            
        </div>
        <!-- /.card-deck -->
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book1.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">เทคนิค อ่านไม่ลืม</h2>
                    <p class="card-text text-left">คุณหมดจิตแพทย์มาเปิดเผยเทคนิคที่ทำให้คุณอ่านหนังสือแล้วไม่ลืม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book2.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">แค่เราปรับ คนอื่นก็เปลี่ยน</h2>
                    <p class="card-text text-left">หนังสือที่แนะนำว่าคุณจะปรับตัวอย่างไรให้เข้ากับสังคม</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('images/book3.jpg')}}" alt="">
                <div class="card-block">
                    <h2 class="card-title">นิทานอีสัส</h2>
                    <p class="card-text text-left">จ่าพิชิต กับหนังสือที่เอาเรื่องนิทานต่างๆผสมกับการสอนเรื่องราวที่เปิดเผยความจริง</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">เจ้าของ: &nbsp;<a href="#">Karun Jaraslertsuwan</a></li>
                </ul>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Swap book</a>
                </div>
            </div>
            
        </div>
        <!-- /.card-deck -->

        
    </div>
    <!-- /.container -->

    
     

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Swapbook 2017</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- JS -->
    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
