<head>

    <title>Docket</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">


    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />

    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style_subir.css">

</head>

<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="images/logo_1.png" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->


    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">

                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="UserProfile.html"><img class="logo" src="images/logo_1.png" alt="" width="119"
                            height="58"></a>
                </div>
                <!-- navlinks collector -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">


                        <li><a href="Anime.html">
                                <h4>Anime</h4>
                            </a></li>
                        <li><a href="movie.html">
                                <h4> Movies </h4>
                            </a></li>
                        <li><a href="tvseries.html">
                                <h4> Tv-Series </h4>
                            </a></li>
                        <li><a href="games.html">
                                <h4> Games </h4>
                            </a></li>
                        <li><a href="books.html">
                                <h4> Books </h4>
                            </a></li>
                        <li><a href="blogList.html">
                                <h4> Blogs </h4>
                            </a></li>
                    </ul>
                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <li class="dropdown first">


                        </li>
                        <li><a href="UserProfile.html"><img class="logo" src="images/profile.png" alt="" width="70"
                                    height="70"></a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- Navbar-->

        </div>
    </header>
    <!-- END | Header -->

    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> create your blog here</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog list section-->

    <div class="buster-light">
        <div class="page-single">
            <div class="container">
                <div class="row ipad-width">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="user-info">

                            <div class="user-img">
                                <form action="includes/signup.inc.php" enctype="multipart/form-data" method="POST">
                                    <p><input type="file" accept="image/*" name="img_url" id="file"
                                            onchange="loadFile(event)" style="display: none;"></p>
                                    <p><img id="output" width="200" /></p>
                                    <h3><label for="file" class="redbtn">Upload Image</label></h3>

                                    <script>
                                        var loadFile = function (event) {
                                            var image = document.getElementById('output');
                                            image.src = URL.createObjectURL(event.target.files[0]);
                                        };
                                    </script>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="form-style-1 user-pro">
                                <div class="row form-it">

                                    <label>Title</label>
                                    <input type="text" name="title" style="height:50px;width:90%"
                                        placeholder="Give a title to your Review">


                                </div>
                                <div class="row form-it">

                                    <label>Description</label>
                                    <textarea style="overflow:auto;resize:none;height:300px;width:90%" name="blog"
                                        placeholder="Enter description"></textarea>

                                </div>


                                <div class="row">
                                    <div class="col-md-2 form-it">
                                        <input class="submit" type="submit"
                                            onclick="window.location.href='friendProfile.html'" name="submit"
                                            value="Post">
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>



</body>

</html>