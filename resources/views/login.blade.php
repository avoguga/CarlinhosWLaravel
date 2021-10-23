<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DogMania</title>
        <style>
            body {
                background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
                background-size: cover;
                font-family: Montserrat;
            }

            .logo {
                width: 213px;
                height: 36px;
                background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;
                margin: 30px auto;
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
                box-sizing: border-box;
                border-radius: 5px;
                border: 1px solid #ccc;
                margin-bottom: 20px;
                font-size: 14px;
                font-family: Montserrat;
                padding: 0 20px 0 50px;
                outline: none;
            }

            .login-block input#username {
                background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
                background-size: 16px 80px;
            }

            .login-block input#username:focus {
                background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
                background-size: 16px 80px;
            }

            .login-block input#password {
                background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
                background-size: 16px 80px;
            }

            .login-block input#password:focus {
                background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
                background-size: 16px 80px;
            }

            .login-block input:active, .login-block input:focus {
                border: 1px solid #ff656c;
            }

            .login-block button {
                width: 100%;
                height: 40px;
                background: #ff656c;
                box-sizing: border-box;
                border-radius: 5px;
                border: 1px solid #e15960;
                color: #fff;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 14px;
                font-family: Montserrat;
                outline: none;
                cursor: pointer;
            }

            .login-block button:hover {
                background: #ff7b81;
            }

        </style>
    <body>
        <div class="logo"></div>
        <div class="login-block">
            <h1>Login - DogMania</h1>
            <input type="text" value="" placeholder="Usuario" id="username" />
            <input type="password" value="" placeholder="Senha" id="password" />
            <button>Entrar</button>
        </div>
    </body>
</html>
