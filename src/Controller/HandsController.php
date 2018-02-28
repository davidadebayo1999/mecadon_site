<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hands Controller
 *
 * @property \App\Model\Table\HandsTable $Hands
 */
class HandsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hands = $this->paginate($this->Hands);

        $this->set(compact('hands'));
        $this->set('_serialize', ['hands']);
    }

    /**
     * View method
     *
     * @param string|null $id Hand id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hand = $this->Hands->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('hand', $hand);
        $this->set('_serialize', ['hand']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hand = $this->Hands->newEntity();
        if ($this->request->is('post')) {
            $hand = $this->Hands->patchEntity($hand, $this->request->data);
            if ($this->Hands->save($hand)) {
                $this->Flash->success(__('The hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hand could not be saved. Please, try again.'));
        }
        $products = $this->Hands->Products->find('list', ['limit' => 200]);
        $this->set(compact('hand', 'products'));
        $this->set('_serialize', ['hand']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hand id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hand = $this->Hands->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hand = $this->Hands->patchEntity($hand, $this->request->data);
            if ($this->Hands->save($hand)) {
                $this->Flash->success(__('The hand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hand could not be saved. Please, try again.'));
        }
        $products = $this->Hands->Products->find('list', ['limit' => 200]);
        $this->set(compact('hand', 'products'));
        $this->set('_serialize', ['hand']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hand id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hand = $this->Hands->get($id);
        if ($this->Hands->delete($hand)) {
            $this->Flash->success(__('The hand has been deleted.'));
        } else {
            $this->Flash->error(__('The hand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
