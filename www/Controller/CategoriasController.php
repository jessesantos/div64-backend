<?php
App::uses('AppController', 'Controller');

/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 * @property PaginatorComponent $Paginator
 */
class CategoriasController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array(
        'Paginator',
        'RequestHandler'
    );

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Categoria->recursive = 0;
        $this->set('categorias', $this->Paginator->paginate());
        $this->set('_serialize', array('categorias'));
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
        if (! $this->Categoria->exists($id)) {
            throw new NotFoundException(__('Categoria inválida'));
        }
        $options = array(
            'conditions' => array(
                'Categoria.' . $this->Categoria->primaryKey => $id
            )
        );
        $this->set('categoria', $this->Categoria->find('first', $options));
        $this->set('_serialize', array('categoria'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Categoria->create();
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('A categoria foi salva.'));
                return $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
                $this->Session->setFlash(__('A categoria não pode ser salva. Por favor, tente novamente.'));
            }
        }
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
        if (! $this->Categoria->exists($id)) {
            throw new NotFoundException(__('Categoria inválida'));
        }
        if ($this->request->is(array(
            'post',
            'put'
        ))) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('A categoria foi salva.'));
                return $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
                $this->Session->setFlash(__('A categoria não pode ser salva. Por favor, tente novamente.'));
            }
        } else {
            $options = array(
                'conditions' => array(
                    'Categoria.' . $this->Categoria->primaryKey => $id
                )
            );
            $this->request->data = $this->Categoria->find('first', $options);
        }
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
        $this->Categoria->id = $id;
        if (! $this->Categoria->exists()) {
            throw new NotFoundException(__('Categoria inválida'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Categoria->delete()) {
            $this->Session->setFlash(__('A categoria foi deletada.'));
        } else {
            $this->Session->setFlash(__('A categoria não pode ser deletada. Por favor, tente novamente.'));
        }
        return $this->redirect(array(
            'action' => 'index'
        ));
    }
}
