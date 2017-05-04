<?php
	if(isset($_GET['id'])) {
		$article = new Article($_GET['id']);		
		$data['main_img'] = $article->getMainImage();
		if(!$data['main_img'])
			$data['main_img_link'] = 'https://placehold.it/1900x450?text=שיעור+לדוגמא';
		else
			$data['main_img_link'] = $data['dir']['uploads'].date('Y-m-d', strtotime($article->getMainImage()->getDate())).'/'.$article->getMainImage()->getName();
		$data['name'] = $article->getName();
		$data['text'] = $article->getText();
		$data['long_text'] = $article->getLongText();
		$data['date'] = defDate($article->getDate());
	}
?>