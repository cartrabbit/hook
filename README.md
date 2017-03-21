# Cartrabbit Hook for Wordpress
Add the bellow piece of code in **plugin.php** to set $app in Facade


`if ( is_plugin_active(plugin_basename( __FILE__ )) ) {`

 `   $plugin = new \Cartrabbit\Framework\Base\Plugin(plugin_dir_path( __FILE__ ));`

 `   $herbert->registerPlugin($plugin);`

 `   $app = $plugin->getContainer();`

`   Cartrabbit\Hook\Facades\Facade::setFacadeApplication($app);`

`}`


Add the bellow piece of code in **herbert.config.php** to load FlycartHook service provider

`'providers' => array(`

`       Cartrabbit\Hook\HookServiceProvider::class`

`       )`
 
 # Cartrabbit Hook Example

`\Cartrabbit\Hook\Facades\Action::add('init', 'ClassName@functionName');`

`\Cartrabbit\Hook\Facades\Action::run('eventname', $args);`


`\Cartrabbit\Hook\Facades\Filter::add('eventname', 'ClassName@functionName');`

`\Cartrabbit\Hook\Facades\Filter::run('eventname', $args);`