<?php
	$data['top_nav_html'] = '';
	$db->where('parent',-1);
	$data['top_cats'] = $db->get("categories");	
    foreach ($data['top_cats'] as $i => $top_cat) {
    	$db->where('parent',$top_cat['id']);
    	$data['top_cats'][$i]['sub_cats'] = $db->get("categories");
    	if(count($data['top_cats'][$i]['sub_cats']) == 0) {
    		$data['top_nav_html'] .= '<li><a href="blog.php?cat=' . $top_cat['id'] . '">' . $top_cat['name'] . '</a></li>';
    	} else {
			if(count($data['top_cats'][$i]['sub_cats']) > 0) {
				$data['top_nav_html'] .= '<li class="has-dropdown">';
				$data['top_nav_html'] .= '<a href="blog.php?cat=' . $top_cat['id'] . '">' . $top_cat['name'] . '</a>';
				$data['top_nav_html'] .= '<ul class="dropdown">';
				foreach ($data['top_cats'][$i]['sub_cats'] as $sub_cat) {
					$data['top_nav_html'] .= '<li><a href="blog.php?cat=' . $sub_cat['id'] . '">' . $sub_cat['name'] . '</a></li>';	
				}
				$data['top_nav_html'] .= '</ul>';
			}
    	}
    }
?>