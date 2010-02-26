#Codeigniter base project

These are some modifications and additions to the base codeigniter install
I have added:  

* .htaccess file to remove index.php
* css, js, image directories
* autoload common libraries and helpers
* modified  [MY_Controller](http://github.com/jamierumbelow/codeigniter-base-controller) in application/libraries
* view directories for layout and shared views
* This branch is equipped with a login for protecting controllers
	* Uses modified Site_sentry library ripped out of [bamboo invoice](http://github.com/derekallard/bambooinvoice) for basic authentication
* The admin form is styled with styles in site.css. If I don't abandon php entirely, I will migrate the css to use [less](http://github.com/cloudhead/less) and come up with a better markup structure.