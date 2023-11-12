<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action
{
    public function timeline()
    {
        session_start();

        if ($_SESSION['id'] == '' && $_SESSION['nome'] == '') {
            header("Location: /?login=erro");
        } else {
            $this->render("timeline");
        }
    }
}
?>