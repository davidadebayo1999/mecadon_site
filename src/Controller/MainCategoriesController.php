<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MainCategories Controller
 *
 * @property \App\Model\Table\MainCategoriesTable $MainCategories
 */
class MainCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mainCategories = $this->paginate($this->MainCategories);

        $this->set(compact('mainCategories'));
        $this->set('_serialize', ['mainCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Main Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mainCategory = $this->MainCategories->get($id, [
            'contain' => ['SubCategories']
        ]);

        $this->set('mainCategory', $mainCategory);
        $this->set('_serialize', ['mainCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mainCategory = $this->MainCategories->newEntity();
        if ($this->request->is('post')) {
            $mainCategory = $this->MainCategories->patchEntity($mainCategory, $this->request->data);
            if ($this->MainCategories->save($mainCategory)) {
                $this->Flash->success(__('The main category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main category could not be saved. Please, try again.'));
        }
        $this->set(compact('mainCategory'));
        $this->set('_serialize', ['mainCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Main Category id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mainCategory = $this->MainCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mainCategory = $this->MainCategories->patchEntity($mainCategory, $this->request->data);
            if ($this->MainCategories->save($mainCategory)) {
                $this->Flash->success(__('The main category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main category could not be saved. Please, try again.'));
        }
        $this->set(compact('mainCategory'));
        $this->set('_serialize', ['mainCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Main Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mainCategory = $this->MainCategories->get($id);
        if ($this->MainCategories->delete($mainCategory)) {
            $this->Flash->success(__('The main category has been deleted.'));
        } else {
            $this->Flash->error(__('The main category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
