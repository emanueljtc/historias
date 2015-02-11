<?php
App::uses('AppModel', 'Model');
/**
 * Historium Model
 *
 * @property Paciente $Paciente
 */

// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

class Historium extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'paciente_id';

	public $actsAs = array(
			'Upload.Upload' => array(
				'foto'=> array ( 
					'fields' => array(
						'dir'=>'foto_dir'
						),
							'thumbnailMethod'=>'php',
							'thumbnailSizes' => array(
								'vga' => '400x400',
								 'thumb'=>'80x80'
								 ),
								'deleteOnUpdate' => true,
								'deleteFolderOnDelete' => true
					   )
				)
		);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'paciente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enfermedad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		 'foto' => array(
         'rule' => array('isValidMimeType', array('image/jpeg', 'image/png' , 'image/gif')),
         'message' => 'El Archivo no es jpg, png ni gif'
       ),
		 'isBelowMaxSize'=> array(
         'rule' => array('isBelowMaxSize', 1024),
         'message' => 'El Archivo supera el limite de peso en MB'
    ),
		 'isValidExtension'=> array(
         'rule' => array('isValidExtension', array('pdf', 'png', 'gif')),
         'message' => 'El Archivo no tiene extension jpg, png ni gif'
    ),
		 

		'observaciones' => array (
				'notEmpty' => array(
				'rule' => array('notEmpty'),
		),
	),

	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
