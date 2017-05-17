<?php
	if(isset($_GET['id'])) {
		$article = new Article($_GET['id']);		
		$data['name'] = $article->getName();
		$data['text'] = $article->getText();
		$data['long_text'] = $article->getLongText();
		$data['date'] = defDate($article->getDate());
		$data['main_img'] = $article->getMainImage();

		if( $data['main_img'] ) {
			$data['main_img_name'] = $data['main_img']->getName();
			if(strpos($data['main_img_name'], 'http://') !== false)
				$data['main_img_link'] = $data['main_img_name'];
			else
				$data['main_img_link'] = $data['dir']['uploads'].date('Y-m-d', strtotime($article->getMainImage()->getDate())).'/'.$data['main_img_name'];
		}
	}
?>