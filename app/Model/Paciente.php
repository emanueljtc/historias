<?php
App::uses('AppModel', 'Model');
/**
 * Paciente Model
 *
 * @property Historium $Historium
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
class Paciente extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'paciente';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dni';
	//FUNCION UPLOAD
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
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellido' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dni' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'edad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo Numerico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nacionalidad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ciudad' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'direccion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_nacimiento' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Campo Requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefono' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo Numerico',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'g_sanguineo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Requerido',
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Historium' => array(
			'className' => 'Historium',
			'foreignKey' => 'paciente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
