<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ asset('js/imageTreatment.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .home-panel{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .home-panel .page-title{
                margin-top: -45px;
                margin-bottom: 15px;
            }
            .panel-link{
                display: flex;
                justify-content: flex-start;
                align-items: center;
                
                padding: 5px 6px;
                border: outset 2px ;
                color: rgb(220,220,220);
                transition: all 0.5s ease;
                border-radius: 15px;
            }
            .panel-link:hover{
                color: rgb(190,190,255);
                padding: 3px 4px;
                border: outset 4px ;
                transition: all 0.5s ease;
                border-radius: 0px;
            }
            .panel-link > span{
                margin-left: 5px;
                text-decoration: none;
                color: black;
            }
            a.panel-link{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class='home-panel' style='width: 100%;'>
            <div class='page-title'> Bem vindo </div>
            <a href='/list' class='panel-link'> 
                <img style='width: 20px; height: 20px;' src='{{asset("img/site/icon-list.svg")}}'>
                <span> Lista </span>
            </a>
        <div>
    </body>
</html>
