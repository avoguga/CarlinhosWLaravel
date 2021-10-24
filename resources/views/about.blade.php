<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DogMania - Quem Somos</title>
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
        .texto{
            margin-left: 70px;
        }
        .dogmania{
            margin-left: 500px;
        }
        .dog{
            margin-left: 100px;
            width: 300px;
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
            <h3><a class="header-links" href="{{url('/')}}">Produtos</a></h3>
            <h3><a class="header-links" href="{{url('/about')}}">Quem Somos</a></h3>
            <h3><a class="header-links" href="{{url('/contatos')}}">Contato</a></h3>
            <h3><a class="header-links" href="{{url('/login')}}">Entrar</a></h3>
        </div>
        <div id="content">
            <div class="dogmania">
                <h1>DogMania - Manias de animais!</h1>
                <img class="dog" src="{{ url('fotos/dog.png') }}"/>
            </div>
            <div class="texto">
                <p>
                    Sabemos que cada laço é único. Fonte de alegria, evolução, bem-estar. Temos experiência e oferecemos espaços, produtos e serviços – e tudo mais que for preciso – para que a relação entre pets e suas famílias seja melhor a cada dia. Essa é nossa razão de ser.
                </p>
                <p>
                    Somos apaixonados por pets! Essa não é apenas uma expressão inserida em nossa missão como empresa, mas uma realidade vivenciada todos os dias em nossas atitudes, nas lojas e em todos os nossos pontos de contato.
                </p>
                <p>
                    Trabalhamos para que você e seus pets tenham a melhor experiência em nossas lojas, seja através dos serviços de estética e veterinária ou pela variedade de produtos espalhados nos mais diversos mundos: cães, gatos, peixes, aves, roedores, répteis. Ah, mantemos nossas orelhas em pé para saber das novidades do mundo pet e levá-las até você.
                </p>
                <p>
                    Conveniência é com a gente! Tudo é preparado e organizado para você encontrar facilmente o que procura, e o melhor: a qualquer hora e no lugar que preferir.
                </p>
                <p>
                    Sabemos que cuidar de nossos bichinhos é um prazer: selecionar a melhor ração, buscar mimos novos, levá-los para um banho. O que importa é ver que eles estão bem.
                </p>
                <p>
                    Muitas vezes, sabemos que seu tempo é curto, mas queremos que você aproveite cada segundo que passar conosco! Para isso, a gente trata todos os pets com muita dedicação e respeito e trabalha a todo instante para que nossas lojas, produtos e serviços estejam à altura de tanto amor e cuidado.
                </p>
                <p>
                    Convidamos você a dar um passeio em nossas lojas, se divertir, trocar ideias, histórias, sentimentos, criar laços, sorrir com a gente. Isso é o que fazemos, e esse é o nosso jeito.
                </p>

                <p>
                    Somos a <b>DogMania</b>, seu petshop de estimação!
                </p>

                <p>
                    <b>Nossa Missão:</b> Criar valor na interação com os apaixonados por animais de estimação, potencializando o bem da relação entre o pet e sua família.
                </p>

                <p> Valores:<b></b></p>

                    <ul>1. Somos apaixonados por pets;</ul>
                    <ul>2. Respeitamos uns aos outros;</ul>
                    <ul>3. Reconhecemos esforços, premiamos resultados;</ul>
                    <ul>4. Encantamos nossos clientes;</ul>
                    <ul>5. Temos prazer em servir.</ul>
                    <ul>Praticamos os 5 valores todos os dias.</ul>

                    
            </div>
        </div>
    </div>
</body>
</html>