<?php
	if (isset($_GET['cat'])) {
		$articles_html = '';
		$cat = new Category($_GET['cat']);
		$data['articles'] = $cat->getArticles();
		foreach ($data['articles'] as $article) {
			$main_img = $article->getMainImage();
			if(!$main_img) $main_img_src = 'images/project-1.jpg';
			else {
				$main_img_date = date('Y-m-d',strtotime($main_img->getDate()));
				$main_img_src = $data['dir']['uploads'].$main_img_date.'/'.$main_img->getName();
			}
			$link = 'single.php?id='.$article->getId();
			$articles_html .= '<div class="col-lg-4 col-md-4">';
			$articles_html .= '<div class="fh5co-blog animate-box">';
			$articles_html .= '<a href="'.$link.'"><img class="img-responsive" src="'.$main_img_src.'" alt=""></a>';
			$articles_html .= '<div class="blog-text">';
			$articles_html .= '<h3><a href=""#>'.$article->getName().'</a></h3>';
			$articles_html .= '<span class="posted_on">'.defDate($article->getDate()).'</span>';
			$articles_html .= '<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>';
			$articles_html .= '<p>'.$article->getText().'</p>';
			$articles_html .= '<a href="'.$link.'" class="btn btn-primary">קרא עוד</a>';
			$articles_html .= '</div></div></div>';
		}
	}
?>