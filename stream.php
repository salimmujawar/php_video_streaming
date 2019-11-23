<?php
require_once('VideoStream.php');
if (!empty($_GET['video'])) {
	$stream = new VideoStream('/var/www/html/video_streaming/videos/' . $_GET['video']);
	$stream->start();
}
?>
