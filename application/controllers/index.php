<?php

/**
 * Class Index
 * The index controller
 */
class Index extends Controller
{
    /**
     * Construct this object by extending the Controller class
     */
    function __construct()
    {
            parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index, which is the same like URL/index or in this
     * case even URL (without any controller/action) as this is the default controller-action when user gives no input.
     */
    function index()
    {
        if (isset($_SESSION['user_logged_in'])){
			$login_model = $this->loadModel('Login');
			$this->view->account_type= $login_model->getUserAccountType(Session::get('user_account_type'));
		}
		$this->view->render('index/index');			
    }
}
