<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Distances Controller
 *
 * @property \App\Model\Table\DistancesTable $Distances
 *
 * @method \App\Model\Entity\Distance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistancesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($name_from = null, $name_to = null)
    {
        // формируем редиректы, если приходит get запрос в виде ?name_ftom=< >&name_to=< >
        if($this->request->is('get')){
            $get_from = h($this->request->getQuery('name_from'));
            $get_to   = h($this->request->getQuery('name_to'));
            if(!empty($get_from) and !empty($get_to)) {
                return $this->redirect(['action' => 'index', $get_from, $get_to]);
            }elseif (!empty($get_from)){
                return $this->redirect(['action' => 'index', $get_from]);
            }elseif (!empty($get_to)) {
                return $this->redirect(['action' => 'index', $get_to]);
            }
        }

        if($name_from){
            if($name_to){
                $cityfrom = $this->Distances->Cityfroms->find('all')->where(['name LIKE' => h($name_from)])->first();
                $cityto = $this->Distances->Citytos->find('all')->where(['name LIKE' => h($name_to)])->first();
                $distance = $this->Distances->find('all')->andWhere(['cityfrom_id' => $cityfrom->id])->andWhere(['cityto_id' => $cityto->id])->first();

            }else{
                // спрашиваем куда, подставив известное откуда
                $cityfrom = $this->Distances->Cityfroms->find('all')->where(['name LIKE' => h($name_from)])->first();
            }

        }else{
            // спрашиваем откуда и куда, по умолчанию откуда "Москва"

        }
        $citylist = $this->Distances->Cityfroms->find('all')->toArray();

        $this->set(compact('distance', 'cityfrom', 'cityto','citylist'));
    }

    /**
     * View method
     *
     * @param string|null $id Distance id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $distance = $this->Distances->get($id, [
            'contain' => ['Cityfroms', 'Citytos']
        ]);

        $this->set('distance', $distance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $distance = $this->Distances->newEntity();
        if ($this->request->is('post')) {
            $distance = $this->Distances->patchEntity($distance, $this->request->getData());
            if ($this->Distances->save($distance)) {
                $this->Flash->success(__('The distance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The distance could not be saved. Please, try again.'));
        }
        $cityfroms = $this->Distances->Cityfroms->find('list', ['limit' => 200]);
        $citytos = $this->Distances->Citytos->find('list', ['limit' => 200]);
        $this->set(compact('distance', 'cityfroms', 'citytos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Distance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $distance = $this->Distances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $distance = $this->Distances->patchEntity($distance, $this->request->getData());
            if ($this->Distances->save($distance)) {
                $this->Flash->success(__('The distance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The distance could not be saved. Please, try again.'));
        }
        $cityfroms = $this->Distances->Cityfroms->find('list', ['limit' => 200]);
        $citytos = $this->Distances->Citytos->find('list', ['limit' => 200]);
        $this->set(compact('distance', 'cityfroms', 'citytos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Distance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $distance = $this->Distances->get($id);
        if ($this->Distances->delete($distance)) {
            $this->Flash->success(__('The distance has been deleted.'));
        } else {
            $this->Flash->error(__('The distance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
