<?php
use App\Models\Juguete;
use App\Models\Pedido;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function () {
    return 'Hola, soy Laravel — y esta respuesta viajó por una ruta.';
});
Route::get('/inicio', function () {
    $productos = ['Arroz', 'Azúcar', 'Fideo'];
    return view('inicio', ['productos' => $productos]);   // ...y viaja a la vista.
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/promociones', function () {
    return view('promociones');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});
//rutas de la jugueteria


Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes', ['juguetes' => $juguetes]);   // igual que en la clase 11: los datos viajan a la vista
});

// 5) MOSTRAR EL FORMULARIO: esta ruta solo pinta la página, no guarda nada.
//    Fijate que la URL es la misma de abajo, pero el método es GET (entrar a ver).
Route::get('/juguetes/nuevo', function () {
    return view('juguetes-nuevo');
});

// 6) GUARDAR: misma URL, pero método POST (mandar datos).
//    Laravel elige esta ruta y no la de arriba por el METHOD del formulario.
Route::post('/juguetes/nuevo', function () {
    // request()->input('nombre') = "traeme lo que venía en el campo name="nombre"".
    // Es el $_POST['nombre'] de la clase 10, con mejor nombre.
    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);   // una línea = un INSERT

    // Guardado el dato, mandamos al usuario a la lista para que lo vea ahí.
    return redirect('/juguetes');
});




Route::get('/pedidos', function () {
    $pedidos = Pedido::all();
    return view('pedidos', ['pedidos' => $pedidos]);   // igual que en la clase 11: los datos viajan a la vista
})->middleware('auth');

// 5) MOSTRAR EL FORMULARIO: esta ruta solo pinta la página, no guarda nada.
//    Fijate que la URL es la misma de abajo, pero el método es GET (entrar a ver).
Route::get('/pedidos/nuevo', function () {
    return view('registro-pedido');
})->middleware('auth'); 

// 6) GUARDAR: misma URL, pero método POST (mandar datos).
//    Laravel elige esta ruta y no la de arriba por el METHOD del formulario.
Route::post('/pedidos/nuevo', function () {
    // request()->input('nombre') = "traeme lo que venía en el campo name="nombre"".
    // Es el $_POST['nombre'] de la clase 10, con mejor nombre.
    Pedido::create([
        'nombre' => request()->input('nombre'),
        'correo' => request()->input('correo'),
        'pedido' => request()->input('pedido'),
    ]);   // una línea = un INSERT

    // Guardado el dato, mandamos al usuario a la lista para que lo vea ahí.
    return redirect('/pedidos');
})->middleware('auth'); 

//integrando login
Route::get('/login', function () {
    return view('login');
});

// 8) LA CERRADURA: acá se verifica la llave.
//    Auth::attempt busca el correo en la tabla users y compara la contraseña
//    contra el revoltijo guardado. Devuelve true o false, nada más.
Route::post('/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        // Sesión nueva apenas entra: si alguien espiaba la anterior, ya no le sirve.
        request()->session()->regenerate();

        return redirect('/pedidos/nuevo');
    }

    // back() = "volvé a la página de donde veníamos", con un mensaje en el bolsillo.
    return back()->with('error', 'Correo o contraseña incorrectos.');
});

// 9) SALIR. Es POST y no un enlace a propósito: un enlace lo puede disparar
//    cualquier imagen de otra página y te sacaría de la sesión sin querer.
Route::post('/logout', function () {
    Auth::logout();

    return redirect('/inicio');
});

// 10) EL PANEL DEL DUEÑO — la primera página PRIVADA del curso.
//     Sin ->middleware('auth') esto sería una página común. Con él, Laravel
//     revisa la llave ANTES de ejecutar una sola línea de acá adentro.

Route::get('/panel', function () {
    //$productos = Producto::all();

    //return view('panel', ['productos' => $productos]);
})->middleware('auth');