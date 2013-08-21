<?php defined('SYSPATH') OR die('No direct script access');?>

<div class="dropdown">
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'administration',
			'action' 		=> 'show'
		)
	),
	'<i class="icon-envelope icon-white"></i>',
	array( 
		'class' 		=> 'btn btn-inverse btn-mini blinking-icon dropdown-toggle',
		'data-toggle' 	=> 'dropdown',
		'rel' 			=> ''
	)
);?>


    <!-- Link or button to toggle dropdown -->
    <!-- to do not hide when clicked use: -->
    <!--  $('.scrollable').click(function(e){e.stopPropagation();}); -->
    <ul class="dropdown-menu scrollable pull-right min-width-20">
    
	    <li><a tabindex="-1" href="#">To Panel</a></li>
	    <li class="divider"></li>
    	<li class="row-fluid">
    		<div>
				<small class="muted pull-right">
					type: request
				</small>
				<div class="well">
		    		<small class="muted">user asked to join the club, date: 20-08, 11:35</small>
		    		
		    		<div>
			    		<a class="btn btn-block" tabindex="-1" href="#">tomek11</a>
			
			    		
			    		<div class="btn-group  ">
				    		<a class="btn btn-mini btn-success " tabindex="-1" href="#">Accept</a>
				    		<a class="btn btn-mini" tabindex="-1" href="#">Reject</a>
				    		<a class="btn btn-mini btn-danger" tabindex="-1" href="#">Delete</a>
			    		</div>
		    		</div>
	    		</div>
			</div>
    	</li>
    	    	<li class="row-fluid ">
    		<div>
				<small class="muted pull-right">request</small>
				<div class="well">
	    		<small class="muted">user asked to join the club, date: 20-08, 11:35</small>
	    		
	    		<div>
	    		<a class="btn btn-block" tabindex="-1" href="#">tomek11</a>
	
	    		
	    		<div class="btn-group  ">
		    		<a class="btn btn-mini btn-success " tabindex="-1" href="#">Accept</a>
		    		<a class="btn btn-mini" tabindex="-1" href="#">Reject</a>
		    		<a class="btn btn-mini btn-danger" tabindex="-1" href="#">Delete</a>
	    		</div>
	    		</div>
	    		</div>
			</div>
    	</li>
    	    	<li class="row-fluid">
    		<div>
				<small class="muted pull-right">request</small>
				<div class="well">
	    		<small class="muted">user asked to join the club, date: 20-08, 11:35</small>
	    		
	    		<div>
	    		<a class="btn btn-block" tabindex="-1" href="#">tomek11</a>
	
	    		
	    		<div class="btn-group  ">
		    		<a class="btn btn-mini btn-success " tabindex="-1" href="#">Accept</a>
		    		<a class="btn btn-mini" tabindex="-1" href="#">Reject</a>
		    		<a class="btn btn-mini btn-danger" tabindex="-1" href="#">Delete</a>
	    		</div>
	    		</div>
	    		</div>
			</div>
    	</li>
    	<li class="row-fluid">
    		<div>
				<small class="muted pull-right">request</small>
				<div class="well">
	    		<small class="muted">user asked to join the club, date: 20-08, 11:35</small>
	    		
	    		<div>
	    		<a class="btn btn-block" tabindex="-1" href="#">tomek11</a>
	
	    		
	    		<div class="btn-group  ">
		    		<a class="btn btn-mini btn-success " tabindex="-1" href="#">Accept</a>
		    		<a class="btn btn-mini" tabindex="-1" href="#">Reject</a>
		    		<a class="btn btn-mini btn-danger" tabindex="-1" href="#">Delete</a>
	    		</div>
	    		</div>
	    		</div>
			</div>
    	</li>

	    
	    
    </ul>
</div>