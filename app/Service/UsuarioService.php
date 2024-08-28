<?php

namespace App\Service;

use App\Models\Usuario;

class UsuarioService
{
    public function create(array $dados)
    {
        $user = Usuario::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'password' => $dados['password']

        ]);
        return $user;
    }

    public function update(array $dados)
    {
<<<<<<< HEAD
        $usuario = Usuario::find($dados['id']);
=======
        $usuario = Usuario::find(
            $dados['id']
        );

>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'usuario nao encontrado'
            ];
        }
<<<<<<< HEAD
if (isset($dados['password'])){
$usuario->password = $dados['password'];
}

if (isset($dados['nome'])){
    $usuario->nome = $dados['nome'];
    
    }
    
    if (isset($dados['email'])){
        $usuario->email = $dados['email'];
        
        }






=======
        if (isset($dados['password'])) {
            $usuario->password = $dados['password'];

        }

        if (isset($dados['nome'])) {
            $usuario->nome = $dados['nome'];
        
        }

        if (isset($dados['email'])){
            $usuario->email = $dados['email'];
    
        }
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
        $usuario->save();

        return [
            'status' => true,
<<<<<<< HEAD
            'message' => 'atualizado com sucesso'
=======
            'message' => 'Atualizando com sucesso'
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
        ];
    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario == null) {
            return [
                'status' => false,
<<<<<<< HEAD
                'message' => 'usuario nao encontrado '
=======
                'message' => 'usuario nao encontrado'
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
            ];
        }
        $usuario->delete();

        return [
            'status' => true,
<<<<<<< HEAD
            'message' => 'usuario excluido com sucesso'
        ];
    }


    public function findById($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario == null) {
            return [
                'status' => false,
                'mensagem' => 'Usuario nao encontrado'
=======
            'message' => 'Usuario excluido com sucesso'
        ];
    }

    public function findyById($id)
    {
        $usuario = Usuario::find($id);

        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'Usuario nao encontrado'
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
            ];
        }

        return [
            'status' => true,
            'message' => 'Usuario encontrado',
            'data' => $usuario
        ];
    }

    public function getAll()
    {
        $usuarios = Usuario::all();
<<<<<<< HEAD
        return ['status' => true, 'message' => 'Pesquisa efetuada com sucesso', 'data' => $usuarios];
=======

        return [
            'status' => true,
            'message' => 'Pesquisa efetuada com sucesso',
            'data' => $usuarios
        ];
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
    }

    public function searchByName($nome)
    {
        $usuarios = Usuario::where('nome', 'like', '%' . $nome . '%')->get();

        if ($usuarios->isEmpty()) {
            return [
                'status' => false,
<<<<<<< HEAD
                'message' => 'sem Resultados'

=======
                'message' => 'sem resultados'
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
            ];
        }

        return [
            'status' => true,
            'message' => 'Resultados Encontrados',
            'data' => $usuarios
        ];
    }

    public function searchByEmail($email)
    {
        $usuarios = Usuario::where('email', 'like', '%' . $email . '%')->get();
<<<<<<< HEAD

        if ($usuarios->isEmpty()) {

            return [
                'status' => false,
                'message' => 'sem Resultados'

=======
        if ($usuarios->isEmpty()) {
            return [
                'status' => false,
                'message' => 'sem resultados'
>>>>>>> 7264244172f249599a309deb2589bc6d6fdc7ce1
            ];
        }

        return [
            'status' => true,
            'message' => 'Resultados Encontrados',
            'data' => $usuarios
        ];
    }
}
