<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

/*
    Rota de Utilidade
    [x] /ping - Responde com Pong

    - Rotas de Autenticação * Autenticação via TOKEN

        [ ] /user/signin -- Login
        [ ] /user/signup -- registro do usuário
        [ ] /user/me -- Informações do usuário logado

    - Rotas de configuração geral

        [x] /states - Listar os estados
        [x] /categories - Listar as categorias
        [x] - Crias seeders para os estados e categorias

    - Mensagens de erro devem conter:
        error: Mensagem descritiva do erro, exemplo:
        {
            error: 'Usuário inválido'
        }

        Sucesso:
        Deve conter um campo 'error' com o valor nulo ou vazio, exemplo:

        {
            error: ''
        }


    - Rotas de Ads

        [ ] /ad/list - Listar todos os anúncios
        [ ] /ad/:id - Dados de um anúncio
        [ ] /ad/add - Adicionar um anúncio
        [ ] /ad/:id (PUT) alterar um anúncio
        [ ] /ad/:id (DELETE) deletar um anúncio
        [ ] /ad/:id/:image Deletar a imagem de um anúncio


*/

Route::get('/ping', function(): JsonResponse {
    return response()->json(['Pong' => true]);
});

Route::get('/states', [StatesController::class , 'index']);
Route::get('/categories', [CategoriesController::class , 'index']);


Route::post('user/signup', [UserController::class, 'signup']);
Route::post('user/signin', [UserController::class, 'signin']);
Route::post('user/me', [UserController::class, 'me']);
// Route::get('/', function () {
//     return view('welcome');
// });

