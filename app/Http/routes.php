<?php

// Blog pages
get('/', function () {
    return redirect('/blog');
});
get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');
$router->get("contact","ContactController@showForm");
Route::post("contact","ContactController@sendContactInfo");
Route::get('sitemap.xml','BlogController@siteMap');

// Admin area
get('admin', function () {
    return redirect('/admin/post');
});
$router->group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    resource('admin/post', 'PostController');
    resource('admin/tag', 'TagController');
    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('mail/send','MailController@send');