# ucorpa
This is a Wordpress Multipurpus Theme.
<h2 style='color:red;'>Overview</h2>
<p>Ucorpa is a Online corporet Multipurpus Wordpress Theme. There are theme a Very Funcality . One click Demo Install. Revulution Slider. Portfolio,Service,Team,etc</p>
<h3>Wordpress Default Menu Class Change Or Any Class Change</h3>
<pre>
<code>
function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="myclass" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');  
</code>
</pre>
