<?php

use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');

Route::get('/reservation-create', [ReservationController::class, 'create'])->name('reservation.create');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::get('/reservation-show/{reservation}',[ReservationController::class, 'show'])->name('reservation.show');

Route::get('/reservation-update/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');

Route::put('/reservation-change/{reservation}', [ReservationController::class, 'change'])->name('reservation.change');

Route::delete('/reservation-delete/{reservation}', [ReservationController::class, 'delete'])->name('reservation.delete');

Route::get('/reservation-report', [ReservationController::class, 'getReportAll'])->name('reservation.report');

Route::get('/reservation-reportOne/{reservation}', [ReservationController ::class, 'reportOne']) -> name('reservation.reportOne');