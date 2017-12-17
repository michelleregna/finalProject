<?php

class routes
{

    public static function getRoutes()
    {

        //I also use object for the route because it has data and it's easier to access.
        $route = new route();
        //this is the index.php route for GET
        //Specify the request method
        $route->http_method = 'GET';
        //specify the page.  index.php?page=index.  (controller name / method called
        $route->page = 'homepage';
        //specify the action that is in the URL to trigger this route index.php?page=index&action=show
        $route->action = 'show';
        //specify the name of the controller class that will contain the functions that deal with the requests
        $route->controller = 'homepageController';
        //specify the name of the method that is called, the method should be the same as the action
        $route->method = 'show';
        //this adds the route to the routes array.
        $routes[] = $route;


        // Index Route
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;

        
        ///////// TASK/TODO ROUTES /////////
        
        
        // LIST ALL TASKS - index.php?page=tasks&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'all';
        $routes[] = $route;

        // SHOW ONE TASK - index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'show';
        $routes[] = $route;

        // DELETE 
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'delete';
        $routes[] = $route;

        // EDIT - SHOWS THE FORM
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'edit';
        $routes[] = $route;

        // EDIT - STORES THE TASK
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'update';
        $routes[] = $route;

        // CREATE - SHOWS THE FORM
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'create';
        $routes[] = $route;

        // CREATE - STORES THE TASK
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'tasks';
        $route->controller = 'tasksController';
        $route->method = 'store';
        $routes[] = $route;

        /////////// ACCOUNTS ROUTES //////////

                
        //LIST ALL ACCOUNTS index.php?page=accounts&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'all';
        $routes[] = $route;
        
        //SHOW ONE ACCOUNT index.php?page=accounts&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'show';
        $routes[] = $route;

    
        //LOGIN index.php?page=accounts&action=login
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'login';
        $routes[] = $route;

        //LOGOUT
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'logout';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'logout';
        $routes[] = $route;


        //DELETE 
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'delete';
        $routes[] = $route;

        //EDIT - SHOWS THE FORM
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'edit';
        $routes[] = $route;

        //EDIT - STORES THE ACCOUNT
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;

        //REGISTER ACCOUNT - SHOWS THE FORM
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'register';
        $routes[] = $route;

        //REGISTER - STORES THE ACCOUNT
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountsController';
        $route->method = 'store';
        $routes[] = $route;

        return $routes;
    }
}


class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}