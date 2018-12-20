<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/imageTreatment.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>        

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
                margin-top: calc(-45px * 2);
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
            .panel-item{
                margin: 10px 0px;
                display: flex;
            }
        </style>
    </head>
    <body>
        <div class='home-panel' style='width: 100%;'>
            <div class='page-title'> Bem vindo </div>
            <div class='panel-item'>
                <a href='/list' class='panel-link'> 
                    <img style='width: 20px; height: 20px;' src='{{asset("img/site/icon-list.svg")}}'>
                    <span> Lista </span>
                </a>
            </div>
            <div class='panel-item'>
                <button type="button" class="btn btn-danger">Forms</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a href='/forms/add' class="dropdown-item" href="#">Add</a>
                    <a href='/blade' class="dropdown-item" href="#">Blade</a>
                    <!-- <div class="dropdown-divider"></div> -->
                </div>
            </div>
        <div>
    </body>
</html>
