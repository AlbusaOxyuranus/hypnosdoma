<?php

Route::get('/', function ()
{
    return view('main');
});

Route::get('/test', function ()
{
    return 'Test passed successfully';
});

/** Admin */
Route::get('admin', 'AdminController@index')->middleware('auth');
Route::get('admin/specialists', 'AdminController@specialists')->middleware('auth');
Route::get('admin/packages', 'AdminController@packages')->middleware('auth');
Route::get('admin/contacts', 'AdminController@contacts')->middleware('auth');
Route::get('admin/rewiews', 'AdminController@rewiews')->middleware('auth');
Route::get('admin/seo', 'AdminController@seo')->middleware('auth');
Route::get('admin/advantages', 'AdminController@advantages')->middleware('auth');
Route::get('admin/articles', 'AdminController@articles')->middleware('auth');
Route::get('admin/events', 'AdminController@events')->middleware('auth');
Route::get('admin/payment_forms', 'AdminController@payment_forms')->middleware('auth');
Route::get('admin/infos', 'AdminController@infos')->middleware('auth');
Route::get('admin/learning_questions', 'AdminController@learning_questions')->middleware('auth');

/** Infos */
Route::post('info', 'InfoController@store');
Route::post('info/{info}', 'InfoController@update');
Route::get('info/{info}/delete', 'InfoController@delete');

/** learningQuestions */
Route::post('learning_questions', 'LearningQuestionController@store');
Route::post('learning_questions/{learning_question}', 'LearningQuestionController@update');
Route::get('learning_questions/{learning_question}/delete', 'LearningQuestionController@delete');

/** Advantages */
Route::get('advantages/create', 'AdvantageController@create')->middleware('auth');
Route::post('advantages', 'AdvantageController@store')->middleware('auth');
Route::get('advantages/{advantage}/edit', 'AdvantageController@edit')->middleware('auth');
Route::post('advantages/{advantage}', 'AdvantageController@update')->middleware('auth');
Route::get('advantages/{advantage}/delete', 'AdvantageController@delete')->middleware('auth');
Route::get('advantages/delete_all', 'AdvantageController@delete_all')->middleware('auth');
Route::get('advantages/show_dont_show/{show}', 'AdvantageController@show_dont_show')->middleware('auth');

/** Articles */
Route::get('articles/create', 'ArticleController@create')->middleware('auth');
Route::post('articles', 'ArticleController@store')->middleware('auth');
Route::get('articles/{article}/edit', 'ArticleController@edit')->middleware('auth');
Route::post('articles/{article}', 'ArticleController@update')->middleware('auth');
Route::get('articles/{article}/delete', 'ArticleController@delete')->middleware('auth');
Route::get('articles/delete_all', 'ArticleController@delete_all');
Route::get('articles/show_dont_show/{show}', 'ArticleController@show_dont_show')->middleware('auth');

/** Events */
Route::get('events/create', 'EventController@create')->middleware('auth');
Route::post('events', 'EventController@store')->middleware('auth');
Route::get('events/{event}/edit', 'EventController@edit')->middleware('auth');
Route::post('events/{event}', 'EventController@update')->middleware('auth');
Route::get('events/{event}/delete', 'EventController@delete')->middleware('auth');
Route::get('events/delete_all', 'EventController@delete_all');
Route::get('events/show_dont_show/{show}', 'EventController@show_dont_show')->middleware('auth');

/** Package */
Route::get('packages/create', 'PackageController@create')->middleware('auth');
Route::post('packages', 'PackageController@store')->middleware('auth');
Route::get('packages/{package}/edit', 'PackageController@edit')->middleware('auth');
Route::post('packages/{package}', 'PackageController@update')->middleware('auth');
Route::get('packages/{package}/delete', 'PackageController@delete')->middleware('auth');

/** Specialist */
Route::get('specialists/create', 'SpecialistController@create')->middleware('auth');
Route::post('specialists', 'SpecialistController@store')->middleware('auth');
Route::get('specialists/{specialist}/edit', 'SpecialistController@edit')->middleware('auth');
Route::post('specialists/{specialist}', 'SpecialistController@update')->middleware('auth');
Route::get('specialists/{specialist}/delete', 'SpecialistController@delete')->middleware('auth');

/** Rewiews */
Route::get('rewiews/create', 'RewiewController@create')->middleware('auth');
Route::post('rewiews', 'RewiewController@store')->middleware('auth');
Route::get('rewiews/{rewiew}/edit', 'RewiewController@edit')->middleware('auth');
Route::post('rewiews/{rewiew}', 'RewiewController@update')->middleware('auth');
Route::get('rewiews/{rewiew}/delete', 'RewiewController@delete')->middleware('auth');

/** Contacts */
Route::get('contacts/create', 'ContactController@create')->middleware('auth');
Route::post('contacts', 'ContactController@store')->middleware('auth');
Route::get('contacts/{contact}/edit', 'ContactController@edit')->middleware('auth');
Route::post('contacts/{contact}', 'ContactController@update')->middleware('auth');
Route::get('contacts/{contact}/delete', 'ContactController@delete')->middleware('auth');

/** Payment_forms */
Route::get('payment_forms/create', 'PaymentFormController@create')->middleware('auth');
Route::post('payment_forms', 'PaymentFormController@store')->middleware('auth');
Route::get('payment_forms/{payment_form}/edit', 'PaymentFormController@edit')->middleware('auth');
Route::post('payment_forms/{payment_form}', 'PaymentFormController@update')->middleware('auth');
Route::get('payment_forms/{payment_form}/delete', 'PaymentFormController@delete')->middleware('auth');
Route::get('payment_forms/delete_all', 'PaymentFormController@delete_all')->middleware('auth');
Route::get('payment_forms/show_dont_show/{show}', 'PaymentFormController@show_dont_show')->middleware('auth');

/** SEO */
Route::post('seo', 'SEOPageController@store');
Route::post('seo/{page}', 'SEOPageController@update');
Route::get('seo/{page}/delete', 'SEOPageController@delete');


/** test_send */
Route::post('//test_send', function ()
{
    return request()->all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

// Route::match(['get', 'post'], 'register', function () // при попытке перехода на регистрацию сработает редирект на '/'
// {return redirect('/');});
