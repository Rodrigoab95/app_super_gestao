<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});

*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
//nome, categoria, assunto, mensagem


/*

Acrescentando '?' no fim do parâmetro a fim de ser opcional

Route::get('/contato/{nome}/{categoria}/{assunto?}/{mensagem?}', 
function(
    string $nome,
    string $categoria,
    string $assunto = 'Assunto',
    string $mensagem = 'mensagem não informada!'
    ){
        echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});
*/

/*

where = especificando o tipo de caractere para que seja ao menos um dos tipos,
sendo where('parâmetro','opção desejada')

Route::get('/contato/{nome}/{categoria_id}', 
function(
    string $nome,
    int $categoria_id = 1 // 1 - Informação
    ){
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
*/
