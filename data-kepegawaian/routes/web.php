<?php

use App\Http\Controllers\PegawaiController;

Route::get('/', function() {
    return redirect('/pegawai');
});

Route::resource('pegawai', PegawaiController::class);
