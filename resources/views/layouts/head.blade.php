<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Musica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('/bootstrap/css/bootstrap.min.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #00E5F4;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }
            #fondo{
                background-image: url("imagenes/fondo.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
                width: 100%;
            }
            #footer{
                position: absolute;
                bottom: 0;
                width: 100%;
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
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            #pokeball{
                height: 200px;
                width: 200px;
            }
            #logo{
                height: 50px;
                width: 50px;
            }
        </style>
    </head>