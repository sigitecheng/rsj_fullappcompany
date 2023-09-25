<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/home', [NewsController::class, 'index']);


// =========================

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// ========================= BAHAN PERCODINGAN =====================
// ========================= BAHAN PERCODINGAN =====================

// Route::get('/', function () {
//     return view('dashboard_frontend.index', [
//         "title_halaman" => "Sigimatika",
//         // "active" => 'home',
//     ]);
// });



// Route::get('/home', function () {
//     return view('Home', [
//         "title" => "Home",
//         "active" => 'home',
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         "title"     => "About",
//         "nama"      => "Sigit Septiadi Prasetyo",
//         "email"     => "Sigit@gmail.com",
//         "image"     => "istriku.jpg ",
//         "active" => 'about'
//     ]);
// });

// ========================================================================


// Route::get('/blog', [PostController::class, 'index']);
// Route::get('/blog', function () {

//     // return view('post', [
//     //     "title"    => "Blog",
//     //     "post"     => Post::all()
//     // ]);
// });

// ========================================================================
//HALAMAN SINGLE POST 

// Route::get('posts/{post:slug}', [PostController::class, 'show']);

//{
// $blog_post = [
//     [
//         "title" => "Artikel Judul Pertama",
//         "slug" => "artikel-judul-pertama",
//         "author"   => "Sigit Septiadi",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
//     [
//         "title" => "Artikel Judul Kedua",
//         "slug" => "artikel-judul-kedua",
//         "author"   => "Iqlima Nur Izzati",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
// ];

// $new_post = [];
// foreach ($blog_post as $post) {
//     if ($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }

// return view('posts', [
//     "title" => "Single Post",
//     "post" => Post::find($slug)

//         // ]);
//     }
// // );


// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('post', [
//         'title' => "Post Category By $category->nama_kategori",
//         "active" => 'categories',
//         'post' => $category->posts,
//         'category' => $category->nama_kategori
//     ]);
// });


// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post Categories',
//         "active" => 'categories',
//         'categories' => Category::all()
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('authordetails', [
//         'title' => "Author By : $author->name",
//         "active" => 'posts',
//         // N+1 Problem Menggunakan lazy Eiger Loading 
//         'posts' => $author->posts->load('category', 'user')

//     ]);
// });

// // MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN GUEST UNTUK HALAMAN YANG BELUM TERAUTENTIKASI ATAU TERDAFTAR
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // PENAMBAHAN FITUR GUEST 
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

// //Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');




// // Route::get('/dashboard/posts/checkSLug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');


// // ROUTE MENGGUNAKAN METODE RESOURCES UNTUK KEPERLUAN CRUD YANG SUDAH DISEDIAKAN OLEH LARAVEL 

// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// // ROUTE UNTUK MENAMBAHKAN KATEGORI YANG ADA SESUAI DENGAN KEBUTUHAN ADMINISTRASI WEB 
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


// // =================================================================================================================== 
// Route::resource('/admin_itembarangdanharga/all_category', AdminItemBarangdanHargaController::class);

// //ROUTE MENUJU ADMIN_DASHBOARDINVOCEPESANAN 
// Route::resource('/admin_dashboardinvoicepesanan/all_invoicepesanan', AdminDashboardInvoicePesananController::class)->middleware('admin');

// //ROUTE MENUJU ADMIN_DASHBOARDINVOCEPESANAN 
// // Route::resource('/admin_dashboardinvoicepesanan/all_invoice', AdminDashboardInvoicePesananController::class, 'history')->middleware('admin');

// //ROUTE UNTUK PROGRESS INVOICE PENJUALAN 
// Route::resource('/admin_dashboardinvoicepesananprogress/all-data', ProgressController::class)->middleware('auth');



//ROUTE UNTUK HISTORY PESANAN
// /admin_dashboardinvoicepesanan/historyinvoicepesanan

//Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/admin_dashboardinvoicepesanan/historyinvoicepesanan', function () {
//     return view('dashboard.index');
// // })->middleware('auth');


// // ROUTE INVOICE PESANAN PROGRESS
// Route::get('/admin_dashboardinvoicepesanan/progress', [InvoicepesananProgressController::class, 'index'])->middleware('auth');
