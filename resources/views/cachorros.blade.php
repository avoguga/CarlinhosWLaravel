<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #layout{
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: 100px auto;
        grid-template-areas:
        'MH'
        'CT';

        height: 100vh;
    }

    #mainHeader{
        grid-area: MH;
        background-color: #ff656c;
        display: flex;
        justify-content: space-around;
    }

    #mainHeader h3{
        margin-top: 40px;
    }
    

    .header-links{
        color: #000;
        text-decoration: none;
    }

    #content{
        grid-area: CT;
    }

    </style>
</head>
<body>
    <div id="layout">
        <div id="mainHeader">
            <div>
                <h1>DogMania</h1>
            </div>
            <h3><a class="header-links" href="{{url('/')}}">Home</a></h3>
            <h3><a class="header-links" href="{{url('/produtos')}}">Produtos</a></h3>
            <h3><a class="header-links" href="{{url('/about')}}">Quem Somos</a></h3>
            <h3><a class="header-links" href="{{url('/contatos')}}">Contato</a></h3>
            <h3><a class="header-links" href="{{url('/login')}}">Entrar</a></h3>
        </div>
        <div id="content">
            <img class="dog" src="{{ url('fotos/dog2.png') }}"/>
        </div>
    </div>
</body>
</html>