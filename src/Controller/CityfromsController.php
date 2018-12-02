<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cityfroms Controller
 *
 * @property \App\Model\Table\CityfromsTable $Cityfroms
 *
 * @method \App\Model\Entity\Cityfrom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CityfromsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cityfroms = $this->paginate($this->Cityfroms);

        $this->set(compact('cityfroms'));
    }

    /**
     * View method
     *
     * @param string|null $id Cityfrom id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cityfrom = $this->Cityfroms->get($id, [
            'contain' => ['Distances']
        ]);

        $this->set('cityfrom', $cityfrom);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cityfrom = $this->Cityfroms->newEntity();
        if ($this->request->is('post')) {
            $cityfrom = $this->Cityfroms->patchEntity($cityfrom, $this->request->getData());
            if ($this->Cityfroms->save($cityfrom)) {
                $this->Flash->success(__('The cityfrom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cityfrom could not be saved. Please, try again.'));
        }
        $this->set(compact('cityfrom'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cityfrom id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cityfrom = $this->Cityfroms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cityfrom = $this->Cityfroms->patchEntity($cityfrom, $this->request->getData());
            if ($this->Cityfroms->save($cityfrom)) {
                $this->Flash->success(__('The cityfrom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cityfrom could not be saved. Please, try again.'));
        }
        $this->set(compact('cityfrom'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cityfrom id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cityfrom = $this->Cityfroms->get($id);
        if ($this->Cityfroms->delete($cityfrom)) {
            $this->Flash->success(__('The cityfrom has been deleted.'));
        } else {
            $this->Flash->error(__('The cityfrom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
