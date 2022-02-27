<?php
/**
 * Side Box Template
 *
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_recently_viewed.php 2022-02-27 08:06:36Z webchills $
 */
 
  $content = '';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">' . "\n";
  $content .= '<div class="wrapper">' . "\n";
  $content .= '<table class="recentlyviewed">' . "\n";
  foreach ($_SESSION['recent_products'] as $recent_product) {
	$link = zen_href_link(zen_get_info_page($recent_product), 'products_id=' . $recent_product);
	$content .= '<tr>' . "\n" . 
				  '<td></td>' . "\n" . 
				  '<td><div class="recent-products-name"><a href="' . $link . '">' . zen_get_products_name($recent_product, $_SESSION['languages_id']) . '</a></div></td>' . "\n" . 
				 '</tr>';
  }
  $content .= '</table>' . "\n";
  $content .= '</div>' . "\n";
  $content .= '</div>';