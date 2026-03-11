<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Reciclagem</title>
    <style>

        body{
            margin:0;
            background-color: #D7F2D6;
        }

        .navbar{
            background-color:white;
            display:flex;
            justify-content:center;
            padding:45px 0;
            margin-top:35px;
            position: relative;
        }

        .container{
            width:100%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 40px;
        }

        .logo{
            position: absolute;
            left: 40px;
            top: 50%;
            transform: translateY(-50%);
        }

        .logo img{
            width: 180px;
            height: auto;
            display: block;
        }

        .menu{
            display:flex;
            gap:40px;
            margin-left: 900px;
        }

        .menu a{
            text-decoration:none;
            color:black;
            font-weight:bold;
        }

        .search input{
            padding:10px 15px;
            border-radius:20px;
            border:1px solid #d5d5d5;
            background: #f5f5f5;
            outline:none;
            transition:all 0.2s ease;
        }


    </style>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar">

        <div class="container">

            <div class="logo">
                <img src="/images/logo.jpg" alt="EcoVille">
            </div>

            <div class="menu">

                <a href="{{ url('/Locais') }}">LOCAIS</a>
                <a href="{{ url('/Denuncias') }}">DENUNCIE</a>
                <a href="{{ url('/Materias') }}">MATERIAIS</a>
                <a href="{{ url('/Informacoes') }}">INFORMAÇÕES</a>

            </div>

            <div class="search">

                <input type="text" placeholder="Buscar">

            </div>

        </div>

    </nav>


    <main class="content">

        @yield('content')

    </main>

</body>
</html>