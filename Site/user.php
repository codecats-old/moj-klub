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
                                <li><a href="#">Trenuj</a></li>
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
                <div class="span3">
                    <div class="well row-fluid  span12">
                        <ul class="thumbnails">
                            <li class="thumbnail span12">
                                <h4 class="top-text text-info btn active">Twoje dane</h4>
                                <img class="bg-img" style="width:100px; heigth:100px;" src="img/club-avatar.jpg" />
                                <div><label class="label">Imie:</label><span class="text-info pull-right">Tomasz</span></div>
                                <div><label class="label">Nazwisko:</label><span class="text-info pull-right">Brzęczyszczykiewicz</span></div>
                                <div><label class="label">Drużyna:</label><span class="text-info pull-right">IKS OGRY</span></div>
                                <div><label class="label">Rola:</label><span class="text-info pull-right">Zawodnik</span></div>
                                <div><label class="label">Tel:</label><span class="text-info pull-right">666</span><span>(publiczny)</span></div>
                                <div><label class="label">E-mail:</label><span class="text-info pull-right">SSS@o2.pl</span><span>(publiczny)</span></div>
                            </li>
                        </ul>
                        <a href="#">Edytuj dane</a>
                        <a class="pull-right" href="#">Wyloguj się</a>
                    </div>
                </div>
                <div class="span9">
                	<form>
                		<input/>
                		<input/>
                		<input/>
                	</form>
                </div>
            </div><!-- >row-fluid -->
            

        </div><!-- container-fluid -->
        <footer>
             <nav class="navbar navbar-inverse">
                 <div class="navbar-inner">2013 &COPY; by CodeCats
                </div>
             </nav>
        </footer>

<script src="../assets/script/Js/jquery-2.0.2.min.js"></script>  
<script src="../assets/script/Js/bootstrap.min.js"></script> 
    </body>
</html>
