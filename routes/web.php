<?php

use Illuminate\Support\Facades\Route;
use App\HTTp\Controllers\EtudiantController;
use App\HTTp\Controllers\TuteurController;
use App\HTTp\Controllers\TagController;
use App\HTTp\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);



Route::get('/delete-tuteur/{id}', [TuteurController::class, 'delete_tuteur']);
Route::get('/editer-tuteur/{id}', [TuteurController::class, 'editer_tuteur']);
Route::post('/editer/traitement', [TuteurController::class, 'editer_tuteur_traitement']);
Route::get('/tuteur', [TuteurController::class, 'liste_tuteur']);
Route::get('/ajout', [CommentController::class, 'ajout_comment']);
Route::get('/supprimer-comment/{id}', [CommentController::class, 'supprimer_comment']);

Route::get('/add', [TuteurController::class, 'add_tuteur']);
Route::post('/add/traitement', [TuteurController::class, 'add_tuteur_traitement']);

 




Route::get('/ajout', [TagController::class, 'ajout_tag']);
Route::post('/ajout/traitement', [TagController::class, 'ajout_tag_traitement']);

Route::get('/tag', [TagController::class, 'liste_tag']);


Route::get('/aj', [PostController::class, 'aj_post']);
Route::post('/aj/traitement', [PostController::class, 'aj_post_traitement']);

Route::get('/post', [PostController::class, 'liste_post']);
Route::get('/delete-post/{id}', [PostController::class, 'delete_post']);

Route::get('/edit-post/{id}', [PostController::class, 'edit_post']);
Route::post('/edit/traitement', [PostController::class, 'edit_post_traitement']);

 
