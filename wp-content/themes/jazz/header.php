<head>
    <title>TJC</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <script src="https://kit.fontawesome.com/0a31d1e274.js"></script>

    <!-- Magnific Popup Stuff -->
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <style type="text/css">
        html, body{
            margin:0;
            padding:0;
            color: #f1f1f1;
            background-color: #272727;
        }
        a{
            text-decoration: none;
        }
        img{
            max-width: 100%;
        }
        .buttoncss{
            color: inherit;
            font-size: 1vmax;
            border: none;
            text-decoration: none;
            padding:0;
        }
        .buttoncss:hover{
            background-color: #424242;
            color: inherit;
        }
        .hed{
            color: inherit;
            background-color: #191919;
            padding-top: 0.5vmax;
            padding-bottom: 0.5vmax;
            margin-bottom: 1vmax;
        }
        .title{
            text-decoration: none;
            color: #f1f1f1;
            text-align: center;
            padding-top: 2.5vmax;
            padding-bottom: 1.5vmax;
        }
        .title:hover{
            color: #9a9a9a;
        }
        .logo{
            border: none;
            text-decoration: none;
            color: #E2C400;
            font-size:6vmin;
        }
        .logo:hover{
            color: #C1A800;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        @media screen and (max-width: 600px){
            .hed{
                display: none;
            }
            .title{
                background-color: #191919;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="row title">
            <h1 class="ten columns">
                <a href="index.php">
                    <i class="fas fa-music title" style="font-size:6vmin; border: none"> Jazz Club Townsville</i>
                </a>
            </h1>
            <button class="buttoncss two columns" style="background-color: #191919">Join Us</button>
        </div>

        <div class="hed">
            <div class="row">
                <p class="one column"></p>

                <div class="buttoncss dropdown two columns">
                    <button class="buttoncss">
                        <a href="#" class="buttoncss">Home</a>
                    </button>
                </div>

                <div class="buttoncss dropdown two columns">
                    <button class="buttoncss">
                        <a href="photos.php" class="buttoncss">Photos</a>
                    </button>
                    <div class="dropdown-content buttoncss">
                        <a href="photos-2020.php">2020 Photos</a>
                        <a href="#">2019 Photos</a>
                        <a href="#">2018 Photos</a>
                    </div>
                </div>

                <div class="buttoncss dropdown two columns">
                    <button class="buttoncss">
                        <a href="#" class="buttoncss">Bands</a>
                    </button>
                    <div class="dropdown-content buttoncss">
                        <a href="#">Big Band</a>
                        <a href="#">Smooth</a>
                    </div>
                </div>

                <div class="buttoncss dropdown two columns">
                    <button class="buttoncss">
                        <a href="#" class="buttoncss">Festival</a>
                    </button>
                </div>

                <div class="buttoncss dropdown two columns">
                    <button class="buttoncss">
                        <a href="#" class="buttoncss">About</a>
                    </button>
                </div>
            </div>

            <div class="row " style="text-align: center">
                <a href="https://facebook.com/events/s/jazz-club-opening-night-feat-3/2878385435515845/?ti=icl" target="_blank">
                    <i class="fab fa-facebook-square logo" style="text-align: right;"></i>
                </a>
                <a href="mailto:townsvillejazz@icloud.com">
                    <i class="fas fa-envelope-square logo" style="text-align: left;"></i>
                </a>
            </div>
        </div>
    </nav>