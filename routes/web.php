<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',[
    'uses'=> 'PagesController@new'

]);

Route::get('/todos',[
    'uses'=> 'TodosController@index',
    'as'=>'todos'
]);

Route::post('/create/todos',[
    'uses'=> 'TodosController@store',

]);


Route::get('/todos/delete/{id}',[
    'uses'=> 'TodosController@delete',
    'as'=> 'todo.delete'
]);

Route::get('/todos/update/{id}',[
    'uses'=> 'TodosController@update',
    'as'=> 'todo.update'
]);

Route::post('/todos/save/{id}',[
    'uses'=> 'TodosController@save',
    'as'=> 'todo.save'
]);
