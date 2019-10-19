<?php
foreach ($news_item as $value) {
	# code...
	echo '<h2>'.$value['title'].'</h2>';
	echo $value['text'];
}
