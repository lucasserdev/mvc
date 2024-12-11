<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function addAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0) {
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
            }
        }

        $this->redirect('/novo');
    }

    public function edit($args) {
        $usuario = Usuario::select()->where('id', $args['id'])->one();

        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }

    public function editAction($args) {
        $nome = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email) {
            Usuario::update()->set('nome', $nome)->set('email', $email)->where('id', $args['id'])->execute();

            $this->redirect('/');
        }

        $this->redirect('/usuario/'.$args['id'].'/edit');
    }

    public function del($args) {
        Usuario::delete()->where('id', $args['id'])->execute();

        $this->redirect('/');
    }

}