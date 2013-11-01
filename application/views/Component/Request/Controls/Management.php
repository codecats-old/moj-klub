<?php defined('SYSPATH') OR die('No direct script access.');?>
<!-- management buttons -->
<div class="text-center">
	<div class="btn-group">
<?php echo HTML::anchor(Route::get('consider')->uri(
		array(
				'controller' 	=> 'management',
				'action' 		=> 'consider-join',
				'id'			=> Coder::instance()->to_url(Arr::get($user, 'id') ),
				'result' 		=> 'accept'
		)
	),
	__('Accept'),
	array(
		'class' 	=> 'btn btn-mini btn-success', 
		'tabindex' 	=> '-1',
		'rel' 		=> 'accept'
	)

);?>

<?php echo HTML::anchor(Route::get('consider')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'consider-join',
			'id'			=> Coder::instance()->to_url(Arr::get($user, 'id') ),
			'result' 		=> 'refuse'
		)
	),
	__('Refuse'),
	array(
		'class' 	=> 'btn btn-mini btn-danger', 
		'tabindex' 	=> '-1',
		'rel' 		=> 'refuse'
	)
	
);?>

<?php echo HTML::anchor(Route::get('consider')->uri(
		array(
			'controller' 	=> 'management',
			'action' 		=> 'consider-join',
			'id'			=> Coder::instance()->to_url(Arr::get($user, 'id') ),
			'result' 		=> 'cancel'
		)
	),
	__('Cancel'),
	array(
		'class' 	=> 'btn btn-mini', 
		'tabindex' 	=> '-1',
		'rel' 		=> 'cancel'
	)
	
);?>
	</div>
</div>
<!-- >management buttons -->