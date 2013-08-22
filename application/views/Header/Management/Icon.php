<?php defined('SYSPATH') OR die('No direct script access');?>

<div class="dropdown">
	<button class="btn btn-inverse btn-mini blinking-icon dropdown-toggle" data-toggle="dropdown">
		events<i class="icon-envelope icon-white"></i>
	</button>



    <!-- Link or button to toggle dropdown -->
    <!-- to do not hide when clicked use: -->
    <!--  $('.scrollable').click(function(e){e.stopPropagation();}); -->
    <ul class="dropdown-menu scrollable pull-right min-width-20">
    
	    <li>
<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'requests',
			'id'			=> Coder::instance()->to_url(Arr::get($team, 'id'))
		)
	),
	'Panel',
	array( 
		'tabindex' 	=> '-1'
	)
);?>
	    </li>
	    
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