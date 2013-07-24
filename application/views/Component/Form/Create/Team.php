<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $error=isset($error)?$error:array();?>
<?php $team=isset($team)?$team:array();?>
<?php echo Form::open(Route::get('default')
		->uri(array('controller'=>'team', 'action'=>'create')),
		array('class'=>'form-horizontal'));?>
	<div class="modal-body">
			<div class="well">
				<h5><?php echo __('Needed data');?></h5>
				
				<div class="row-fluid">
					<div class="span12 control-group">
						<label class="control-label" for="short_name">
							short name:
							<span class="help-block btn-mini"><i>for example: FC Barcelona or Barça ect.</i></span>
						</label>
<?php echo Form::input('short_name', Arr::get($team, 'short_name'), 
		array('class'=>'span4', 'placeholder'=>'short name', 'maxlength'=>'15'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'short_name');?></span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="full_name">
							full name:
							<span class="help-block btn-mini">for example: Futbol Club Barcelona</span>
						</label>
<?php echo Form::input('full_name', Arr::get($team, 'full_name'), 
		array('class'=>'span8', 'placeholder'=>'full name'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'full_name');?></span>
					</div>
				</div>
				
				<h5>
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#extra_info">
						Dane dodatkowe <b class="caret"></b>
					</button>
				</h5>
                <div id="extra_info" class="collapse out">
				
					<div class="row-fluid">
						<div class="span12">
							<label for="description">
								description:
							</label>
<?php echo Form::textarea('description', Arr::get($team, 'description'), 
		array('class'=>'span8', 'rows'=>'4', 'placeholder'=>'description'));?>
							<span class="label label-warning"><?php echo Arr::get($error, 'description');?></span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
<?php echo View::factory('Component/Form/Address')
	->set('address', $team)
	->set('error', $error)->render();
?>
						</div>
					</div>
					<hr>
					<div class="row-fluid">
						<div class="span12 control-group">
							<label class="control-label" for="email">
								team email:
							</label>
<?php echo Form::input('email', Arr::get($team, 'email'), 
		array('class'=>'span4', 'placeholder'=>'email', 'type'=>'email'));?>
							<span class="label label-warning"><?php echo Arr::get($error, 'email');?></span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12 control-group">
							<label class="control-label" for="phone">
								team phone:
							</label>
<?php echo Form::input('phone', Arr::get($team, 'phone'), 
		array('class'=>'span4', 'placeholder'=>'phone', 'type'=>'tel'));?>
							<span class="label label-warning"><?php echo Arr::get($error, 'phone');?></span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<label for="success">
								team success:
							</label>
<?php echo Form::textarea('success', Arr::get($team, 'success'), 
		array('class'=>'span8', 'rows'=>'4', 'placeholder'=>'success'));?>
							<span class="label label-warning"><?php echo Arr::get($error, 'success');?></span>
						</div>
					</div>
				</div>
            </div>
        </div>
        <div class="modal-footer">
<?php echo HTML::anchor(Route::get('default')->uri(), 
		__('Close'), array('class'=>'btn', 'data-dismiss'=>'modal', 'aria-hidden'=>true));?>
<?php echo Form::submit('submit', __('Join now').'!', 
		array('class'=>'btn btn-primary', 'rel'=>'create_form', 'data-loading-text'=>'please wait...'));?>
        </div>
<?php echo Form::close();?>