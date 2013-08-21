<?php

function display_photos() {
	foreach(glob('./img/photos/photo*.*') as $filename){
		$thumb = "./img/photos/thumb" . substr($filename, 18);
		echo '<a href="'.$filename.'" class="lightbox" data-group="set"><img src="'.$thumb.'"/></a>';
	}
}
?>

<div id="photos">
	<?php display_photos(); ?>
</div>

<div style="clear:both"></div>