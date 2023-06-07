<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Back\CrudBuilderController;
use App\Http\Controllers\Back\ApiBuilderController;

use App\Http\Controllers\Back\DashboardController;


use App\Http\Controllers\Member\DashboardMemberController;
use App\Http\Controllers\Member\AchievementController;
use App\Http\Controllers\Member\BrowseCourseController;
use App\Http\Controllers\Member\DiscussionController;
use App\Http\Controllers\Member\LeaderboardController;
use App\Http\Controllers\Member\MyLearningController;
use App\Http\Controllers\Member\TutorialController;

use App\Http\Controllers\Back\Akademik_mhs\Akademik_mhsController;


use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\Back\News\NewsController;
use App\Http\Controllers\Back\News\NewsCategoryController;

use App\Http\Controllers\Back\Setting_web\Setting_webController;


use App\Http\Controllers\Back\Setting_menu\Setting_menuController;
use App\Http\Controllers\Back\Permissions\PermissionsController;


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

use Illuminate\Support\Facades\DB;

$res_setting_route = DB::select('select * from setting_route where deleted = "false"');
//dd($res_setting_route[0]->route_name);
for ($r=0; $r < count($res_setting_route); $r++) { 
    Route::resource($res_setting_route[$r]->route_name, $res_setting_route[$r]->controller_name);
}

$dataresource = array(
    ["setting_menu","Setting_menuController::class"],
    ["permissions", "PermissionsController::class"],
    ["setting_web", "Setting_webController::class"]
);

Route::resource('setting_menu', Setting_menuController::class);
Route::resource('permissions', dPermissionsController::class);
// Route::resource($dataresource[2][0], Setting_webController::class);
//Route::resource($res_setting_route[0]->route_name, 'App\Http\Controllers\Back\Setting_web\Setting_webController');


Route::get('/', function () {
    return view('front.login');
});

Route::get('/crud', [CrudBuilderController::class, 'index'])->name('crud.index');
Route::post('/crud', [CrudBuilderController::class, 'index'])->name('crud.index');

Route::get('/apibuilder', [ApiBuilderController::class, 'index'])->name('apibuilder.index');
Route::post('/apibuilder', [ApiBuilderController::class, 'index'])->name('apibuilder.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('news-category', NewsCategoryController::class);
    Route::resource('news', NewsController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    
    Route::get('/member/board', [DashboardMemberController::class, 'index'])->name('dashboard_member');
    Route::get('/member/achievement', [AchievementController::class, 'index'])->name('member.achievement');
    Route::get('/member/browsecourse', [BrowseCourseController::class, 'index'])->name('member.browsecourse');
    Route::get('/member/discussion', [DiscussionController::class, 'index'])->name('member.discussion');
    Route::get('/member/leaderboard', [LeaderboardController::class, 'index'])->name('member.leaderboard');
    Route::get('/member/mylearning', [MyLearningController::class, 'index'])->name('member.mylearning');
    Route::get('/member/tutorial', [TutorialController::class, 'index'])->name('member.tutorial');

    Route::get('/crud', [CrudBuilderController::class, 'index'])->name('crud.index');
    Route::post('/crud', [CrudBuilderController::class, 'index'])->name('crud.index');

    Route::get('/apibuilder', [ApiBuilderController::class, 'index'])->name('apibuilder.index');
    Route::post('/apibuilder', [ApiBuilderController::class, 'index'])->name('apibuilder.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('mhsboom', [Akademik_mhsController::class, 'mhsboom'])->name('mhsboom');