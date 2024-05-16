<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\registerEnsController;
use App\Http\Controllers\connectController;
use App\Http\Controllers\ElistController;
use App\Http\Controllers\EnsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtdController;
use App\Http\Controllers\ParController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\NmoduleController;
use App\Http\Controllers\PlistController;
use App\Http\Controllers\AdlistController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmploisController;
use App\Http\Controllers\EnsEmploisController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\BiblioController;
use App\Http\Controllers\EnsBiblioController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\QandRController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\EtdEmploisController;
use App\Http\Controllers\EtdExamController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\QcmController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/firstregister', [registerController::class, 'firstregister'])->name('firstregister');



/*
 */

#routes register etudiants
Route::get('/register', [EtdController::class, 'create'])->name('register');
Route::post('/store', [EtdController::class, 'store'])->name('store');

#routes register enseignants
Route::get('/registerEns', [EnsController::class, 'create'])->name('registerEns');
Route::post('/storeEns', [EnsController::class, 'store'])->name('storeEns');

#routes register parents
Route::get('/registerPar', [ParController::class, 'create'])->name('registerPar');
Route::post('/storePar', [ParController::class , 'store'])->name('storePar');

#routes register Administrateur
Route::get('/registerAdm', [AdmController::class, 'create'])->name('registerAdm');
Route::post('/storeAdm', [AdmController::class , 'store'])->name('storeAdm');

#routes connect etudiants
Route::get('/showconnect', [connectController::class, 'show'])->name('showconnect');
Route::post('/connect', [connectController::class, 'connect'])->name('connect');

#routes connect enseignants
Route::get('/showEns', [connectController::class, 'showEns'])->name('showEns');
Route::post('connectEns', [connectController::class, 'connectEns'])->name('connectEns');

#routes connect parents
Route::get('/showPar', [connectController::class, 'showPar'])->name('showPar');
Route::post('/connectPar', [connectController::class, 'connectPar'])->name('connectPar');

#routes connect admins
Route::get('/showAdm', [connectController::class, 'showAdm'])->name('showAdm');
Route::post('/connectAdm', [connectController::class, 'connectAdm'])->name('connectAdm');

#middleware 
######################################################
    
#profile
Route::get('/profile', [EtdController::class, 'profile'])->name('profile');
Route::get('/Admprofile', [AdmController::class, 'Admprofile'])->name('Admprofile');
Route::get('/Ensprofile', [EnsController::class, 'Ensprofile'])->name('Ensprofile');
Route::get('/Parprofile', [ParController::class, 'Parprofile'])->name('Parprofile');

#route EtdController
Route::resource('etudiants', EtdController::class);

#route EnsController
Route::resource('enseignants', EnsController::class);

#route ParController
Route::resource('parents', ParController::class);

#route AdmController
Route::resource('administrateurs', AdmController::class);


#route nmodules
Route::resource('nmodules',NmoduleController::class);

#route elists
Route::resource('elists',ElistController::class);

#route emplois

Route::controller(EmploisController::class)->prefix('Emplois')->group(function () {
    Route::get('', 'index')->name('Emplois');
    Route::get('create', 'create')->name('Emplois.create');
    Route::post('store', 'store')->name('Emplois.store');
    Route::get('edit/{id}', 'edit')->name('Emplois.edit');
    Route::put('edit/{id}', 'update')->name('Emplois.update');
    Route::delete('destroy/{id}', 'destroy')->name('Emplois.destroy');
});


#Route::get('etudiants', EtdController::class)->name('etudiants');
Route::controller(EtdController::class)->prefix('Etd')->group(function () {
    Route::get('', 'index')->name('Etd');
    Route::get('create', 'create')->name('Etd.create');
    Route::post('store', 'store')->name('Etd.store');
    Route::get('edit/{id}', 'edit')->name('Etd.edit');
    Route::put('edit/{id}', 'update')->name('Etd.update');
    Route::delete('destroy/{id}', 'destroy')->name('Etd.destroy');
});

#route::plists
Route::resource('plists', PlistController::class);

#route::adlists
Route::resource('adlists', AdlistController::class);

#root::adminlist 
Route::controller(AdmController::class)->prefix('Adm')->group(function () {
    Route::get('', 'index')->name('Adm');
    Route::get('create', 'create')->name('Adm.create');
    Route::post('store', 'store')->name('Adm.store');
    Route::get('edit/{id}', 'edit')->name('Adm.edit');
    Route::put('edit/{id}', 'update')->name('Adm.update');
    Route::delete('destroy/{id}', 'destroy')->name('Adm.destroy');
});

