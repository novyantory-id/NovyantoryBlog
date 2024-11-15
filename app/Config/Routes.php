<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('portal', 'Login::index');
$routes->post('login', 'Login::login_action');
$routes->get('logout', 'Login::logout');

$routes->get('/', 'Home::index');
$routes->get('kategori/(:any)', 'Home::kategori/$1');
$routes->get('artikel', 'Home::artikel');





// $routes->get('admin/home', 'Admin\Home::index');
// $routes->get('penulis/home', 'Penulis\Home::index');

// akses admin
//materi ke-5, copy Filter di document CI
//buat file filter di App/Filters/namafile:AdminFilter.php dan paste code nya.

//setting routes di sini (materi 5)
$routes->get('admin/home', 'Admin\Home::index', ['filter' => 'adminFilter']);
//buat session role_id (nama role_id bebas saja) di AdminFilter.php
$routes->get('penulis/home', 'Penulis\Home::index', ['filter' => 'penulisFilter']);

//route Admin kategori
$routes->get('admin/kategori', 'Admin\Kategori::index', ['filter' => 'adminFilter']);
$routes->post('admin/kategori/checkslug', 'Admin\Kategori::checkslug', ['filter' => 'adminFilter']);
$routes->get('admin/kategori/create', 'Admin\Kategori::create', ['filter' => 'adminFilter']);
$routes->post('admin/kategori/store', 'Admin\Kategori::store', ['filter' => 'adminFilter']);
$routes->get('admin/kategori/edit/(:segment)', 'Admin\Kategori::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/kategori/update/(:segment)', 'Admin\Kategori::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/kategori/delete/(:segment)', 'Admin\Kategori::delete/$1', ['filter' => 'adminFilter']);

//route Admin Tags
$routes->get('admin/tags', 'Admin\Tags::index', ['filter' => 'adminFilter']);
$routes->post('admin/tags/checkslug', 'Admin\Tags::checkslug', ['filter' => 'adminFilter']);
$routes->get('admin/tags/create', 'Admin\Tags::create', ['filter' => 'adminFilter']);
$routes->post('admin/tags/store', 'Admin\Tags::store', ['filter' => 'adminFilter']);
$routes->get('admin/tags/edit/(:segment)', 'Admin\Tags::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/tags/update/(:segment)', 'Admin\Tags::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/tags/delete/(:segment)', 'Admin\Tags::delete/$1', ['filter' => 'adminFilter']);

//route Admin Slides
$routes->get('admin/slides', 'Admin\Slides::index', ['filter' => 'adminFilter']);
$routes->get('admin/slides/create', 'Admin\Slides::create', ['filter' => 'adminFilter']);
$routes->post('admin/slides/store', 'Admin\Slides::store', ['filter' => 'adminFilter']);
$routes->get('admin/slides/edit/(:segment)', 'Admin\Slides::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/slides/update/(:segment)', 'Admin\Slides::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/slides/delete/(:segment)', 'Admin\Slides::delete/$1', ['filter' => 'adminFilter']);

//route Admin users
$routes->get('admin/users', 'Admin\Users::index', ['filter' => 'adminFilter']);
$routes->get('admin/users/detail/(:segment)', 'Admin\Users::detail/$1', ['filter' => 'adminFilter']);
$routes->get('admin/users/create', 'Admin\Users::create', ['filter' => 'adminFilter']);
$routes->post('admin/users/store', 'Admin\Users::store', ['filter' => 'adminFilter']);
$routes->get('admin/users/edit/(:segment)', 'Admin\Users::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/users/update/(:segment)', 'Admin\Users::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/users/delete/(:segment)', 'Admin\Users::delete/$1', ['filter' => 'adminFilter']);

//route admin profile
$routes->get('admin/profile', 'Admin\ProfileUser::index', ['filter' => 'adminFilter']);


//route Admin Artikel
$routes->get('admin/artikel', 'Admin\Artikel::allarticlesview', ['filter' => 'adminFilter']);
$routes->post('admin/artikel/checkslug', 'Admin\Artikel::checkslug', ['filter' => 'adminFilter']);
$routes->get('admin/artikel/create', 'Admin\Artikel::create', ['filter' => 'adminFilter']);
$routes->post('upload-images', 'Admin\Artikel::uploadImages', ['filter' => 'adminFilter']);
$routes->post('delete-gambar', 'Admin\Artikel::deleteGambar', ['filter' => 'adminFilter']);
$routes->get('list-images', 'Admin\Artikel::listImages', ['filter' => 'adminFilter']);
$routes->post('admin/artikel/store', 'Admin\Artikel::store', ['filter' => 'adminFilter']);
$routes->get('admin/artikel/edit/(:segment)', 'Admin\Artikel::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/artikel/update/(:segment)', 'Admin\Artikel::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/artikel/delete/(:segment)', 'Admin\Artikel::delete/$1', ['filter' => 'adminFilter']);
$routes->get('admin/myartikel', 'Admin\Artikel::myarticle', ['filter' => 'adminFilter']);


//route Penulis profile
$routes->get('penulis/profile', 'Penulis\ProfileUser::index', ['filter' => 'penulisFilter']);

//route Penulis password
$routes->get('penulis/password', 'Penulis\Password::index', ['filter' => 'penulisFilter']);
$routes->post('penulis/password/store', 'Penulis\Password::store', ['filter' => 'penulisFilter']);

//route Penulis Artikel
$routes->get('penulis/artikel', 'Penulis\Artikel::index', ['filter' => 'penulisFilter']);
$routes->post('penulis/artikel/checkslug', 'Penulis\Artikel::checkslug', ['filter' => 'penulisFilter']);
$routes->get('penulis/artikel/create', 'Penulis\Artikel::create', ['filter' => 'penulisFilter']);
$routes->post('upload-images', 'Penulis\Artikel::uploadImages', ['filter' => 'penulisFilter']);
$routes->post('delete-gambar', 'Penulis\Artikel::deleteGambar', ['filter' => 'penulisFilter']);
$routes->get('list-images', 'Penulis\Artikel::listImages', ['filter' => 'penulisFilter']);
$routes->post('penulis/artikel/store', 'Penulis\Artikel::store', ['filter' => 'penulisFilter']);
$routes->get('penulis/artikel/edit/(:segment)', 'Penulis\Artikel::edit/$1', ['filter' => 'penulisFilter']);
$routes->post('penulis/artikel/update/(:segment)', 'Penulis\Artikel::update/$1', ['filter' => 'penulisFilter']);
$routes->get('penulis/artikel/delete/(:segment)', 'Penulis\Artikel::delete/$1', ['filter' => 'penulisFilter']);


$routes->get('/(:any)', 'Home::detail/$1');
