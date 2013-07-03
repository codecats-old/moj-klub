<?php defined('SYSPATH') or die('No direct script access.');?>
    <nav class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
<?php echo HTML::anchor(Route::get('default')->uri(),'Mój klub', array('class'=>'brand'));?>
                        <!--Collapse less than 940px -->
                        <div class="nav-collapse">
<?php echo View::factory('Header/Menu/Main')?>
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
                    <!-- Access -->
<?php echo View::factory('Header/Access');?>
                    <!-- >Access -->
                </div>
            </nav>