<?php

//Home Controller

Route::get('/','HomeController@index');
Route::post('/search','HomeController@search');
Route::get('/company-login','HomeController@company_login');
Route::get('/job-list','HomeController@job_list');




//jobseekerController routes.....
Route::post('/jobseeker-signup','JobseekerController@signup');
Route::get('/jobseeker-login','JobseekerController@index');
Route::post('/jobseeker-profile','JobseekerController@profile');
Route::get('/jobseeker-logout','JobseekerController@logout');

Route::get('/jobseeker-profile-setting','JobseekerController@profile_setting');
Route::get('/jobseeker-message','JobseekerController@message');
Route::get('/applied-job','JobseekerController@applied_job');

//edit
Route::get('/edit-jobseeker/{jobseeker_id}','JobseekerController@editjobseeker');
Route::post('/jobseeker-profile-update','JobseekerController@profile_update');
Route::post('/add-post','CompanyController@add_post');

Route::get('/applied','JobseekerController@apply');



//apply

Route::post('/apply_job/{id}','CompanyController@apply_job');




//edit

//companyController routes


Route::post('/company-signup','CompanyController@signup');
Route::get('/company-logout','CompanyController@logout');
Route::get('/company-login','CompanyController@index');

//signin form
Route::post('/company-profile','CompanyController@profile');

//dashboard
Route::get('/company-profile-setting','CompanyController@profile_setting');
//edit
Route::get('/edit-company/{id}','CompanyController@editCompany');
Route::post('/company-profile-update','CompanyController@profile_update');

Route::get('/post-job-notice','CompanyController@post_job');
Route::post('/company_post','Company_postController@post');
Route::get('/posted-job','Company_PostController@posted_job');


Route::get('/company-message','CompanyController@message');

































//backend routes.......................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/manage-jobseeker','SuperAdminController@manage_jobseeker');


//post routes..........................
Route::get('/manage-post','PostController@manage_post');

