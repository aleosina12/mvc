<?php
class Route

{
function __construct()
{
}

public static function  start ()
{

    $controller_name = 'Main';
    $action_name = 'index';
    $routes = $_GET['url'];

if (! empty($routes)) {

    $controller_name = $routes;
}

$model_name = 'model_'.$controller_name;
    $controller_name = 'controller_'.$controller_name;
    $action_name = 'action_'.$controller_name;

    $model_file = strtolower( $model_name). '.php';
    $model_path = "application/models/".$model_file;

    $controller_file = strtolower( $controller_name). '.php';
    //$controller_path = "application/controllers/".$controller_file;
    $controller_path = 'C:\dev\Skillfactory\Module_26_MVC_NEW\application\controllers\controller_main.php';


    //создаем контроллер
    $controller = new $controller_name;
    $action  = $action_name;

    if (method_exists($controller, $action))
    {
        //выхываем действие контроллерра
        $controller->$action;

    }
    else
        {
            Route: ErrorPage404();

        }


}

function ErrorPage404 ()
{
}

}


