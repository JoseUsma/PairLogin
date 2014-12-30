<?php

/**
 * CardModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class CardModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    /**
     * Getter for all cards (cards are an implementation of example data, in a real world application this
     * would be data that the user has created)
     * @return array an array with several objects (the results)
     */
    public function getCardsCount()
    {
        $sql = "SELECT count(*) ResultCount FROM cards WHERE user_id = :user_id";
		//var_dump($sql);
        $query = $this->db->prepare($sql);
        $query->execute(array(':user_id' => $_SESSION['user_id']));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetch()->ResultCount;
    }    /**
     * Getter for all cards (cards are an implementation of example data, in a real world application this
     * would be data that the user has created)
     * @return array an array with several objects (the results)
     */
    public function getCardsResult($recordIni=1,$pageRecordLimit=30)
    {
        $sql = "SELECT * FROM cards 
				WHERE user_id = :user_id 
				  ORDER BY card_id DESC 
				  LIMIT $recordIni , $pageRecordLimit ";
				// LIMIT :record_ini ,:record_limit";
		//var_dump($sql);
		 $query = $this->db->prepare($sql);
        //$query->execute(array(':user_id' => $_SESSION['user_id'],':record_ini' => $recordIni,':record_limit' => $pageRecordLimit));
		$query->execute(array(':user_id' => $_SESSION['user_id']));
		//$query->execute(array(':user_id' => $_SESSION['user_id'],':record_ini' => $recordIni));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }
    /**
     * Getter for all cards (cards are an implementation of example data, in a real world application this
     * would be data that the user has created)
     * @return array an array with several objects (the results)
     */
    public function getAllCards()
    {
        $sql = "SELECT * FROM cards WHERE user_id = :user_id ORDER BY card_id DESC";
        $query = $this->db->prepare($sql);
        $query->execute(array(':user_id' => $_SESSION['user_id']));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    /**
     * Getter for a single card
     * @param int $card_id id of the specific card
     * @return object a single object (the result)
     */
    public function getCard($card_id)
    {
        $sql = "SELECT * FROM cards WHERE user_id = :user_id AND card_id = :card_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':user_id' => $_SESSION['user_id'], ':card_id' => $card_id));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    /**
     * Setter for a card (create)
     * @param string $card_address1 card text that will be created
     * @return bool feedback (was the card created properly ?)
     */
    public function create($card_name,$card_address1,$card_address2,$card_phone,$card_fax,$card_job_position)
    {
        // clean the input to prevent for example javascript within the cards.
        $card_address1 = strip_tags($card_address1);

        $sql = "INSERT INTO cards (card_name,card_address1,card_address2,card_phone,card_fax,card_job_position, user_id) 
		VALUES (:card_name, :card_address1,:card_address2,:card_phone,:card_fax,:card_job_position, :user_id)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':card_name' => $card_name,
						':card_name' => $card_name,
						':card_address1' => $card_address1,
						':card_address2' => $card_address2,
						':card_phone' => $card_phone,
						':card_fax' => $card_fax,
						':card_job_position' => $card_job_postion,
						':user_id' => $_SESSION['user_id']));

        $count =  $query->rowCount();
        if ($count == 1) {
            $_SESSION["feedback_positive"][] = FEEDBACK_CARD_CREATION_SUCCESS;
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_CARD_CREATION_FAILED;
        }
        // default return
        return false;
    }

    /**
     * Setter for a card (update)
     * @param int $card_id id of the specific card
     * @param string $card_address1 new text of the specific card
     * @return bool feedback (was the update successful ?)
     */
    public function editSave($card_id, $card_name, $card_address1,$card_address2,$card_phone,$card_fax,$card_job_position)
    {
        // clean the input to prevent for example javascript within the cards.
        $card_address1 = strip_tags($card_address1);

        $sql = "UPDATE cards SET card_name = :card_name, 
						card_address1 = :card_address1,
						card_address2 = :card_address2,
						card_phone = :card_phone,
						card_fax = :card_fax,
						card_job_position = :card_job_position
						WHERE card_id = :card_id AND user_id = :user_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':card_id' => $card_id,
		':card_name' => $card_name,
		':card_address1' => $card_address1,
		':card_address2' => $card_address2,
		':card_phone' => $card_phone,
		':card_fax' => $card_fax,
		':card_job_position' => $card_job_postion,
		':user_id' => $_SESSION['user_id']));

        $count =  $query->rowCount();
        if ($count == 1) {
			$_SESSION["feedback_positive"][] = FEEDBACK_CARD_EDITING_SUCCESS;
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_CARD_EDITING_FAILED;
        }
        // default return
        return false;
    }

    /**
     * Deletes a specific card
     * @param int $card_id id of the card
     * @return bool feedback (was the card deleted properly ?)
     */
    public function delete($card_id)
    {
        $sql = "DELETE FROM cards WHERE card_id = :card_id AND user_id = :user_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':card_id' => $card_id, ':user_id' => $_SESSION['user_id']));

        $count =  $query->rowCount();

        if ($count == 1) {
            $_SESSION["feedback_positive"][] = FEEDBACK_CARD_DELETION_SUCCESS;
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_CARD_DELETION_FAILED;
        }
        // default return
        return false;
    }
}
