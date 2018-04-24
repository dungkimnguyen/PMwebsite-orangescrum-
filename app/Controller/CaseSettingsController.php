<?php
App::uses('AppController', 'Controller');
class CaseSettingsController extends AppController {
	public $name = 'CaseSettings';
	
    var $paginate = array();

 	function add(){

		$this->loadModel('Project');
		$prj=$this->Project->query("SELECT Project.name,Project.id FROM projects AS Project inner JOIN project_users AS ProjectUser ON(ProjectUser.user_id='".SES_ID."' AND ProjectUser.project_id=Project.id)");
		$this->set('prj',$prj);
	}

	function getdetailscase(){

		$this->layout='ajax';
		$pjid = $this->params['data']['pjid'];
		$this->loadModel('CaseSetting');
		$csset = $this->CaseSetting->find('first',array('conditions'=>array('CaseSetting.project_id ='=>$pjid,'CaseSetting.user_id ='=>SES_ID)));
			if(!empty($csset) && count($csset)!=0){

				$this->set('csset',$csset);
			}else{
			
				$this->set('ntset','ntset');
			}
		$this->loadModel('Project');
		$this->loadModel('ProjectUser');
		$res =$this->Project->query("SELECT users.name,users.id,projects.uniq_id FROM users, project_users, projects WHERE projects.id =".$pjid." AND projects.id = project_users.project_id AND project_users.user_id = users.id");
		$this->set('res',$res);	
		$this->loadModel('Type');
		$typ = $this->Type->find('all');
		$this->set('typ',$typ);
			
	}
	function postdetailscase(){
		$this->layout='ajax';
		$this->params['data']['project_id']= $this->params['data']['pjid'];
		$this->params['data']['project_uniqid']= $this->params['data']['pjuniqid'];
		$this->params['data']['type_id'] = $this->params['data']['typid'];
		$this->params['data']['assign_to'] = $this->params['data']['asgn'];
		$this->params['data']['due_date'] = $this->params['data']['duedt'];
		$this->params['data']['priority'] = $this->params['data']['priority'];
		$this->params['data']['email']=implode(",",$this->params['data']['email']);
		$this->params['data']['user_id'] = $this->params['data']['case'];
			if($this->params['data']['id']==""){ 
				if($this->CaseSetting->save($this->params['data'])){
					$this->Session->write("SUCCESS","Project added successfully");
				}	
			}else{
				$this->CaseSetting->id=$this->params['data']['id'];
				if($this->CaseSetting->save($this->params['data'])){
					$this->Session->write("SUCCESS","Project added successfully");
				}
			}
	}
}   
?>
