<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body.colorlib-body {
            padding: 0;
            margin: 0;
        }

        .colorlib-body #colorlib-notfound {
            height: 100vh;
        }

        #colorlib-notfound {
            position: relative;
            height: 60vh;
        }

        #colorlib-notfound .colorlib-notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .colorlib-notfound {
            max-width: 460px;
            width: 100%;
            text-align: center;
            line-height: 1.4;
        }

        .colorlib-notfound .colorlib-notfound-404 {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0px auto 50px;
        }

        .colorlib-notfound .colorlib-notfound-404>div:first-child {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: #ffa200;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            border: 5px dashed #000;
            border-radius: 5px;
        }

        .colorlib-notfound .colorlib-notfound-404>div:first-child:before {
            content: '';
            position: absolute;
            left: -5px;
            right: -5px;
            bottom: -5px;
            top: -5px;
            -webkit-box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.1) inset;
            box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.1) inset;
            border-radius: 5px;
        }

        .colorlib-notfound .colorlib-notfound-404 h1 {
            font-family: 'Cabin', sans-serif;
            color: #000;
            font-weight: 700;
            margin: 0;
            font-size: 90px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            left: 50%;
            text-align: center;
            height: 40px;
            line-height: 40px;
        }

        .colorlib-notfound h2 {
            font-family: 'Cabin', sans-serif;
            font-size: 33px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 7px;
        }

        .colorlib-notfound .colorlib-notfound-404 h1:after,
        .colorlib-notfound .colorlib-notfound-404 h1:before,
        .colorlib-notfound h2:after,
        .colorlib-notfound h2:before {
            display: none;
        }

        .colorlib-notfound p {
            font-family: 'Cabin', sans-serif;
            font-size: 16px;
            color: #000;
            font-weight: 400;
        }

        .colorlib-notfound a {
            font-family: 'Cabin', sans-serif;
            display: inline-block;
            padding: 10px 25px;
            background-color: #8f8f8f;
            border: none;
            border-radius: 40px;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .colorlib-notfound a:hover {
            background-color: #2c2c2c;
        }

        @media only screen and (max-height:600px) {
            #colorlib-notfound {
                height: 100vh;
            }
        }

        @media only screen and (max-width: 767px) {
            .colorlib-notfound .colorlib-notfound-404 {
                position: relative;
                width: 100px;
                height: 100px;
                margin: 0px auto 50px;
            }

            .colorlib-notfound .colorlib-notfound-404 h1 {
                font-size: 120px;
            }

            .colorlib-notfound h2 {
                font-size: 16px;
            }
        }

        .colorlib-copyright {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            padding: 20px;
            background: rgb(149, 130, 130);
            color: #fff;
            font-size: 14px;

        }
    </style>
</head>

<body>
    <div id="colorlib-notfound">
        <div class="colorlib-notfound">
            <div class="colorlib-notfound-404">
                <div></div>
                <h1>404</h1>
            </div>
            <h2 id="colorlib_404_customizer_page_heading">
                PAGE NOT FOUND
            </h2>
            <p id="colorlib_404_customizer_content">
                The page you are looking for might have been removed had its name changed or is temporarily unavailable.
            </p>
            <a href="/" id="colorlib_404_customizer_button_text">
                Back to homepage
            </a>
        </div>
        <p class="colorlib-copyright"><span>
                Copyright © 2023 </span>
            <a href="https://colorlib.com/" target="_blank">
                B2M Technologies.</a>
            All rights reserved.
        </p>
    </div>

</body>

</html>
