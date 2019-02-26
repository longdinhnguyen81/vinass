<?php

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

Route::pattern('id','([0-9]*)');
Route::pattern('cid','([0-9]*)');
Route::pattern('slug','(.*)');

Route::namespace('Vinass')->group(function(){
	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'vinass.index.index'
	]);
	Route::get('/gioi-thieu', [
		'uses' => 'IndexController@aboutus',
		'as' => 'vinass.index.aboutus'
	]);
	Route::get('/thiet-ke-web', [
		'uses' => 'IndexController@design',
		'as' => 'vinass.index.design'
	]);
	Route::get('/ung-dung', [
		'uses' => 'IndexController@application',
		'as' => 'vinass.index.application'
	]);
	Route::get('/giao-dien', [
		'uses' => 'IndexController@templates',
		'as' => 'vinass.index.templates'
	]);
	Route::get('/lien-he', [
		'uses' => 'IndexController@getContact',
		'as' => 'vinass.index.contact'
	]);
	Route::post('/lien-he', [
		'uses' => 'IndexController@postContact',
		'as' => 'vinass.index.contact'
	]);
	Route::get('/blog/', [
		'uses' => 'NewsController@news',
		'as' => 'vinass.news.news'
	]);
	Route::get('/search', [
		'uses' => 'NewsController@getSearch',
		'as' => 'vinass.news.search'
	]);
	Route::get('/blogs/{slug}', [
		'uses' => 'NewsController@parent',
		'as' => 'vinass.news.parent'
	]);
	Route::get('/blog/{slug}-{cid}', [
		'uses' => 'NewsController@cat',
		'as' => 'vinass.news.cat'
	]);
	Route::get('/{slug}-{id}.html', [
		'uses' => 'NewsController@detail',
		'as' => 'vinass.news.detail'
	]);
});

Route::namespace('Templates')->group(function(){
	Route::get('/templates/index-one-page', [
		'uses' => 'IndexController@indexonepage',
		'as' => 'vinass.templates.indexonepage'
	]);
	Route::get('/templates/index-classic', [
		'uses' => 'IndexController@indexclassic',
		'as' => 'vinass.templates.indexclassic'
	]);
	Route::get('/templates/index-classic-color', [
		'uses' => 'IndexController@indexclassiccolor',
		'as' => 'vinass.templates.indexclassiccolor'
	]);
	Route::get('/templates/index-classic-light', [
		'uses' => 'IndexController@indexclassiclight',
		'as' => 'vinass.templates.indexclassiclight'
	]);
	Route::get('/templates/index-corporate', [
		'uses' => 'IndexController@indexcorporate',
		'as' => 'vinass.templates.indexcorporate'
	]);
	Route::get('/templates/index-corporate-2', [
		'uses' => 'IndexController@indexcorporate2',
		'as' => 'vinass.templates.indexcorporate2'
	]);
	Route::get('/templates/index-corporate-3', [
		'uses' => 'IndexController@indexcorporate3',
		'as' => 'vinass.templates.indexcorporate3'
	]);
	Route::get('/templates/index-corporate-4', [
		'uses' => 'IndexController@indexcorporate4',
		'as' => 'vinass.templates.indexcorporate4'
	]);
	Route::get('/templates/index-corporate-5', [
		'uses' => 'IndexController@indexcorporate5',
		'as' => 'vinass.templates.indexcorporate5'
	]);
	Route::get('/templates/index-corporate-6', [
		'uses' => 'IndexController@indexcorporate6',
		'as' => 'vinass.templates.indexcorporate6'
	]);
	Route::get('/templates/index-corporate-7', [
		'uses' => 'IndexController@indexcorporate7',
		'as' => 'vinass.templates.indexcorporate7'
	]);
	Route::get('/templates/index-corporate-8', [
		'uses' => 'IndexController@indexcorporate8',
		'as' => 'vinass.templates.indexcorporate8'
	]);
	Route::get('/templates/index-corporate-9', [
		'uses' => 'IndexController@indexcorporate9',
		'as' => 'vinass.templates.indexcorporate9'
	]);
	Route::get('/templates/index-corporate-10', [
		'uses' => 'IndexController@indexcorporate10',
		'as' => 'vinass.templates.indexcorporate10'
	]);
	Route::get('/templates/index-corporate-11', [
		'uses' => 'IndexController@indexcorporate11',
		'as' => 'vinass.templates.indexcorporate11'
	]);
	Route::get('/templates/index-corporate-12', [
		'uses' => 'IndexController@indexcorporate12',
		'as' => 'vinass.templates.indexcorporate12'
	]);
	Route::get('/templates/index-corporate-13', [
		'uses' => 'IndexController@indexcorporate13',
		'as' => 'vinass.templates.indexcorporate13'
	]);
	Route::get('/templates/index-corporate-14', [
		'uses' => 'IndexController@indexcorporate14',
		'as' => 'vinass.templates.indexcorporate14'
	]);
	Route::get('/templates/index-corporate-15', [
		'uses' => 'IndexController@indexcorporate15',
		'as' => 'vinass.templates.indexcorporate15'
	]);
	Route::get('/templates/index-corporate-16', [
		'uses' => 'IndexController@indexcorporate16',
		'as' => 'vinass.templates.indexcorporate16'
	]);
	Route::get('/templates/index-corporate-17', [
		'uses' => 'IndexController@indexcorporate17',
		'as' => 'vinass.templates.indexcorporate17'
	]);
	Route::get('/templates/index-corporate-18', [
		'uses' => 'IndexController@indexcorporate18',
		'as' => 'vinass.templates.indexcorporate18'
	]);
	Route::get('/templates/index-corporate-19', [
		'uses' => 'IndexController@indexcorporate19',
		'as' => 'vinass.templates.indexcorporate19'
	]);
	Route::get('/templates/index-corporate-20', [
		'uses' => 'IndexController@indexcorporate20',
		'as' => 'vinass.templates.indexcorporate20'
	]);
	//portfolio
	Route::get('/templates/portfolio1', [
		'uses' => 'IndexController@portfolio1',
		'as' => 'vinass.templates.portfolio1'
	]);
	Route::get('/templates/portfolio2', [
		'uses' => 'IndexController@portfolio2',
		'as' => 'vinass.templates.portfolio2'
	]);
	Route::get('/templates/portfolio3', [
		'uses' => 'IndexController@portfolio3',
		'as' => 'vinass.templates.portfolio3'
	]);
	Route::get('/templates/portfolio4', [
		'uses' => 'IndexController@portfolio4',
		'as' => 'vinass.templates.portfolio4'
	]);
});

