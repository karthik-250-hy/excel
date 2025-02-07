<?php

use App\Http\Controllers\ExcelController;

Route::get('/', [ExcelController::class, 'index']);
Route::post('/upload', [ExcelController::class, 'upload'])->name('excel.upload');

?>
