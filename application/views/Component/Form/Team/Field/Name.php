	<div class="row-fluid">
					<div class="span12 control-group">
						<label class="control-label" for="short_name">
							<?php echo __('short name');?>:
							<span class="help-block btn-mini"><i><?php echo __('for example');?>: FC Barcelona or Barça ect.</i></span>
						</label>
<?php echo Form::input('short_name', Arr::get($team, 'short_name'), 
		array('class'=>'span4', 'placeholder'=>__('short name'), 'maxlength'=>'15'));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'short_name');?></span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label for="full_name">
							<?php echo __('full name');?>:
							<span class="help-block btn-mini"><?php echo __('for example');?>: Futbol Club Barcelona</span>
						</label>
<?php echo Form::input('full_name', Arr::get($team, 'full_name'), 
		array('class'=>'span8', 'placeholder'=>__('full name')));?>
						<span class="label label-warning"><?php echo Arr::get($error, 'full_name');?></span>
					</div>
				</div>
			