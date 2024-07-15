<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\OptometristaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ReporteController;
use App\Models\Disponibilidad;


Route::get("/" , [LandingController::class , 'Landing'])->name('login');

Route::post('registro' , [AuthController::class , 'registro'])->name('auth.registro');
Route::post('/login_post' , [AuthController::class , 'login'])->name('auth.login');
Route::get('ususario/{email}' , [UserController::class , 'find'])->name('usuario.email');
Route::get('cerrar-session' , [AuthController::class , 'logout'])->name('logout');
Route::group(['middleware' => ['auth']], function () {
    //cliente
    Route::get('perfil' , [PerfilController::class , 'perfil'])->name('perfil.index');
    Route::post('perfil' , [PerfilController::class , 'update'])->name('perfil.update');
    Route::get('cliente/ver_citas/{id}' , [ClienteController::class , 'ver_citas'] )->name('client_ver_citas');

    //citas 
    Route::get("agendar-citas" , [AgendaController::class , 'index'])->name('agenda.agendarCitas');
    Route::post("agendar-citas" , [AgendaController::class , 'store'])->name('agenda.store');
    Route::post("agendar-citas_register_usuario" , [AgendaController::class , 'agenda_usuario'])->name('agenda_usuarui.store');
    Route::get("mis-citas/{id}" , [AgendaController::class , 'misCitas'])->name('agenda.misCitas');

    //admin
    Route::get('registrar-usuario' , [OptometristaController::class , 'index'])->name('panleAdministracion.optometrista_usuario');
    Route::post('panle-administracion' , [AuthController::class , 'store_usuario'])->name('panleAdministracion.optometrista_store');
    Route::get('optomestrista/usuarios' , [OptometristaController::class , 'usuarios'] )->name('usuarios.optometrista');
    Route::get('editar-usuario/{id}' , [UserController::class , 'edit'])->name('usuario.edit');
    Route::post('editar-usuario/{id}' , [UserController::class , 'update'])->name('usuario.update');

    //modulo de citas para el admin 
    Route::get('optomestrista/citas' , [AgendaController::class , 'citas'])->name('optomestrista.citas');
    Route::get('optomestrista/citas/filtro' , [AgendaController::class  , 'citas_filtro'])->name('optomestrista.citas_filter');
    Route::get('optomestrista/citas-crear' , [OptometristaController::class , 'citas_create'])->name('optomestrista.citas_create');
    Route::get('optometrista/anular_cita/{id}' , [OptometristaController::class , 'anular_cita'])->name('anular_cita');
    Route::post('optometrista/cambiar_cita' , [OptometristaController::class , 'cambiar_cita'])->name('cambiar_cita');

    Route::get('optometrista/asignar-optometrista/{id}' , [OptometristaController::class , 'asignar_optometrista'])->name('optometrista.asignar');
    Route::post('optometrista/asignar-optometrista' , [OptometristaController::class , 'asignar_optometrista_store'])->name('optometrista.asignar_store');
    Route::post('optomestrista/eliminar-usuario/{id}' , [OptometristaController::class , 'eliminar'])->name('optomestrista.eliminar');
    //modulo para los lentes 
    Route::get("productos/productos", [ProductoController::class ,'index'] )->name('producto');
    Route::get("productos/crear_producto", [ProductoController::class ,'formulario_crear'] )->name('producto_create');
    Route::post("productos/crear_producto", [ProductoController::class ,'store'] )->name('producto.store');
    Route::get("productos/editar_producto/{id}", [ProductoController::class ,'edit'] )->name('producto.edit');
    Route::post("productos/editar_producto/{id}", [ProductoController::class ,'updated'] )->name('producto.put');
    Route::post("productos/eliminar_producto/{id}", [ProductoController::class ,'delete'] )->name('producto.delete');
    
    Route::get('productos/vender/{id}' , [ProductoController::class , 'vender'])->name('venta');
    Route::post('productos/vender/{id}' , [ProductoController::class , 'vender_store'])->name('venta.store');
    //pacientes optometrista 

    Route::get('optometrista/citas/paciente' , [OptometristaController::class , 'pacientes'])->name('pacientes.index');
    Route::get('optometrista/citas/evaluar/{id}', [OptometristaController::class , 'evaluar_cita'])->name('optometrista.evaluar_citas');
    Route::post('optometrista/citas/evaluar/{id}', [OptometristaController::class , 'evaluar_cita_store'])->name('optometrista.evaluar_citas_store');

    Route::get('ventas/' , [VentaController::class , 'index'])->name('ventas.index');
    Route::get('ventas/{id}' , [VentaController::class , 'show'])->name('ventas.show');

    //modulo de reportes 
    Route::get('reportes', [ReporteController::class , 'index'])->name('reporte.index');
    Route::get('reportes/usuario', [ReporteController::class , 'usuario'])->name('reporte.usuario');
    Route::get('reportes/usuario/pdf', [ReporteController::class , 'usuariopdf'])->name('reporte.usuariopdf');
    Route::get('reportes/producto', [ReporteController::class , 'productopdf'])->name('reporte.productopdf');
    Route::get('reportes/producto/pdf', [ReporteController::class , 'productopdf_generar'])->name('reporte.productopdf_generar');
});
