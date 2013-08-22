<?php defined('SYSPATH') OR die('No direct script access.');?>
<!-- management buttons -->
<div class="btn-group">

<?php echo HTML::anchor(Route::get('default')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'join-cancel',
			'id'			=> Coder::instance()->to_url(Arr::get($request, 'team_id') ),
		)
	),
	'Cancel',
	array('class' => 'btn btn-mini btn-danger', 'tabindex' => '-1')
	
);?>

				</div>
<!-- >management buttons -->