<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $title or '' }}</title>
        <meta name="description" content="{{ $description or ''}}"/> 
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {font-family: Roboto;}

            h1, h2, h3 {color: #032c55}

            header {
                display: block;
                height: 200px;
                color: #fff;
                background: #003359 url("/img/bg_mountains_transp.png") no-repeat center top 50%;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            header a {color: #fff !important;}
            header a:hover{text-decoration: underline;}
            header small {font-size: .6rem}

            footer {
                display: block;
                height: 400px;
                color: #fff;
                background: #032c55 url("/img/bg_footer.png") no-repeat left top;
            }
            footer a {
                display: block;
                color: #fff !important;
                font-size: .75rem;
                margin: 0 0 .75rem 0;
            }
            footer a:hover{text-decoration: underline;}
            footer .contact, footer .contact a {font-size: 1rem; }
            footer .social { cursor: pointer; }
            footer .bottom { margin-top: 4rem; }
            footer .bottom a {
                font-size: .7rem;
                display: inline-block;
                margin-right: 1rem;
            }

            text-navy {color: #032c55;}

            .description h1 {
                font-size: 2rem; 
                margin: 3rem 0 0 0;
            }
            .description hr {
                display: block;
                background: #032c55;
                border: none;
                width: 78px;
                height: 4px;
                margin: 1rem 0 1rem 0;
            }
            .description p {font-size: .95rem}

            .testimonials_header {
                color: #032c55 !important;
                font-size: 1.5rem;
                line-height: 1.15;
                text-decoration: underline;
            }
            .testimonials_header:hover {text-decoration: none;}

            .testimonials_link {
                color: #032c55 !important;
                font-size: .80rem;
                text-decoration: underline;
            }

            .testimonials_link:hover {text-decoration: none;}

            .ask_question h2 {
                font-size: 1.6rem; 
                padding: 0;
                margin: 1rem 0 0 0;
            }

        </style>
    </head>
    <body>
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        @yield('script')
    </body>
</html>
