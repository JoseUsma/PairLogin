<?php

class ApplicationLog extends Controller
{
    
    function history_log($type,$description)
    {
        // run the login() method in the login-model, put the result in $login_successful (true or false)
        $history_model = $this->loadModel('History');
        return $history_model->create($type,$description);
    }
}
