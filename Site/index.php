<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="trening, klub, drużyna, zawodnicy">
       <!-- <link rel="stylesheet" href="../assets/style/Css/bootstrap.min.css">-->
       <link rel="stylesheet" href="bootstrap.min.css">
       <link rel="stylesheet" href="bootstrap.fix.css">
        <meta name="viewport" content="initial-scale=1.0 , minimum-scale=1 , maximum-scale=1" />
        <title>Mój klub</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand " href="#">Mój Klub</a>
                        <!--Collapse less than 940px -->
                        <div class="nav-collapse">
                            <ul class="nav container-fluid">
                                <!-- Popular -->
                                <li><a href="#">Najciekawsze</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">
                                        Miasto<b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Kraków</a></li>
                                        <li><a href="#">Warszawa</a></li>
                                    </ul>
                                </li>
                                <!-- >Popular -->
                                <!-- Ranking -->
                                <li><a href="#">Ranking</a></li>
                                <!-- >Ranking -->
                                <li><a href="#">Panel</a></li>
                                <li><a href="#">KLUB</a></li>
                            </ul>
                        </div>
                        <!-- Collapse -->
                        <!-- Search -->
                        <ul class="nav pull-right">
                            <li>
                                <form class="navbar-search">
                                    <input type="text" class="search-query" placeholder="Search">
                                </form>
                            </li>  
                        </ul>
                        <!-- >Search -->
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9">
                    <!-- Carousel -->
                    <div id="overviewCarousel" class="carousel slide">
                        <img src="img/club-avatar.jpg" />
                        <div class="carousel-inner">
                            <div class="active item">
                                 <img src="img/club-photo.jpeg" />
                            </div>
                            <div class="item">
                                 <img src="img/club-photo2.JPG" />
                            </div>
                        </div>
                        <ul class="pager">
                            <li>
                                <a class="carousel-control left btn-inverse" href="#overviewCarousel"
                                   data-slide="prev">‹</a>
                            </li>
                            <li>
                                <a class="carousel-control right  btn-inverse" href="#overviewCarousel"
                                   data-slide="next">›</a>
                            </li>
                            <li>
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1><a href="">IKS Opole</a></h1>
                                    <p>Trenuj boks. Zapraszamy w każdy poniedziałek i czwartek.</p>
                                </div>
                            </div>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- >Carousel -->   
                </div>
                <div class="span3">
                    <form class="well">
                        <h4>Szybki dostęp</h4>
                        <input name="login" type="text" class="span12" placeholder="email/login" />
                        <input name="password" type="password" class="span12" placeholder="password" />
                        <input name="submit" value="zaloguj się" type="submit" class="span12 btn btn-success" />
                        <label class="checkbox">
                            <input type="checkbox" checked><small>nie wylogowuj mnie</small>
                        </label>
                        <div class="pull-right">
                            <a href="#registryModal" role="button" data-toggle="modal">rejestracja</a>

                        </div>
                    </form>
                </div>
            </div><!-- >row-fluid -->
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4 btn btn-warning">
                        <h3>Gwardia Warszawa</h3>
                        <img style="width:50px; heigth:50px;" src="img/club-avatar.jpg" />
                        <p>
                            Gwardia Warszawa is a Polish sports club based in Warsaw, Poland. The club was founded in 1948. Gwardia Warszawa football team currently playing in the Polish A klasa (7th tier of Polish league football). It participated in the Polish 1st League between 1953–1960 (8 seasons), 1962–1966 (5 seasons), 1967–1968, 1969–1975, 1978–1979 and 1981–1983. The biggest success was finishing 2nd at Polish Championship in 1957 season. 
                        </p>
                        <div class="row-fluid">
                            <div class="span5">Poziom Treningów</div>
                            <div class="span7">
                                <div class="progress progress-striped active">
                                    <div class="bar" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">Popularność</div>
                            <div class="span7">
                                <div class="progress progress-danger progress-striped active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success" href="#">Zobacz klub</a>
                    </li>
                    <li class="span4 btn btn-warning">
                        <h3>Gwardia Warszawa</h3>
                        <img style="width:50px; heigth:50px;" src="img/club-avatar.jpg" />
                        <p>
                            Gwardia Warszawa is a Polish sports club based in Warsaw, Poland. The club was founded in 1948. Gwardia Warszawa football team currently playing in the Polish A klasa (7th tier of Polish league football). It participated in the Polish 1st League between 1953–1960 (8 seasons), 1962–1966 (5 seasons), 1967–1968, 1969–1975, 1978–1979 and 1981–1983. The biggest success was finishing 2nd at Polish Championship in 1957 season. 
                        </p>
                        <div class="row-fluid">
                            <div class="span5">Poziom Treningów</div>
                            <div class="span7">
                                <div class="progress progress-striped active">
                                    <div class="bar" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">Popularność</div>
                            <div class="span7">
                                <div class="progress progress-danger progress-striped active">
                                    <div class="bar" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success" href="#">Zobacz klub</a>
                    </li>
                    <li class="span4 btn btn-warning">
                        <h3>Gwardia Warszawa</h3>
                        <img style="width:50px; heigth:50px;" src="img/club-avatar.jpg" />
                        <p>
                            Gwardia Warszawa is a Polish sports club based in Warsaw, Poland. The club was founded in 1948. Gwardia Warszawa football team currently playing in the Polish A klasa (7th tier of Polish league football). It participated in the Polish 1st League between 1953–1960 (8 seasons), 1962–1966 (5 seasons), 1967–1968, 1969–1975, 1978–1979 and 1981–1983. The biggest success was finishing 2nd at Polish Championship in 1957 season. 
                        </p>
                        <div class="row-fluid">
                            <div class="span5">Poziom Treningów</div>
                            <div class="span7">
                                <div class="progress progress-striped active">
                                    <div class="bar" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span5">Popularność</div>
                            <div class="span7">
                                <div class="progress progress-danger progress-striped active">
                                    <div class="bar" style="width: 20%;"></div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-success" href="#">Zobacz klub</a>
                    </li>
                </ul>
            </div>
            <div class="row-fluid">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nazwa klubu</th>
                            <th>Skrót</th>
                            <th>Opis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>KS Garbarnia kraków</td>
                            <td>KS G</td>
                            <td>Gwardia Warszawa football team currently playing in the Polish A klasa (7th tier of Polish league football). It participated in the Polish 1st League
                            </td>
                        </tr>
                        <tr>
                            <td>KS Garbarnia kraków</td>
                            <td>KS G</td>
                            <td>Gwardia Warszawa football team currently playing in the Polish A klasa (7th tier of Polish league football). It participated in the Polish 1st League
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- container-fluid -->
        <footer>
             <nav class="navbar navbar-inverse">
                 <div class="navbar-inner">2013 &COPY; by CodeCats
                </div>
             </nav>
        </footer>
