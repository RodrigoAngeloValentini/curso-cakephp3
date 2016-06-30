<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        $users  = $this->paginate($this->Users);
        $this->set(['user'=>$users]);
        $this->set(compact('users'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();

        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                echo 'Salvo com sucesso';
            }else{
                echo 'Erro ao salvar';
            }
        }
        $this->set(compact('user'));
    }

    public function edit($id)
    {
        $user = $this->Users->get($id);

        if($this->request->is(['post','put'])){
            $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                echo 'Editado com sucesso';
            }else{
                echo 'Erro ao editar';
            }
        }
        $this->set(compact('user'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post','delete']);
        $user = $this->Users->get($id);
        if($this->Users->delete($user)){
            echo 'Removido com sucesso';
        }else{
            echo 'Erro ao excluir';
        }
        exit;
    }

}