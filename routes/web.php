<?php

use Illuminate\Support\Facades\Route;
use App\Models\Data;
use App\Models\Fact;
use App\Models\Skill;
use App\Models\Category;
use App\Models\Post;
use App\Models\Service;

Route::get('/', function () {
    $data = Data::all();
    $facts = Fact::all();
    $skills = Skill::all();
    $services = Service::all()->random(6);
    $categories = Category::all();
    $posts = Post::all()->random(6);
    return view('layouts.main' , compact('data' , 'facts' , 'skills' , 'categories' ,'posts' , 'services'));
})->name('home');

Route::get('/about', function () {
    $data = Data::all();
    return view('frontend.about' , compact('data'));
})->name('frontend.about');

Route::get('/facts', function () {
    $facts = Fact::all();
    return view('frontend.facts' , compact('facts'));
})->name('frontend.facts');

Route::get('/skills', function () {
    $skills = Skill::all();
    return view('frontend.skills' , compact('skills'));
})->name('frontend.skills');

Route::get('/resume', function () {
    $data = Data::all();
    return view('frontend.resume' , compact('data'));
})->name('frontend.resume');

Route::get('/portfolio', function () {
    $categories = Category::all();
    $posts = Post::all();
    return view('frontend.protofolio' , compact('categories' , 'posts'));
})->name('frontend.portfolio');


    
Route::get('/Services', function () {
    $services = Service::all();
    return view('frontend.Services' , compact('services'));
})->name('frontend.Services');
    

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
    
// ________________________________________________________________________


use App\Http\Controllers\PosttController;

Route::get('/single_post/{id}', [PosttController::class, 'single_post'])->name('single_post');
Route::get('/category/{id}', [PosttController::class, 'category'])->name('category');
    
// ________________________________________________________________________



use App\Http\Controllers\ContactController;

Route::post('/send_ask', [ContactController::class, 'send_ask'])->name('send_ask');
Route::get('/dashboard/all_ask', [ContactController::class, 'all_ask'])->name('dashboard.all_ask');
Route::get('/dashboard/all_ask/destroy/{id}', [ContactController::class, 'destroy'])->name('dashboard.all_ask.destroy');
    
// ________________________________________________________________________

use App\Http\Controllers\backendController;

Route::get('/logout', [backendController::class, 'logout'])->name('logout');
    
// ________________________________________________________________________

use App\Http\Controllers\UserController;

Route::get('/dashboard/all_user', [UserController::class, 'all_user'])->name('dashboard.all_user');
Route::get('/dashboard/all_user/delete/{id}', [UserController::class, 'delete'])->name('dashboard.all_user.delete');
    
// ________________________________________________________________________

use App\Http\Controllers\CategoryController;

Route::get('/dashboard/all_category', [CategoryController::class, 'all_category'])->name('dashboard.all_category');
Route::get('/dashboard/all_category/create', [CategoryController::class, 'create'])->name('dashboard.all_category.create');
Route::post('/dashboard/all_category/store', [CategoryController::class, 'store'])->name('dashboard.all_category.store');
Route::get('/dashboard/all_category/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard.all_category.edit');
Route::post('/dashboard/all_category/update/{id}', [CategoryController::class, 'update'])->name('dashboard.all_category.update');
Route::get('/dashboard/all_category/delete/{id}', [CategoryController::class, 'delete'])->name('dashboard.all_category.delete');
    
// ________________________________________________________________________

Route::get('/testimonials', function () {
    return view('frontend.testimonials');
})->name('frontend.testimonials');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.welcome');
    })->name('dashboard');
});

// ________________________________________________________________________

use App\Http\Controllers\DataController;

Route::get('/dashboard/all_data', [DataController::class, 'all_data'])->name('dashboard.all_data');
Route::get('/dashboard/all_data/{id}', [DataController::class, 'edit'])->name('dashboard.all_data.edit');
Route::post('/dashboard/all_data/update/{id}', [DataController::class, 'update'])->name('dashboard.all_data.update');
    
// ________________________________________________________________________

use App\Http\Controllers\FactController;

Route::get('/dashboard/all_facts', [FactController::class, 'all_facts'])->name('dashboard.all_facts');
Route::get('/dashboard/all_facts/{id}', [FactController::class, 'edit'])->name('dashboard.all_facts.edit');
Route::post('/dashboard/all_facts/update/{id}', [FactController::class, 'update'])->name('dashboard.all_facts.update');

// ________________________________________________________________________

use App\Http\Controllers\ServiceController;

Route::get('/dashboard/all_service', [ServiceController::class, 'all_service'])->name('dashboard.all_service');
Route::get('/dashboard/all_service/create', [ServiceController::class, 'create'])->name('dashboard.all_service.create');
Route::post('/dashboard/all_service/store', [ServiceController::class, 'store'])->name('dashboard.all_service.store');
Route::get('/dashboard/all_service/edit/{id}', [ServiceController::class, 'edit'])->name('dashboard.all_service.edit');
Route::post('/dashboard/all_service/update/{id}', [ServiceController::class, 'update'])->name('dashboard.all_service.update');
Route::get('/dashboard/all_service/destroy/{id}', [ServiceController::class, 'destroy'])->name('dashboard.all_service.destroy');

// ________________________________________________________________________

use App\Http\Controllers\SkillController;

Route::get('/dashboard/all_skills', [SkillController::class, 'all_skills'])->name('dashboard.all_skills');
Route::get('/dashboard/all_skills/create', [SkillController::class, 'create'])->name('dashboard.all_skills.create');
Route::post('/dashboard/all_skills/store', [SkillController::class, 'store'])->name('dashboard.all_skills.store');
Route::get('/dashboard/all_skills/edit/{id}', [SkillController::class, 'edit'])->name('dashboard.all_skills.edit');
Route::post('/dashboard/all_skills/update/{id}', [SkillController::class, 'update'])->name('dashboard.all_skills.update');
Route::get('/dashboard/all_skills/destroy/{id}', [SkillController::class, 'destroy'])->name('dashboard.all_skills.destroy');

// ________________________________________________________________________


use App\Http\Controllers\PostController;

Route::get('/dashboard/all_posts', [PostController::class, 'all_posts'])->name('dashboard.all_posts');
Route::get('/dashboard/all_posts/create', [PostController::class, 'create'])->name('dashboard.all_posts.create');
Route::post('/dashboard/all_posts/store', [PostController::class, 'store'])->name('dashboard.all_posts.store');
Route::get('/dashboard/all_posts/edit/{id}', [PostController::class, 'edit'])->name('dashboard.all_posts.edit');
Route::post('/dashboard/all_posts/update/{id}', [PostController::class, 'update'])->name('dashboard.all_posts.update');
Route::get('/dashboard/all_posts/destroy/{id}', [PostController::class, 'destroy'])->name('dashboard.all_posts.destroy');

// ________________________________________________________________________