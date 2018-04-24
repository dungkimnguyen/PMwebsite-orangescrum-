<?php
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'users', 'action' => 'index'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/mydashboard', array('controller' => 'easycases', 'action' => 'mydashboard'));
Router::connect('/dashboard', array('controller' => 'easycases', 'action' => 'dashboard'));
Router::connect('/getting_started/*', array('controller' => 'users', 'action' => 'getting_started'));
Router::connect('/onbording', array('controller' => 'projects', 'action' => 'onbording'));
Router::connect('/license/*', array('controller' => 'users', 'action' => 'license'));
Router::connect('/bug-report/*', array('controller' =>'reports', 'action' => 'glide_chart'));
Router::connect('/task-report/*', array('controller' =>'reports', 'action' => 'chart'));
Router::connect('/hours-report/*', array('controller' =>'reports', 'action' => 'hours_report'));
Router::connect('/how-it-works/*', array('controller' => 'users', 'action' => 'tour'));

Router::connect('/users/notification', array('controller' => 'users', 'action' => 'email_notification'));
Router::connect('/activities', array('controller' => 'users', 'action' => 'activity'));
Router::connect('/help', array('controller' => 'easycases', 'action' => 'help'));
Router::connect('/help/*', array('controller' => 'easycases', 'action' => 'help'));

Router::connect('/reminder-settings', array('controller' => 'projects', 'action' => 'groupupdatealerts'));
Router::connect('/import-export', array('controller' => 'projects', 'action' => 'importexport'));
Router::connect('/task-type', array('controller' => 'projects', 'action' => 'task_type'));
Router::connect('/my-company', array('controller' => 'users', 'action' => 'mycompany'));
Router::connect('/milestone/saveMilestoneTitle', array('controller' => 'milestones', 'action' => 'saveMilestoneTitle'));
Router::connect('/milestone/*', array('controller' => 'milestones', 'action' => 'milestone'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