#root::enseignantlistAffiche
Route::controller(EnsController::class)->prefix('Ens')->group(function () {
    Route::get('', 'index')->name('Ens');
    Route::get('create', 'create')->name('Ens.create');
    Route::post('store', 'store')->name('Ens.store');
    Route::get('edit/{id}', 'edit')->name('Ens.edit');
    Route::put('edit/{id}', 'update')->name('Ens.update');
    Route::delete('destroy/{id}', 'destroy')->name('Ens.destroy');
});

#root::parenttlistAffiche
Route::controller(ParController::class)->prefix('Par')->group(function () {
    Route::get('', 'index')->name('Par');
    Route::get('create', 'create')->name('Par.create');
    Route::post('store', 'store')->name('Par.store');
    Route::get('edit/{id}', 'edit')->name('Par.edit');
    Route::put('edit/{id}', 'update')->name('Par.update');
    Route::delete('destroy/{id}', 'destroy')->name('Par.destroy');
});

#root::parenttlistgestion
Route::controller(PlistController::class)->prefix('Plist')->group(function () {
    Route::get('', 'index')->name('Plist');
    Route::get('create', 'create')->name('Plist.create');
    Route::post('store', 'store')->name('Plist.store');
    Route::get('edit/{id}', 'edit')->name('Plist.edit');
    Route::put('edit/{id}', 'update')->name('Plist.update');
    Route::delete('destroy/{id}', 'destroy')->name('Plist.destroy');
});

#root::Admintlistgestion
Route::controller(AdlistController::class)->prefix('Adlist')->group(function () {
    Route::get('', 'index')->name('Adlist');
    Route::get('create', 'create')->name('Adlist.create');
    Route::post('store', 'store')->name('dlist.store');
    Route::get('edit/{id}', 'edit')->name('dlist.edit');
    Route::put('edit/{id}', 'update')->name('dlist.update');
    Route::delete('destroy/{id}', 'destroy')->name('dlist.destroy');
});


#root::Enseignanttlistgestion
Route::controller(ElistController::class)->prefix('Elist')->group(function () {
    Route::get('', 'index')->name('Elist');
    Route::get('create', 'create')->name('Elist.create');
    Route::post('store', 'store')->name('Elist.store');
    Route::get('edit/{id}', 'edit')->name('Elist.edit');
    Route::put('edit/{id}', 'update')->name('Elist.update');
    Route::delete('destroy/{id}', 'destroy')->name('Elist.destroy');
    Route::get('Etdlist_pour_Ens', 'Etdlist_pour_Ens')->name('Elist:Etdlist_pour_Ens');
});


#delete Etudiant compte
Route::get('Etd/delete/{id}',[EtdController::class,'Etd_delete']);

#delete Adm compte
Route::get('Adm/delete/{id}',[AdmController::class,'Adm_delete']);

#delete enseignant compte
Route::get('Ens/delete/{id}',[EnsController::class,'Ens_delete']);

#delete parent compte
Route::get('Par/delete/{id}',[ParController::class,'Par_delete']);

#pour l'admin 
Route::resource('emplois', EmploisController::class);
Route::resource('filieres', FiliereController::class);
Route::resource('semestres', SemestreController::class);
Route::resource('exams', ExamController::class);
Route::resource('bibliotheque', BiblioController::class);
#bibliotheque
Route::controller(BiblioController::class)->prefix('bibliotheque')->group(function () {
    Route::get('', 'index')->name('bibliotheque.index');
    Route::get('create', 'create')->name('bibliotheque.create');
    Route::post('store', 'store')->name('bibliotheque.store');
    Route::get('edit/{id}', 'edit')->name('bibliotheque.edit');
    Route::put('edit/{id}', 'update')->name('bibliotheque.update');
    Route::delete('destroy/{id}', 'destroy')->name('bibliotheque.destroy');
});

#pour les enseignants
Route::resource('EnsEmplois', EnsEmploisController::class);
Route::resource('Ensbibliotheque', EnsBiblioController::class);
Route::resource('questions', QuestionController::class);
Route::resource('reponses', ReponseController::class);
Route::get('questions/{id}', [QuestionController::class,'show'])->name('questions.show');
Route::resource('Q&R', QandRController::class);

Route::controller(EnsEmploisController::class)->prefix('EnsEmplois')->group(function () {
    Route::get('', 'index')->name('EnsEmplois.index');
    Route::get('create', 'create')->name('EnsEmplois.create');
    Route::post('store', 'store')->name('EnsEmplois.store');
    Route::get('edit/{id}', 'edit')->name('EnsEmplois.edit');
    Route::put('edit/{id}', 'update')->name('EnsEmplois.update');
    Route::delete('destroy/{id}', 'destroy')->name('EnsEmplois.destroy');
});

#pour les etudiants
Route::controller(EtdEmploisController::class)->prefix('EtdEmplois')->group(function () {
    Route::get('', 'index')->name('EtdEmplois.index');
});

