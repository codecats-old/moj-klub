<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $type = ($request['active'] == FALSE) ? 'information' : 'request';?>

<li class="row-fluid" sender="<?php echo $id;?>">

<?php if (Arr::get($status, 'status_accepted')):?>
	<?php echo View::factory('Component/Request/Status/Accepted', 
			array(
				'status'	=> $status,
				'type'		=> $type,
				'request'	=> $request,
				'user'		=> $user
			)
		);
	?>
<?php endif;?>

	
<?php if (Arr::get($status, 'status_refused')):?>
	<?php echo View::factory('Component/Request/Status/Refused', 
			array(
				'status'	=> $status,
				'type'		=> $type,
				'request'	=> $request,
				'user'		=> $user
			)
		);
	?>
<?php endif;?>

	
<?php if (Arr::get($status, 'status_canceled')):?>
	<?php echo View::factory('Component/Request/Status/Canceled', 
			array(
				'status'	=> $status,
				'type'		=> $type,
				'request'	=> $request,
				'user'		=> $user
			)
		);
?>
<?php endif;?>

<?php if (Arr::get($status, 'status_unread')):?>
<?php echo View::factory('Component/Request/Status/Unread', 
			array(
				'status'	=> $status,
				'type'		=> $type,
				'request'	=> $request,
				'user'		=> $user
			)
		);
?>
<?php endif;?>		

</li>