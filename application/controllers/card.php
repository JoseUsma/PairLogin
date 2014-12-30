<?php

/**
 * Class Card
 * The card controller. Here we create, read, update and delete (CRUD) example data.
 */
class Card extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions. If all of your pages should only
        // be usable by logged-in users: Put this line into libs/Controller->__construct
        Auth::handleLogin();
    }

    /**
     * This method controls what happens when you move to /card/index in your app.
     * Gets all cards (of the user).
     */
    public function index()
    {
        $card_model = $this->loadModel('Card');
		$this->view->result_count = $card_model->getCardsCount();
		//$USR_manager_results->get_companies_count($company_id,$sql_aux);
		$this->view->page = isset($_POST['page'])?$_POST['page']:1;
		$this->view->recordIni = ($this->view->page-1)* PAGE_ITEMS;
		$this->view->cards = $card_model->getCardsResult($this->view->recordIni,PAGE_ITEMS);
        
		$this->view->page_content = $this->view->cards;
	   $this->view->page_div = "searchresults";
	   $this->view->web_page = "card/page";
		
		$this->view->render('card/index');
    }
	
	 /**
     * This method controls what happens when you move to /card/new in your app.
     * Gets all cards (of the user).
     */
    public function make()
    {
        $this->view->render('card/make');
    }

	public function page()
    {

		$card_model = $this->loadModel('Card');
		$this->view->result_count= $card_model->getCardsCount();
		//$USR_manager_results->get_companies_count($company_id,$sql_aux);
		$this->view->page = isset($_POST['page'])?$_POST['page']:1;
		$this->view->recordIni = ($this->view->page-1)* PAGE_ITEMS;
		$this->view->cards = $card_model->getCardsResult($this->view->recordIni,PAGE_ITEMS);
        
		$this->view->page_content = $this->view->cards;
	    $this->view->page_div = "searchresults";
	    $this->view->web_page = "card/page";
		//var_dump($_POST['page']);

		$this->view->render('card/page',true);
    }
	
    /**
     * This method controls what happens when you move to /dashboard/create in your app.
     * Creates a new card. This is usually the target of form submit actions.
     */
    public function create()
    {
        // optimal MVC structure handles POST data in the controller, not in the model.
        // personally, I like POST-handling in the model much better (skinny controllers, fat models), so the login
        // stuff handles POST in the model. in this card-controller/model, the POST data is intentionally handled
        // in the controller, to show people how to do it "correctly". But I still think this is ugly.
        if (isset($_POST['card_name']) AND !empty($_POST['card_name'])) {
            $card_model = $this->loadModel('Card');
            $card_model->create($_POST['card_name'],$_POST['card_address1'],$_POST['card_address2'],$_POST['card_phone'],$_POST['card_fax'],$_POST['card_job_position']);
        }else{
			$_SESSION["feedback_negative"][] = FEEDBACK_CARD_CREATION_FAILED;
		}
		//var_dump($card_model);
        header('location: ' . URL . 'card');
    }

    /**
     * This method controls what happens when you move to /card/edit(/XX) in your app.
     * Shows the current content of the card and an editing form.
     * @param $card_id int id of the card
     */
    public function edit($card_id)
    {
        if (isset($card_id)) {
            // get the card that you want to edit (to show the current content)
            $card_model = $this->loadModel('Card');
            $this->view->card = $card_model->getCard($card_id);
            $this->view->render('card/edit');
        } else {
            header('location: ' . URL . 'card');
        }
    }

    /**
     * This method controls what happens when you move to /card/editsave(/XX) in your app.
     * Edits a card (performs the editing after form submit).
     * @param int $card_id id of the card
     */
    public function editSave($card_id)
    {
		$editSuccess = false;
        $card_model = $this->loadModel('Card');
        if (isset($_POST['card_name']) && !empty($_POST['card_name'])) {
            // perform the update: pass card_id from URL and card_text from POST
            $editSuccess = $card_model->editSave($card_id, $_POST['card_name'],$_POST['card_address1'],$_POST['card_address2'],$_POST['card_phone'],$_POST['card_fax'],$_POST['card_job_postion']);
        }else{
			$_SESSION["feedback_negative"][] = FEEDBACK_CARD_EDITING_FAILED;
		}
		if ($editSuccess)
			header('location: ' . URL . 'card');
		else{
			$this->view->card = $card_model->getCard($card_id);
            $this->view->render('card/edit');
		}
    }

    /**
     * This method controls what happens when you move to /card/delete(/XX) in your app.
     * Deletes a card. In a real application a deletion via GET/URL is not recommended, but for demo purposes it's
     * totally okay.
     * @param int $card_id id of the card
     */
    public function delete($card_id)
    {
        if (isset($card_id)) {
            // get the card that you want to edit (to show the current content)
            $card_model = $this->loadModel('Card');
            $this->view->card = $card_model->getCard($card_id);
            $this->view->render('card/delete');
        } else {
            header('location: ' . URL . 'card');
        }
    }
	/**
     * This method controls what happens when you move to /card/delete(/XX) in your app.
     * Deletes a card. In a real application a deletion via GET/URL is not recommended, but for demo purposes it's
     * totally okay.
     * @param int $card_id id of the card
     */
    public function deleteSave($card_id)
    {
        $deleteSuccess = false;
		if (isset($card_id)) {
            $card_model = $this->loadModel('Card');
            $deleteSuccess =$card_model->delete($card_id);
        }
        if ($deleteSuccess)
			header('location: ' . URL . 'card');
		else{
			$this->view->card = $card_model->getCard($card_id);
            $this->view->render('card/delete');
		}	
    }
}
