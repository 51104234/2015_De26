<?php

Route::get('/', array(
	'as'	=> 'get-main',
	'uses'	=> 'MainController@getMain',
));

Route::get('/blog', array(
	'as'	=> 'get-blog',
	'uses'	=> 'MainController@getBlog',
));

Route::group(array('before' => 'auth'), function() {

	/* ++++++++ GET ++++++++ */
	Route::get('/logout', array(
		'as'	=> 'get-logout',
		'uses'	=> 'AuthController@getLogout',
	));

	Route::get('/profile', array(
		'as'	=> 'get-profile',
		'uses'	=> 'AuthController@getProfile',
	));

	/* ++++++++ POST ++++++++ */
	Route::post('/profile', array(
		'as'	=> 'post-profile',
		'uses'	=> 'AuthController@postProfile',
	));
});

Route::group(array('before' => 'guest'), function() {

	/* ++++++++ GET ++++++++ */
	Route::get('/signup', array(
		'as'	=> 'get-signup',
		'uses'	=> 'UserController@getSignup',
	));

	Route::get('/signin', array(
		'as'	=> 'get-signin',
		'uses'	=> 'UserController@getSignin',
	));


	/* ++++++++ POST ++++++++ */
	Route::post('/signup', array(
		'as'	=> 'post-signup',
		'uses'	=> 'UserController@postSignup',
		'before'=> 'csrf',
	));

	Route::post('/signin', array(
		'as'	=> 'post-signin',
		'uses'	=> 'UserController@postSignin',
		'before'=> 'csrf',
	));

});
Route::group(array('before' => 'auth'), function() {
	Route::get('/post/create', array(
		'as'	=> 'post.create',
		'uses'	=> 'PagesController@create',
	));
	Route::post('/post', array(
		'as'	=> 'post.postAddPost',
		'uses'	=> 'PagesController@postAddPost',
	));
	Route::post('/blog', array(
		'as'	=> 'post.comment',
		'uses'	=> 'PagesController@comment',
	));
	
});
Route::get('/post/{id}', array(
	'as'	=> 'post.show',
	'uses'	=> 'PagesController@show',
));
Route::get('/categories/{id}', array(
	'as'	=> 'post.categories',
	'uses'	=> 'PagesController@showCategories',
));

Route::get('/admin', array(
	'as'	=> 'get-admin',
	'uses'	=> 'AdminController@getAdmin',
));

Route::group(array('prefix' => 'admin'), function() {
	Route::get('/categories', array(
		'as'	=> 'categories.index',
		'uses'	=> 'CategoriesController@getIndex',
	));
	Route::get('/categories/create', array(
		'as'	=> 'categories.create',
		'uses'	=> 'CategoriesController@getCreate',
	));
	Route::get('/categories/{id}/edit', array(
		'as'	=> 'categories.edit',
		'uses'	=> 'CategoriesController@getEdit',
	));
	Route::get('/posts', array(
		'as'	=> 'posts.index',
		'uses'	=> 'PostsController@getIndex',
	));
	Route::get('/comments', array(
		'as'	=> 'comments.index',
		'uses'	=> 'CommentsController@getIndex',
	));
	Route::get('/users', array(
		'as'	=> 'users.index',
		'uses'	=> 'UserAccountsController@getIndex',
	));
	Route::get('/users/create', array(
		'as'	=> 'users.create',
		'uses'	=> 'UserAccountsController@getCreate',
	));
});

Route::group(array("prefix"=>"admin"),function(){
	Route::post('/categories', array(
	'as'	=> 'categories.postCreate',
	'uses'	=> 'CategoriesController@postCreate',
	));
	Route::post('/categories/{id}', array(
	'as'	=> 'categories.postEdit',
	'uses'	=> 'CategoriesController@postEdit',
	));
	Route::delete('/categories/{id}', array(
	'as'	=> 'categories.destroy',
	'uses'	=> 'CategoriesController@destroy',
	));
	Route::delete('/posts/{id}', array(
	'as'	=> 'posts.destroy',
	'uses'	=> 'PostsController@destroy',
	));
	Route::post('/users', array(
	'as'	=> 'users.postCreate',
	'uses'	=> 'UserAccountsController@postCreate',
	));
	Route::delete('/comments/{id}', array(
	'as'	=> 'comments.destroy',
	'uses'	=> 'CommentsController@destroy',
	));
	Route::delete('/users/{id}', array(
	'as'	=> 'users.destroy',
	'uses'	=> 'UserAccountsController@destroy',
	));
});
