<?php
$post = $wp_query->post;
if ( in_category('canciones') ) {
include(TEMPLATEPATH . '/single_canciones.php'); } 
elseif ( in_category('blog') ) {
include(TEMPLATEPATH . '/single_blog.php'); }
elseif ( in_category('descargas') ) {
include(TEMPLATEPATH . '/single_descargas.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>