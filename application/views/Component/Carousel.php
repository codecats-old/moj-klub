<?php defined('SYSPATH') or die('No direct script access.');?>
 <div id="overviewCarousel" class="carousel slide">
 
 <?php if (Arr::get($avatar, 'path')):?>
 	<?php echo HTML::image($avatar['path']);?>
<?php else:?>
	<?php echo HTML::image('upload/default/avatar/team.png');?>
<?php endif;?>

                        <div class="carousel-inner">
<?php $active = ' active';?>
<?php foreach ($photos as $photo):?>
                            <div class="item<?php echo $active;?>">
	<?php echo HTML::image($photo->address);?>
                            </div>
    <?php $active = '';?>
<?php endforeach;?>
                          
                        </div>
                        <ul class="pager">
                            <li>
                                <a class="carousel-control left btn-inverse" href="#overviewCarousel"
                                   data-slide="prev">‹</a>
                            </li>
                            <li>
                                <a class="carousel-control right  btn-inverse" href="#overviewCarousel"
                                   data-slide="next">›</a>
                            </li>
                            <li>
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>
<?php 
	echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller' 	=> 'team',
 				'action' 		=> 'show',
 				'id' 			=> Coder::instance()->short_url($team['id'])
			)
		), 
		$team['short_name']
	);
?>
                                    </h1>
                                    <p>
                                    	<label class="label">Największe sukcesy:</label>
<?php echo $team['success'];?>
                                    </p>
                                </div>
                            </div>
                            </li>
                            
                        </ul>
                    </div>          
