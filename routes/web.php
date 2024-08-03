<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSejarahController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardAnnouncementController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardGalleryController;
use App\Models\Announcement;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DashboardAgendaController;
use App\Http\Controllers\IndexController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('kontak', function () {
    return view('Code/kontak/kontak');
});

Route::get('visi-misi', function () {
    return view('Code/Profil/visimisi');
});

Route::get('struktur-organisasi', function () {
    return view('Code/Profil/strukturorganisasi');
});

Route::get('sejarah', function () {
    return view('Code/Profil/sejarah');
});

Route::get('demografi', function () {
    return view('Code/Profil/demografi');
});

Route::get('geografis', function () {
    return view('Code/Profil/geografis');
});

Route::get('peta', function () {
    return view('Code/Profil/peta');
});

Route::get('lpmk', function () {
    return view('Code/kelembagaan/lpmk');
});

Route::get('bkm', function () {
    return view('Code/kelembagaan/bkm');
});

Route::get('fa', function () {
    return view('Code/kelembagaan/fa');
});

Route::get('fprb', function () {
    return view('Code/kelembagaan/fprb');
});

Route::get('karang-taruna', function () {
    return view('Code/kelembagaan/karangtaruna');
});

Route::get('kim', function () {
    return view('Code/kelembagaan/kim');
});

Route::get('linmas', function () {
    return view('Code/kelembagaan/linmas');
});

Route::get('pkk', function () {
    return view('Code/kelembagaan/pkk');
});

Route::get('pokdarwis', function () {
    return view('Code/kelembagaan/pokdarwis');
});

Route::get('sarana-prasarana', function () {
    return view('Code/PengembanganLokal/Sarana Prasarana/Sarana Prasarana');
});

Route::get('umkm', function () {
    return view('Code/PengembanganLokal/UMKM/UMKM');
});

Route::get('layanan', function () {
    return view('Code/Layanan/Layanan');
});

Route::get('agenda', function () {
    return view('Code/informasiPublik/agenda');
});

Route::get('sejarah', [SejarahController::class, 'show']);

Route::resource('/dashboard/sejarah', DashboardSejarahController::class)->middleware('auth');

Route::get('pengumuman', [AnnouncementController::class, 'index']);

Route::get('pengumuman/{announcement:slug}', [AnnouncementController::class, 'show']);

Route::get('/dashboard/announcement/checkSlug', [
    DashboardAnnouncementController::class, 'checkSlug'
])->middleware('auth');

Route::resource('/dashboard/announcement', DashboardAnnouncementController::class)->middleware('auth');

Route::get('galeri', [GalleryController::class, 'index']);

Route::get('galeri/{gallery:slug}', [GalleryController::class, 'show']);

Route::get('/dashboard/gallery/checkSlug', [
    DashboardGalleryController::class, 'checkSlug'
])->middleware('auth');

Route::resource('/dashboard/gallery', DashboardGalleryController::class)->middleware('auth');

Route::get('agenda', [AgendaController::class, 'index']);

Route::get('agenda/{agenda:slug}', [AgendaController::class, 'show']);

Route::get('/dashboard/agenda/checkSlug', [
    DashboardAgendaController::class, 'checkSlug'
])->middleware('auth');

Route::resource('/dashboard/agenda', DashboardAgendaController::class)->middleware('auth');

Route::get('admin', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('admin', [LoginController::class, 'authenticate']);

Route::post('logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/news/checkSlug', [
    DashboardNewsController::class, 'checkSlug'
])->middleware('auth');

Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');

Route::resource('/dashboard/categories/', AdminCategoryController::class);
// Route::get('berita', function () {
//     $blog_posts = [
//         [
//             "title" => "Judul Berita Pertama",
//             "slug" => "judul-post-pertama",
//             "author" => "Abraham Lincoln",
//             "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequuntur assumenda porro atque nam, praesentium ratione distinctio sit blanditiis vel maxime nulla eos provident doloremque laborum sapiente quas asperiores veritatis! Corporis aliquam itaque et ad culpa aspernatur fugiat nisi atque assumenda, quisquam dolorem consectetur nobis inventore veritatis reiciendis enim temporibus maxime iure voluptatum blanditiis! Quod, eius dolorem odio ducimus, nihil, eum quam a accusantium illum molestias ratione amet qui sit nemo totam odit voluptates dolore! Voluptatibus mollitia ipsa culpa ab harum assumenda ad quia molestias saepe quibusdam, quisquam dolorem magnam quo in at, est laudantium velit quasi accusamus? Quae, nemo."
//         ],
    
//         [
//             "title" => "Judul Berita Kedua",
//             "slug" => "judul-post-kedua",
//             "author" => "Kennedy",
//             "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae consequuntur assumenda porro atque nam, praesentium ratione distinctio sit blanditiis vel maxime nulla eos provident doloremque laborum sapiente quas asperiores veritatis! Corporis aliquam itaque et ad culpa aspernatur fugiat nisi atque assumenda, quisquam dolorem consectetur nobis inventore veritatis reiciendis enim temporibus maxime iure voluptatum blanditiis! Quod, eius dolorem odio ducimus, nihil, eum quam a accusantium illum molestias ratione amet qui sit nemo totam odit voluptates dolore! Voluptatibus mollitia ipsa culpa ab harum assumenda ad quia molestias saepe quibusdam, quisquam dolorem magnam quo in at, est laudantium velit quasi accusamus? Quae, nemo."
//         ]
//     ];

//     return view('Code/informasiPublik/berita', [
//         "title" => "Posts", 
//         "posts" => $blog_posts
//     ]);
// });

Route::get('berita', [NewsController::class, 'index']);

Route::get('berita/{news:slug}', [NewsController::class, 'show']);

Route::get('/', [IndexController::class, 'index']);