Route::controller(EtdExamController::class)->prefix('EtdExam')->group(function () {
    Route::get('', 'index')->name('EtdExam.index');
});


Route::get('/biblioETD', [EtdController::class, 'biblioETD'])->name('biblioETD');
#pour les parents


#route table cours
Route::controller(CoursController::class)->prefix('cours')->group(function () {
    Route::get('', 'index')->name('cours.index');
    Route::get('create', 'create')->name('cours.create');
    Route::post('store', 'store')->name('cours.store');
    Route::delete('destroy/{id}', 'destroy')->name('cours.destroy');
});

Route::controller(AdmController::class)->prefix('coursAdm')->group(function () {
    Route::get('', 'indexCours')->name('coursAdm.indexCours');
    Route::get('createCours', 'createCours')->name('coursAdm.createCours');
    Route::post('storeCours', 'storeCours')->name('coursAdm.storeCours');
    Route::delete('destroyCours/{id}', 'destroyCours')->name('coursAdm.destroyCours');
});
#Route::resource('coursAdm', AdmController::class);
#Route::get('/showCoursAdm', [AdmController::class, 'indexCours'])->name('showCoursAdm');
#Route::get('/createCoursAdm', [AdmController::class, 'createCours'])->name('createCoursAdm');
#Route::post('/storeCoursAdm', [AdmController::class, 'storeCours'])->name('storeCoursAdm');
#Route::get('/destroyCoursAdm', [AdmController::class, 'destroyCours'])->name('destroyCoursAdm');


Route::get('/showCoursEns', [CoursController::class, 'index'])->name('showCoursEns');
Route::get('/showCours', [MeetingController::class, 'CoursEtudiantAuth'])->name('showCours');
Route::get('/createCours', [CoursController::class, 'create'])->name('createCours');
Route::post('/storeCours', [CoursController::class , 'store'])->name('storeCours');


# Enseignant meeting
Route::get('/meeting', function () {
    return view('Cours.meet');
})->name('meeting');

# Admin meeting
Route::get('/meetingAdm', function () {
    return view('admins.Cours.meet');
})->name('meetingAdm');

# Etudiant meeting
Route::get('/meetingEtd', function () {
    return view('etudiants.meet');
})->name('meetingEtd');

#route pour obtenir le lien de la réunion
Route::post('/recupererLien', [MeetingController::class, 'lien'])->name('recupererLien');
Route::post('/recupererLienAdm', [MeetingController::class, 'lienAdm'])->name('recupererLienAdm');
Route::post('/recupererLienEtd', [MeetingController::class, 'lienEtd'])->name('recupererLienEtd');
#route des cours de user connecté
#Route::get('/cours_etudiant', [MeetingController::class, 'CoursEtudiantAuth'])->name('cours_etudiant');

#route reset student password
Route::get('/MotDePasseOublie', [ResetController::class, 'FormResetEtd'])->name('MotDePasseOublie');
Route::post('/PasseEtdReini', [ResetController::class, 'ResetEtd'])->name('PasseEtdReini');

#showfile
Route::get('/index1', [ReponseController::class, 'index1'])->name('index1');

#QCM
Route::get('/index', [QandRController::class, 'index'])->name('index');

#showfile
Route::get('/note',[QandRController::class,'note']);

#planification des examens parents
Route::get('/planification', [ParController::class, 'planification'])->name('planification');

#planification des examens enseignants
Route::get('/Ens_planification', [EnsController::class, 'planification'])->name('Ens_planification');

Route::get('/pere/{pereId}/emplois', [ParController::class, 'emplEtd'])->name('pere.emplois');


#Route::middleware('auth')->group(function(){
#});

# #################################### Quiz Modification #####################################################

Route::controller(QuestionController::class)->prefix('quiz')->group(function () {
    Route::get('', 'index')->name('quiz.index');
    Route::get('show/{id}', 'show')->name('quiz.show');
    Route::get('create', 'create')->name('quiz.create');
    Route::post('store', 'store')->name('quiz.store');
    Route::delete('destroy/{id}', 'destroy')->name('quiz.destroy');
});

############################################# QCM ETD ######################################################

Route::get('/qcm/check', [QandRController::class, 'check'])->name('qcm.check');
Route::post('/qcm/check', [QandRController::class, 'check'])->name('qcm.check');
Route::post('/qcm/verify', [QandRController::class, 'verify'])->name('qcm.verify');
Route::post('/qcm/stock', [QandRController::class , 'stock'])->name('qcm.stock');
Route::post('/qcm/index', [NoteController::class , 'index'])->name('qcm.index');
####################################### Emplois parents ##############################################
Route::get('/emploispere', [ParController::class, 'showEmpl'])->name('emploispere');

####################################### Logout  ##############################################
Route::get('/deconnexion', [connectController::class, 'logout'])->name('deconnexion');