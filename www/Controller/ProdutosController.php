<?php
App::uses('AppController', 'Controller');

/**
 * Produtos Controller
 *
 * @property Produto $Produto
 * @property PaginatorComponent $Paginator
 */
class ProdutosController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array(
        'Paginator'
    );

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Produto->recursive = 0;
        $this->set('produtos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id            
     * @return void
     */
    public function view($id = null)
    {
        if (! $this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto inválido'));
        }
        $options = array(
            'conditions' => array(
                'Produto.' . $this->Produto->primaryKey => $id
            )
        );
        $this->set('produto', $this->Produto->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Produto->create();
            if ($this->Produto->save($this->request->data)) {
                $this->Session->setFlash(__('O produto foi salvo.'));
                return $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
                $this->Session->setFlash(__('O produto não pode ser salvo, tente novamente.'));
            }
        }
        
        $categorias = $this->Produto->Categoria->find('list');
        $this->set(compact('categorias'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id            
     * @return void
     */
    public function edit($id = null)
    {
        if (! $this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto inválido'));
        }
        if ($this->request->is(array(
            'post',
            'put'
        ))) {
            if ($this->Produto->save($this->request->data)) {
                $this->Session->setFlash(__('O produto foi salvo'));
                return $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
                $this->Session->setFlash(__('O produto não pode ser salvo, tente novamente.'));
            }
        } else {
            $options = array(
                'conditions' => array(
                    'Produto.' . $this->Produto->primaryKey => $id
                )
            );
            $this->request->data = $this->Produto->find('first', $options);
        }
        $categorias = $this->Produto->Categoria->find('list');
        $this->set(compact('categorias'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id            
     * @return void
     */
    public function delete($id = null)
    {
        $this->Produto->id = $id;
        if (! $this->Produto->exists()) {
            throw new NotFoundException(__('Produto inválido'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Produto->delete()) {
            $this->Session->setFlash(__('O produto foi deletado.'));
        } else {
            $this->Session->setFlash(__('O produto não pode ser deletado. Por favor, tente novamente.'));
        }
        return $this->redirect(array(
            'action' => 'index'
        ));
    }
}
