# Cartrabbit Hook for Wordpress

Add the below piece of code in **cartrabbit.config.php** to load Cartrabbit Hook service provider

`'providers' => array(`

`       Cartrabbit\Hook\HookServiceProvider::class`

`       )`
 
 # Cartrabbit Hook Example

`\Cartrabbit\Hook\Facades\Action::add('init', 'ClassName@functionName');`

`\Cartrabbit\Hook\Facades\Action::run('eventname', $args);`


`\Cartrabbit\Hook\Facades\Filter::add('eventname', 'ClassName@functionName');`

`\Cartrabbit\Hook\Facades\Filter::run('eventname', $args);`