<!-- Modal -->
<div id="registryModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Szybka rejestracja</h3>
    </div>
    <form>
        <div class="modal-body">
            <div class="well">
                <h4>Dane wymagane</h4>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="email">
                            e-mail:
                            <label class="checkbox">
                                <input type="checkbox" checked><small>widoczny publicznie</small>
                            </label>
                        </label>
                        <input name="email" type="email" class="span8" placeholder="email" />
                        <span class="label label-warning">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa1</span>
                        <hr>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="username">username:</label>
                        <input name="username" type="text" class="span8" placeholder="nazwa użytkownika" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="password">hasło:</label>
                        <input name="password" type="password" class="span8" placeholder="hasło" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="password_confirm">hasło potwierdź:</label>
                        <input name="password_confirm" type="password" class="span8" placeholder="hasło - potwierdź" />
                    </div>
                </div>
                <hr>
                <h5>Dane dodatkowe:</h5>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="name">imię:</label>
                        <input name="name" type="text" class="span8" placeholder="Twoje imie" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="surname">nazwisko:</label>
                        <input name="surname" type="text" class="span8" placeholder="Twoje nazwisko" />
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label for="phone">
                            nr telefonu:
                            <label class="checkbox">
                                <input type="checkbox" checked><small>widoczny publicznie</small>
                            </label>
                        </label>
                        <input name="phone" type="text" class="span8" placeholder="Twoj nr telefonu" />
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Zarejestruj się</button>
        </div>
    </form>
</div>
<script src="../assets/script/Js/jquery-2.0.2.min.js"></script>  
<script src="../assets/script/Js/bootstrap.min.js"></script> 
<script>
    $('#overviewCarousel').carousel();
</script>
    </body>
</html>
