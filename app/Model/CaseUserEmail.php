<?php

class CaseUserEmail extends AppModel {

    var $name = 'CaseUserEmail';

    function getEmailUsers($easyCaseId = NULL) {
	if (isset($easyCaseId)) {
	    $this->recursive = -1;
	    return $this->find('list', array('conditions' => array('CaseUserEmail.easycase_id' => $easyCaseId, 'CaseUserEmail.ismail' => 1), 'fields' => array('CaseUserEmail.user_id')));
	}
    }

}

?>