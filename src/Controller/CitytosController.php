<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Citytos Controller
 *
 * @property \App\Model\Table\CitytosTable $Citytos
 *
 * @method \App\Model\Entity\Cityto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CitytosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $citytos = $this->paginate($this->Citytos);

        $this->set(compact('citytos'));
    }

    /**
     * View method
     *
     * @param string|null $id Cityto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cityto = $this->Citytos->get($id, [
            'contain' => ['Distances']
        ]);

        $this->set('cityto', $cityto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cityto = $this->Citytos->newEntity();
        if ($this->request->is('post')) {
            $cityto = $this->Citytos->patchEntity($cityto, $this->request->getData());
            if ($this->Citytos->save($cityto)) {
                $this->Flash->success(__('The cityto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cityto could not be saved. Please, try again.'));
        }
        $this->set(compact('cityto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cityto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cityto = $this->Citytos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cityto = $this->Citytos->patchEntity($cityto, $this->request->getData());
            if ($this->Citytos->save($cityto)) {
                $this->Flash->success(__('The cityto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cityto could not be saved. Please, try again.'));
        }
        $this->set(compact('cityto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cityto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cityto = $this->Citytos->get($id);
        if ($this->Citytos->delete($cityto)) {
            $this->Flash->success(__('The cityto has been deleted.'));
        } else {
            $this->Flash->error(__('The cityto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
