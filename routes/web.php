<?php

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

        [ ] /states - Listar os estados
        [ ] /categories - Listar as categorias

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

// Route::get('/', function () {
//     return view('welcome');
// });

