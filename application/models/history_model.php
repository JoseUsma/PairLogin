<?php

class HistoryModel
{
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function create($log_type=1,$description='')
    {
        //$note_text = strip_tags($note_text);

        $sql = "INSERT INTO web_usr_log_info (user_id, remote_address,user_name,company_name,requested_on,log_type,description) VALUES 
							(:user_id, :remote_address, :user_name, :company_name, NOW(), :log_type, :description)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id'), 
						':remote_address' => Session::get('user_remote_address'),
						':user_name' => Session::get('user_name'),
						':company_name' =>Session::get('company_name'),
						':log_type' => $log_type,
						':description' => $description));
		$_SESSION['usr_log_id'] = $this->db->lastInsertId();
        /*
		$count =  $query->rowCount();
        if ($count == 1) {
            $_SESSION["feedback_positive"][] = FEEDBACK_NOTE_CREATION_SUCCESS;
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_NOTE_CREATION_FAILED;
        }
        // default return
		*/
        return $_SESSION['usr_log_id'];
    }    
}
