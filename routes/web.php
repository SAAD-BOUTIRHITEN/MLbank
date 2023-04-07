<?php

use App\Exports\clien;
use App\Http\Controllers\ExcController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RempController;
use App\Models\Client;
use App\Models\Preditct;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Maatwebsite\Excel\Facades\Excel;
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
})->name('welcome');
Route::get('/inform', function () {
    return view('inform');
})->name('inform');


/* Remplir le champs */


Route::post('/remplir', [RempController::class, 'store'])->name('remp');


Route::get('/dashboard', function () {
    $data = Preditct::selectRaw("SUM(CASE WHEN status = 'Yes' THEN 1 ELSE 0 END) as solvable_count, SUM(CASE WHEN status = 'No' THEN 1 ELSE 0 END) as not_solvable_count")
        ->firstOrFail();
       $data1=Preditct::count('id');
       $clients = Client::latest('created_at')->simplePaginate(3);
       $dateActuelle = Carbon::now();
    return view('dashboard',compact('data','data1','clients','dateActuelle'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/client', function () {
        $client=Client::with('Preditct')->simplePaginate(5);
        return view('client',compact('client'));
    })->name('client');
    Route::get('/data', function () {
        $client=Client::simplePaginate(5);
        return view('data',compact('client'));
    })->name('data');

    Route::get('/notif',function(){
        $user = User::find(Auth::user()->id);
        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return redirect()->back();
     })->name('notif');

     Route::get('/pdf', function () {
        return Excel::download(new clien, 'Client.xlsx');
    })->name('pdf');

    Route::post('/search',[ExcController::class,'search'])->name('search');
});

require __DIR__.'/auth.php';