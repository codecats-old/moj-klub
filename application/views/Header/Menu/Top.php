<?php defined('SYSPATH') or die('No direct script access.');?>
<nav class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
<?php echo HTML::anchor(
		Route::get('default')->uri(),
		'Mój klub', 
		array('class'=>'brand', 'rel'=>'index')
);?>
                        <!--Collapse less than 940px -->
                        <div  class="nav-collapse">
<?php echo View::factory('Header/Menu/Main')?>
                        </div>
                        <!-- Collapse -->
                        <!-- Search -->
                    <!--    
                         <ul class="nav pull-right">
                            <li>
                                <form class="navbar-search">
                                    <input tabindex="1" type="text" class="search-query" placeholder="Search">
                                </form>
                            </li>  
                        </ul>
                     -->
                        <!-- >Search -->
                    </div>

                    <!-- Access -->
<?php if (Arr::get($header_menu_access, 'access') === TRUE) echo View::factory('Header/Access');?>
<?php if (Arr::get($header_menu_access, 'loged') === TRUE) echo View::factory('Header/Loged');?>
					
                    <!-- >Access -->
<?php if (Arr::get($header_menu_access, 'management') === TRUE): ?>
              <!-- Management  -->      
                  <span class="pull-right">
	<?php echo View::factory('Header/Management/Icon')
		->set('header_management_icon', $header_management_icon)
		->set('component_request_menu', $component_request_menu);
	?>
                  </span>
              <!-- >Management -->
<?php endif;?>
                </div>
</nav>