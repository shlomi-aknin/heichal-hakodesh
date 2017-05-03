<?php
	if (isset($_GET['cat'])) {
		$db->where('cat_id',$_GET['cat']);
		$data['articles'] = $db->get('articles');
		nice_dump($data['articles']);
		die();
	}
?>