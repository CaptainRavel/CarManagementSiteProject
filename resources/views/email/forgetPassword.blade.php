
  
<head>
 <link href="/css/main.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/all.css" rel="stylesheet">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/87cc08ad60.js" crossorigin="anonymous"></script>
    <!--favicon-->
    <link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">

    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
</head>
<body style="background-color:#252525">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 text-center text-white ">
                 <a class="navbar-brand" style:"margin-left:35%" href="/"><img src="{{ URL::to('/img/icon/logo.png') }}" width="250" alt=""></a>
                 <h2 class="m-5">Zresetuj swoje hasło</h2>
                    Możesz zresetować swoje hasło klikając w poniższy link: </br></br>

                     <a class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 80%; margin-left: auto; margin-right: auto;" style="width: 50%" href="{{ route('reset.password.get', $token) }}" role="button">Resetuj hasło</a></br>   

                    Jeżeli to nie ty próbujesz zresetować hasło do swojego konta zignoruj tą wiadomość
            </div>
        </div>
    </div>        
</body>
