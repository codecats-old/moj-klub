<?php defined('SYSPATH') or die('No direct script access.');?>
<ul class="thumbnails">
<?php for($i=0;$i<3;++$i):?>
<?php echo View::factory('Component/Thumbnails/Thumbnail/Team');?>
<?php endfor;?>
</ul>
