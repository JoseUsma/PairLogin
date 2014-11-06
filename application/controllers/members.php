<?php

/**
 * Class members
 * This controller shows the (public) account data of one or all user(s)
 */
class members extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /members/index in your app.
     * Shows a list of all users.
     */
    function index()
    {
        $members_model = $this->loadModel('members');
        $this->view->users = $members_model->getAllUsersProfiles();
        $this->view->render('members/index');
    }

    /**
     * This method controls what happens when you move to /members/showuserprofile in your app.
     * Shows the (public) details of the selected user.
     * @param $user_id int id the the user
     */
    function showUserProfile($user_id)
    {
        if (isset($user_id)) {
            $members_model = $this->loadModel('members');
            $this->view->user = $members_model->getUserProfile($user_id);
            $this->view->render('members/showuserprofile');
        } else {
            header('location: ' . URL);
        }
    }
}