Route::namespace('Ajax')->group(function(){
	Route::get('/feedback', [
		'uses' => 'AdminController@activeFeedback',
		'as' => 'ajax.admin.activeFeedback'
	]);
	Route::get('/slide', [
		'uses' => 'AdminController@activeSlide',
		'as' => 'ajax.admin.activeSlide'
	]);
	Route::get('/news', [
		'uses' => 'AdminController@activeNews',
		'as' => 'ajax.admin.activeNews'
	]);
});

Route::namespace('Admin')->group(function(){
// Index ADMIN	
	Route::prefix('admin')->group(function(){
		Route::get('', [
			'uses' => 'IndexController@index',
			'as' => 'admin.index.index'
		]);
	// cat
		Route::prefix('cat')->group(function(){
			Route::get('', [
				'uses' => 'CatController@index',
				'as' => 'admin.cat.index'
			]);
			Route::get('add', [
				'uses' => 'CatController@getAdd',
				'as' => 'admin.cat.add'
			]);
			Route::post('add', [
				'uses' => 'CatController@postAdd',
				'as' => 'admin.cat.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'CatController@getEdit',
				'as' => 'admin.cat.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'CatController@postEdit',
				'as' => 'admin.cat.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'CatController@delete',
				'as' => 'admin.cat.delete'
			]);
		});
	// news
		Route::prefix('news')->group(function(){
			Route::get('', [
				'uses' => 'NewsController@index',
				'as' => 'admin.news.index'
			]);
			Route::get('add', [
				'uses' => 'NewsController@getAdd',
				'as' => 'admin.news.add'
			]);
			Route::post('add', [
				'uses' => 'NewsController@postAdd',
				'as' => 'admin.news.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'NewsController@getEdit',
				'as' => 'admin.news.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'NewsController@postEdit',
				'as' => 'admin.news.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'NewsController@delete',
				'as' => 'admin.news.delete'
			]);
		});
	// user
		Route::prefix('user')->group(function(){
			Route::get('', [
				'uses' => 'UserController@index',
				'as' => 'admin.user.index'
			]);
			Route::get('add', [
				'uses' => 'UserController@getAdd',
				'as' => 'admin.user.add'
			]);
			Route::post('add', [
				'uses' => 'UserController@postAdd',
				'as' => 'admin.user.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'UserController@getEdit',
				'as' => 'admin.user.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'UserController@postEdit',
				'as' => 'admin.user.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'UserController@delete',
				'as' => 'admin.user.delete'
			]);
		});
	// feedback
		Route::prefix('feedback')->group(function(){
			Route::get('', [
				'uses' => 'FeedbackController@index',
				'as' => 'admin.feedback.index'
			]);
			Route::get('add', [
				'uses' => 'FeedbackController@getAdd',
				'as' => 'admin.feedback.add'
			]);
			Route::post('add', [
				'uses' => 'FeedbackController@postAdd',
				'as' => 'admin.feedback.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'FeedbackController@getEdit',
				'as' => 'admin.feedback.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'FeedbackController@postEdit',
				'as' => 'admin.feedback.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'FeedbackController@delete',
				'as' => 'admin.feedback.delete'
			]);
		});
	//slide
		Route::prefix('slide')->group(function(){
			Route::get('', [
				'uses' => 'SlideController@index',
				'as' => 'admin.slide.index'
			]);
			Route::get('add', [
				'uses' => 'SlideController@getAdd',
				'as' => 'admin.slide.add'
			]);
			Route::post('add', [
				'uses' => 'SlideController@postAdd',
				'as' => 'admin.slide.add'
			]);
			Route::get('edit/{id}', [
				'uses' => 'SlideController@getEdit',
				'as' => 'admin.slide.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'SlideController@postEdit',
				'as' => 'admin.slide.edit'
			]);
			Route::get('delete/{id}', [
				'uses' => 'SlideController@delete',
				'as' => 'admin.slide.delete'
			]);
		});
	//contact
		Route::prefix('contact')->group(function(){
			Route::get('', [
				'uses' => 'ContactController@index',
				'as' => 'admin.contact.index'
			]);
			Route::get('delete/{id}', [
				'uses' => 'ContactController@delete',
				'as' => 'admin.contact.delete'
			]);
		});
	//contact
		Route::prefix('email')->group(function(){
			Route::get('', [
				'uses' => 'EmailController@index',
				'as' => 'admin.email.index'
			]);
			Route::get('email/{id}', [
				'uses' => 'EmailController@delete',
				'as' => 'admin.email.delete'
			]);
		});
	});
});