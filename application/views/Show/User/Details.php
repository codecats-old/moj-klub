<?php defined('SYSPATH') OR die('No direct script access.');?>
<label class="label label-info">about team</label>
<div class="well">
<?php if ($team):?>
	<?php echo HTML::anchor(Route::get('default')->uri(
				array(
					'controller'	=> 'team',
					'action'		=> 'show',
					'id'			=> Coder::instance()->to_url(Arr::get($team, 'id'))
				)
			),
			Arr::get($team, 'short_name'),
			array('class' => 'btn btn-info btn-block')
	);?>
	<div class="well">
	<?php echo View::factory('Component/Info/Address')->set('object', $team);?>
	</div>

<?php else:?>
user is not member of any team.
<?php endif;?>

</div>
