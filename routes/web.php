<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\PurchasesController;    
use App\Http\Controllers\WebsiteLogoController; 


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'login']);

Route::post('login_post', [AuthController::class, 'login_post']);


Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('forgot_post', [AuthController::class, 'forgot_post']);

Route::get('reset/{token}',[AuthController::class,'getReset']);
Route::post('reset/{token}',[AuthController::class,'postReset']);




Route::group(['middleware' => 'admin'], function() {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/customers', [CustomersController::class, 'customers']);

    Route::get('admin/customers/add', [CustomersController::class, 'add_customers']);

    Route::post('admin/customers/add', [CustomersController::class, 'insert_add_customers']);

    Route::get('admin/customers/edit/{id}', [CustomersController::class, 'edit_customers']);

    Route::post('admin/customers/edit/{id}', [CustomersController::class, 'update_customers']);

    Route::get('admin/customers/delete/{id}', [CustomersController::class, 'delete_customers']);

    // Medicine Start

    Route::get('admin/medicines', [MedicinesController::class, 'medicines']);

    Route::get('admin/medicines/add', [MedicinesController::class, 'add_medicines']);

    Route::post('admin/medicines/add', [MedicinesController::class, 'insert_add_medicines']);

    Route::get('admin/medicines/edit/{id}', [MedicinesController::class, 'edit_medicines']);

    Route::post('admin/medicines/edit/{id}', [MedicinesController::class, 'update_medicines']);

    Route::get('admin/medicines/delete/{id}', [MedicinesController::class, 'delete_medicines']);

    // Medicine End

    // Medicines stock start

    Route::get('admin/medicines_stock', [MedicinesController::class, 'medicines_stock']);

    Route::get('admin/medicines_stock/add', [MedicinesController::class, 'medicines_stock_add']);

    Route::post('admin/medicines_stock/add', [MedicinesController::class, 'medicines_stock_insert']);

    Route::get('admin/medicines_stock/edit/{id}', [MedicinesController::class, 'medicines_stock_edit']);

    Route::post('admin/medicines_stock/edit/{id}', [MedicinesController::class, 'medicines_stock_update']);

    Route::get('admin/medicines_stock/delete/{id}', [MedicinesController::class, 'medicines_stock_delete']);

    // medicines stock end


    
    // Suppliers start

    Route::get('admin/suppliers', [SuppliersController::class, 'suppliers']);

    Route::get('admin/suppliers/add', [SuppliersController::class, 'suppliers_add']);

    Route::post('admin/suppliers/add', [SuppliersController::class, 'suppliers_add_insert']);

    Route::get('admin/suppliers/edit/{id}', [SuppliersController::class, 'edit_suppliers']);

    Route::post('admin/suppliers/edit/{id}', [SuppliersController::class, 'update_suppliers']);

    Route::get('admin/suppliers/delete/{id}', [SuppliersController::class, 'delete_suppliers']);
    
    // Suppliers end


    // Invoice start

    Route::get('admin/invoices', [InvoicesController::class, 'invoices']);

    Route::get('admin/invoices/add', [InvoicesController::class, 'add_invoices']);

    Route::post('admin/invoices/add', [InvoicesController::class, 'invoices_insert']);

    Route::get('admin/invoices/edit/{id}', [InvoicesController::class, 'edit_invoices']);

    Route::post('admin/invoices/edit/{id}', [InvoicesController::class, 'update_invoices']);

    Route::get('admin/invoices/delete/{id}', [InvoicesController::class, 'delete_invoices']);

    // Invoice end


    // Purchase start

    Route::prefix('admin/purchases/')->group( function() {

        Route::get('', [PurchasesController::class, 'purchases']);

        Route::get('add', [PurchasesController::class, 'add_purchases']);

        Route::post('add', [PurchasesController::class, 'purchases_store']);

        Route::get('edit/{id}', [PurchasesController::class, 'purchases_edit']);

        Route::post('edit/{id}', [PurchasesController::class, 'purchases_update']);

        Route::get('delete/{id}', [PurchasesController::class, 'purchases_delete']);

    });   
   
    // Purchase end


    /// My Account

    Route::prefix('admin/my_account/')->group( function() {

        Route::get('', [DashboardController::class, 'my_account']);

        Route::post('', [DashboardController::class, 'my_account_update']);

    });

    ///  End My Account

    ///  Website Logo
  
    Route::get('admin/website_logo', [WebsiteLogoController::class, 'website_logo']);

    Route::post('admin/website_logo_update', [WebsiteLogoController::class, 'website_logo_update']);


    /////////////////
    
    
});

Route::get('logout', [AuthController::class, 'logout']);





