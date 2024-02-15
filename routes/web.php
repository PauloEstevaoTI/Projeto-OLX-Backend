<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StatesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

