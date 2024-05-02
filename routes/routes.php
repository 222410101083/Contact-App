<?php

class Routes
{
    public function run()
    {
        $router = new App();
        $router->setDefaultController('DashboardController');
        $router->setDefaultMethod('index');

        $router->get('/dashboard', ['DashboardController', 'index']);

        $router->get('/contact', ['contactController', 'index']);
        $router->get('/contact/add', ['contactController', 'create']);
        $router->post('/contact/store', ['contactController', 'store']);
        $router->get('/contact/update/{id}', ['contactController', 'show']);
        $router->post('/contact/edit/{id}', ['contactController', 'update']);
        $router->get('/contact/destroy/{id}', ['contactController', 'destroy']);
        $router->run();
    }
}
