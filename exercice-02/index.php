<?php
/**
 * Plugin Name: Hono Exercice-2
 * Description: liste de réseaux sociaux
 */

function reseaux_sociaux(){
	$socialmedia = '<ul>
		<li>- Facebook : https://facebook.com.</li>
		<li>- Instagram.com : https://instagram.com</li>
		<li>- Linkedin : https://www.linkedin.com</li>
		<li>- GitHub : https://github.com/honoagency</li>
	</ul>';
	return $socialmedia;
}

add_shortcode('show_social_network','reseaux_sociaux')

?>
