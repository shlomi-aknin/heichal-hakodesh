<?php
	if (isset($_GET['cat'])) {
		$data['articles_html'] = '';
		$cat = new Category($_GET['cat']);
		$data['category_name'] = $cat->getName();
		$data['articles'] = $cat->getArticles();
		foreach ($data['articles'] as $article) {
			$main_img = $article->getMainImage();
			$data['blog-text-class'] = 'blog-text';
			if($main_img) {
				$main_img_name = $main_img->getName();
				$data['blog-text-class'] .= ' add-min-height';
				if(strpos($main_img_name,'http://') !== FALSE)
					$main_img_src = $main_img_name;
				else {
					$main_img_date = date('Y-m-d',strtotime($main_img->getDate()));
					$main_img_src = $data['dir']['uploads'].$main_img_date.'/'.$main_img_name;
				}
			}
			$link = 'single.php?cat='.$article->getCatId().'&id='.$article->getId();
			$data['short_text'] = $article->getText();
			if(strlen($data['short_text']) > 100) $data['short_text'] = mb_substr($data['short_text'], 0, 120) . '...';
			$data['articles_html'] .= '<div class="col-lg-4 col-md-4 pull-right">';
			$data['articles_html'] .= '<div class="fh5co-blog animate-box">';
			if ( $main_img ) {
				$data['articles_html'] .= '<a href="'.$link.'"><img class="img-responsive" src="'.$main_img_src.'" alt=""></a>';
			}
			$data['articles_html'] .= '<div class="'.$data['blog-text-class'].'">';
			$data['articles_html'] .= '<h3><a href="'.$link.'">'.$article->getName().'</a></h3>';
			$data['articles_html'] .= '<span class="posted_on">'.defDate($article->getDate()).'</span>';
			$data['articles_html'] .= '<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>';
			$data['articles_html'] .= '<p>'.$data['short_text'].'</p>';
			$data['articles_html'] .= '<div class="read-more-btn"><a href="'.$link.'" class="btn btn-primary">קרא עוד</a></div>';
			$data['articles_html'] .= '</div></div></div>';
		}
	}
?>