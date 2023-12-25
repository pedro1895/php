<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Church</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style> 
        header{
            height: 100px;
            border-bottom: 1px solid #c0c0c0;
            margin-bottom: 20px;  
            background: black;
            padding: 10px;
        }
        main{
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="row">
            <div class="col-md-4">
                <img src="https://filadelfiachurch.com.br/assets/filadelfia/images/logo.png" />
            </div>
            <div class="col-md-4">
                MENU
            </div>
            <div class="col-md-4">
                Carrinho
            </div>
        </div>
    </header>
    <main>
        @include('layouts.flash')
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>