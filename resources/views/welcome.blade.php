<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html,
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: "Nunito", sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: 0.1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body class="bg-gray-400 font-sans">
        <div class="bg-white">
            <div class="container flex mx-auto items-center py-3">
                <nav class="w-2/5">
                    <a href="#" class="top-nav"><i class="fa fa-home fa-lg"></i> Home</a>
                    <a href="#" class="top-nav"><i class="fa fa-bolt fa-lg "></i> Moments</a>
                    <a href="#" class="top-nav"><i class="fa fa-bell fa-lg "></i> Notifications</a>
                    <a href="#" class="top-nav"><i class="fa fa-envelope fa-lg "></i> Messages</a>


                </nav>
                <div class="w-1/5 text-center">
                    <a href="#"><i class="fa fa-twitter fa-lg text-blue-500"></i></a>
                </div>

                <div class="w-2/5 flex justify-end">
                    <div class="mr-4 relative">
                        <input type="text" class="bg-gray-200 h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Cari Twitter">
                        <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-gray-400"></i></span>
                    </div>

                    <div class="mr-4">
                        <a href="#"><img src="/img/avatar.jpg"  class="h-8 w-8 rounded-full"></a>
                    </div>

                    <div>
                        <button class="bg-teal-400 hover:bg-teal-800 text-white font-medium py-2 px-4 rounded-full">Tweet</button>
                    </div>
                </div>
            </divc>
        </div>
    </body>
</html>
