<?php

class TypeCompany extends AppModel {

    var $name = 'TypeCompany';
    function getSelTypes() {
	return $this->find("list", array("conditions" => array('TypeCompany.company_id' =>  SES_COMP ), 'fields' => array('TypeCompany.id', 'TypeCompany.type_id')));
    }
    function getTypes() {
	return $this->find("list", array("conditions" => array('TypeCompany.company_id' =>  SES_COMP )));
    }

}

?>