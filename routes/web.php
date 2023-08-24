    <?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\DiariesController;
    use App\Http\Controllers\DocumentationsController;
    use App\Http\Controllers\ApprovalRequestsController;
    use App\Http\Controllers\UsersController;


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

    // Auth::routes();

    // Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    // Route::resource('/diaries', DiariesController::class);
    // Route::resource('/documentations', DocumentationsController::class);
    // Route::resource('/approval-requests', ApprovalRequestsController::class);
    // Route::resource('/users', UsersController::class);


    Auth::routes();
    Route::get('/', function () {
        return view('welcome');
    });


    // This is from not-authorized.blade.php //
    Route::get('/not-authorized', function () {
        return view('auth.not-authorized');
    })->name('not-authorized');

    // This is the middleware to check the route access if not log in, user will not directly access the pages //
    Route::middleware('checkRouteAccess')->group(function () {
        Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
        Route::resource('/users', UsersController::class);
        Route::resource('/documentations', DocumentationsController::class);
        Route::resource('/diaries', DiariesController::class);
        Route::resource('/approval-requests', ApprovalRequestsController::class);
    });
