<?php
App::uses('AppModel', 'Model');

/**
 * Produto Model
 *
 * @property Categoria $Categoria
 */
class Produto extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'categoria_id' => array(
            'notEmpty' => array(
                'rule' => array(
                    'notEmpty'
                )
            )
        )
        // 'message' => 'Your custom message here',
        // 'allowEmpty' => false,
        // 'required' => false,
        // 'last' => false, // Stop validation after this rule
        // 'on' => 'create', // Limit validation to 'create' or 'update' operations
        
        ,
        'slug' => array(
            'notEmpty' => array(
                'rule' => array(
                    'notEmpty'
                )
            )
        )
        // 'message' => 'Your custom message here',
        // 'allowEmpty' => false,
        // 'required' => false,
        // 'last' => false, // Stop validation after this rule
        // 'on' => 'create', // Limit validation to 'create' or 'update' operations
        
        ,
        'nome' => array(
            'notEmpty' => array(
                'rule' => array(
                    'notEmpty'
                )
            )
        )
        // 'message' => 'Your custom message here',
        // 'allowEmpty' => false,
        // 'required' => false,
        // 'last' => false, // Stop validation after this rule
        // 'on' => 'create', // Limit validation to 'create' or 'update' operations
        
        ,
        'preco' => array(
            'numeric' => array(
                'rule' => array(
                    'numeric'
                )
            )
        )
        // 'message' => 'Your custom message here',
        // 'allowEmpty' => false,
        // 'required' => false,
        // 'last' => false, // Stop validation after this rule
        // 'on' => 'create', // Limit validation to 'create' or 'update' operations
        
        ,
        'thumbnail' => array(
            'notEmpty' => array(
                'rule' => array(
                    'notEmpty'
                )
            )
        )
        // 'message' => 'Your custom message here',
        // 'allowEmpty' => false,
        // 'required' => false,
        // 'last' => false, // Stop validation after this rule
        // 'on' => 'create', // Limit validation to 'create' or 'update' operations
        
        
    );
    
    // The Associations below have been created with all possible keys, those that are not needed can be removed
    
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'categoria_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
