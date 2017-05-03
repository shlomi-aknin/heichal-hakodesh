<?php
	if (isset($_GET['cat'])) {
		$cat = new Category($_GET['cat']);
		$data['articles'] = $cat->getArticles();
	}
?>