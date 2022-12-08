 <!-- Fonts -->
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
                 <a class="navbar-brand" style:"margin-left:35%" href="/"><img src="img/icon/logo.png" width="250" alt=""></a>
                 <h2 class="m-5">Zweryfikuj swój adres e-mail</h2>
                    Dziękujemy na rejestrację na naszej stronie. Aby zakończyć proces rejestracji aktywuj swoje konto po przed weryfikację adresu e-mail
                    By zweryfikować email kliknij w link poniżej:  </br></br>

                    <a class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 80%; margin-left: auto; margin-right: auto;" style="width: 50%" href="{{ route('user.verify', $token) }}" role="button">Weryfikuj e-mail</a>   
                
            </div>
        </div>
    </div>        
</body>
