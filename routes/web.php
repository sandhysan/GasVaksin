<?php

use App\Http\Controllers\AdminInfoController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\AdminTempatController;
use App\Http\Controllers\AdminUserAdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RiwayatController;
use App\Models\Informasi;
use App\Models\TempatVaksin;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// proses login dan daftar
Route::middleware(['guest'])->group(function () {
    Route::get('/login',[LoginController::class, 'index']);
    Route::get('/',[HomeController::class, 'index']);

    Route::get('/reset',[LoginController::class, 'resetForm']);
    Route::get('/reset',[ResetController::class, 'index']);
    Route::post('/reset/proses',[ResetController::class, 'reset']);
    Route::post('/login',[LoginController::class, 'authenticate']);
    Route::get('/registrasi',[RegisterController::class, 'index']);
    Route::post('/registrasi',[RegisterController::class, 'store']);

});

Route::post('/logout',[LoginController::class, 'logout']);





// user pengguna
Route::get('/beranda',[HomeController::class, 'index']);

Route::get('/daftar', [DaftarController::class, 'index'])->name('user.pendaftaran')->middleware('user');
Route::get('/daftar/{id}', [DaftarController::class, 'daftar'])->middleware('user');
Route::get('/searchTempat', [DaftarController::class, 'search'])->name('searchTempat')->middleware('user');
Route::get('/riwayat',[RiwayatController::class, 'index'])->name('riwayat')->middleware('user');
Route::get('/sertif/{id}',[RiwayatController::class, 'sertif'])->middleware('user');
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/informasi/{id}', [BlogController::class, 'detail'])->name('informasi');

// user level admin
Route::get('/root/admin', [DashboardController::class, 'index'])->name('root.admin')->middleware('admin');
Route::get('/admin/pendaftaran', [AdminPendaftaranController::class, 'index'])->middleware('admin');
Route::get('/admin/info', [AdminInfoController::class, 'index'])->middleware('admin');
Route::get('/admin/user', [AdminUserController::class, 'index'])->middleware('admin');
Route::get('/admin/tempat', [AdminTempatController::class, 'index'])->middleware('admin');
Route::get('/admin/admin', [AdminUserAdminController::class, 'index'])->middleware('admin');
Route::get('/admin/laporan', [AdminLaporanController::class, 'index'])->middleware('admin');

// admin delete

Route::get('/admin/info/delete/{id}', [AdminInfoController::class, 'hapus'])->name('admin.info.delete')->middleware('admin');
Route::get('/admin/user/delete/{id}', [AdminUserControllerr::class, 'hapus'])->name('admin.user.delete')->middleware('admin');
Route::get('/admin/tempat/delete/{id}', [AdminTempatController::class, 'hapus'])->name('admin.tempat.delete')->middleware('admin');
Route::get('/admin/daftar/delete/{id}', [AdminPendaftaranController::class, 'hapus'])->name('admin.daftar.delete')->middleware('admin');
Route::get('/admin/adminuser/delete/{id}', [AdminUserAdminControllerr::class, 'hapus'])->name('admin.adminuser.delete')->middleware('admin');

// input admin
Route::get('/admin/inputinfo',[AdminInfoController::class, 'input'])->name('admin.posts.inputinfo')->middleware('admin');
Route::post('/admin/inputinfo',[AdminInfoController::class, 'simpan'])->name('admin.posts.inputinfo')->middleware('admin');
Route::get('/admin/inputtempat',[AdminTempatController::class, 'input'])->name('admin.posts.inputtempat')->middleware('admin');
Route::post('/admin/inputempat',[AdminTempatController::class, 'simpan'])->name('admin.posts.inputtempat')->middleware('admin');

// edit admin
Route::get('/editinfo/{id}',[AdminInfoController::class, 'viewedit'])->name('admin.posts.editinfo')->middleware('admin');
Route::post('/admin/editinfo',[AdminInfoController::class, 'edit'])->name('admin.posts.editinfo')->middleware('admin');
Route::get('/edittempat/{id}',[AdminTempatController::class, 'editview'])->name('admin.posts.edittempat')->middleware('admin');
Route::post('/admin/edittempat',[AdminTempatController::class, 'edit'])->name('admin.posts.edittempat')->middleware('admin');
Route::get('/edituser/{id}',[AdminUserController::class, 'editview'])->name('admin.posts.edituser')->middleware('admin');
Route::get('/editadmin/{id}',[AdminUserAdminController::class, 'viewedit'])->name('admin.posts.editadmin')->middleware('admin');
Route::post('/admin/editadmin',[AdminUserAdminController::class, 'edit'])->name('admin.posts.editadmin')->middleware('admin');
Route::get('/editdaftar/{id}',[AdminPendaftaranController::class, 'viewedit'])->name('admin.posts.editdaftar')->middleware('admin');
Route::post('/admin/editdaftar',[AdminPendaftaranController::class, 'edit'])->name('admin.posts.editdaftar')->middleware('admin');




