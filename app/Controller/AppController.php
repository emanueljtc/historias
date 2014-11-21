<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
			'Session',
			'Auth'=> array(
				'loginRedirect'=> array(
					'controller' => 'post',
					'action' => 'index'
						),
				'logoutRedirect'=> array(
					'controller'=>'pages',
					'action'=>'display',
					'home'
					),
				
				)
	);
	
}
