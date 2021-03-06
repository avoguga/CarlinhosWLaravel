<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DogMania</title>
        <style>

            .logo {
                width: 213px;
                height: 36px;
                margin: 15px auto;
            }

            .login-block {
                width: 320px;
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                border-top: 5px solid #ff656c;
                margin: 0 auto;
            }

            .login-block h1 {
                text-align: center;
                color: #000;
                font-size: 18px;
                text-transform: uppercase;
                margin-top: 0;
                margin-bottom: 20px;
            }
            .login-block input {
                width: 100%;
                height: 42px;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 20px;
                font-size: 14px;
                outline: none;
                text-align: center;
            }
            .login-block button {
                width: 80%;
                height: 40px;
                margin-left: 30px;
                background: #ff656c;
                border-radius: 5px;
                border: 1px solid #e15960;
                color: #fff;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 14px;
                outline: none;
                cursor: pointer;
            }
            .login-block button:hover {
                background: #ff7b81;
            }
            .register{
                width: 215px;
                height: 36px;
                margin: 70px auto;
            }
        </style>
    <body>
        <div class="logo"></div>
        <div class="login-block">
            <h1>Registro - DogMania</h1>
            <form action="{{route('cadastrar')}}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Nome" id="name" />
                <input type="text" name="surname" placeholder="Sobrenome" id="surname" />
                <input type="text" name="user" placeholder="Usuario" id="username" />
                <input type="email" name="email" placeholder="Email" id="email" />
                <input type="password" name="password" placeholder="Senha" id="password" />
                <button type="submit">Cadastrar</button>
                @if ($errors->any())
                <h3>Erro no cadastro!</h3>
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @endif
            </form>
        </div>
        <div class="register">
            <b>J?? ?? cadastrado?</b> <a href="{{url('/login')}}">Boas compras!</a>
        </div>
    </body>
</html>
