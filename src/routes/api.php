<?php

namespace src\routes;

use src\controller\ControllerUser;

Router::post('/user/register', function() {
    $oControllerUser = new ControllerUser();
    $oControllerUser->store();
});