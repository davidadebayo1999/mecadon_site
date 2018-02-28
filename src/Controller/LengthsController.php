<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lengths Controller
 *
 * @property \App\Model\Table\LengthsTable $Lengths
 */
class LengthsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $lengths = $this->paginate($this->Lengths);

        $this->set(compact('lengths'));
        $this->set('_serialize', ['lengths']);
    }

    /**
     * View method
     *
     * @param string|null $id Length id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $length = $this->Lengths->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('length', $length);
        $this->set('_serialize', ['length']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $length = $this->Lengths->newEntity();
        if ($this->request->is('post')) {
            $length = $this->Lengths->patchEntity($length, $this->request->data);
            if ($this->Lengths->save($length)) {
                $this->Flash->success(__('The length has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The length could not be saved. Please, try again.'));
        }
        $products = $this->Lengths->Products->find('list', ['limit' => 200]);
        $this->set(compact('length', 'products'));
        $this->set('_serialize', ['length']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Length id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $length = $this->Lengths->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $length = $this->Lengths->patchEntity($length, $this->request->data);
            if ($this->Lengths->save($length)) {
                $this->Flash->success(__('The length has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The length could not be saved. Please, try again.'));
        }
        $products = $this->Lengths->Products->find('list', ['limit' => 200]);
        $this->set(compact('length', 'products'));
        $this->set('_serialize', ['length']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Length id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $length = $this->Lengths->get($id);
        if ($this->Lengths->delete($length)) {
            $this->Flash->success(__('The length has been deleted.'));
        } else {
            $this->Flash->error(__('The length could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
