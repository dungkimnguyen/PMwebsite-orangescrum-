<?php

class Type extends AppModel {

    var $name = 'Type';
   
    function getAllTypes() {
	$sql = "SELECT GROUP_CONCAT(DISTINCT id SEPARATOR ',') AS project_ids FROM projects WHERE company_id=". SES_COMP;
	$data = $this->query($sql);
	$res = "";
	if (isset($data['0']['0']['project_ids']) && !empty($data['0']['0']['project_ids'])) {
	    $sql = "SELECT Total.*, Type.* FROM (SELECT Easycase.type_id, COUNT(Easycase.id) AS cnt FROM easycases AS Easycase
	    WHERE Easycase.project_id IN (".$data['0']['0']['project_ids'].") AND Easycase.istype=1 GROUP BY Easycase.type_id) AS Total
	    RIGHT JOIN types AS Type ON (Type.id=Total.type_id) WHERE Type.company_id = ". SES_COMP ." OR Type.company_id = 0 ORDER BY Type.company_id DESC, Type.seq_order ASC";
	    $res = $this->query($sql);
	}
	return $res;
	//return $this->find("all", array("conditions" => array(1, '(Type.company_id = 0 OR Type.company_id =' . SES_COMP . ')')));
    }
    
    function getDefaultTypes() {
	return $this->find("all", array("conditions" => array('Type.company_id' =>  0 )));
    }

}

?>