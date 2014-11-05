check-extension
===============

Plugin to YOURLS URL-shortener that will use the filename as title if its not a trusted extension. I created this simple plugin becuase it would generate trafic if the user added a direct link to a large file, eg. my.cool.movie.mp4

Usage
===============

Create check-url directory in /user/
Place the plugin.php file in check-url directory
Add this to config.php and add your accepted files/extensions you want the real titles for:

$dont_ignore_title_for_extension = array(
		'php',
		'asp',
		'html',
		'htm'
);
