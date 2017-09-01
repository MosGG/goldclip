<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/animation', function () {
    return view('pages.animation');
});

/*
|--------------------------------------------------------------------------
| Front-end Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for front-end application.
|
*/

/*
|--------------------------------------------------------------------------
| App Testing
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for admin application.
|
*/

Route::post('/app-login-action', [
        'as' => 'app-login-action',
        'uses' => 'admin\AdminActionController@appLoginTest'
]);

Route::post('/dataCollection', [
        'as' => 'dataCollection',
        'uses' => 'AppTestingController@dataCollection'
]);

Route::get('/dotaProfileTestingData', [
        'as' => 'dotaProfileTestingData',
        'uses' => 'AppTestingController@dotaProfileTestingData'
]);

Route::get('/dotaAPITesting', [
        'as' => 'dotaAPITesting',
        'uses' => 'dotaAPIController@executeProgram'
]);



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for admin application.
|
*/


Route::get('/admin-login', [
        'as' => 'admin-login',
        'uses' => 'admin\PagesController@login'
]);

Route::post('/login-action', [
        'as' => 'login-action',
        'uses' => 'admin\AdminActionController@login'
]);

Route::group(['middleware' => 'admin'], function () {

    Route::group(['middleware' => 'rootPermission'], function () {
        Route::get('/admin-home', [
            'as' => 'admin-home',
            'uses' => 'admin\PagesController@home'
        ]);
    });

    Route::get('/admin-document', [
        'as' => 'admin-document',
        'uses' => 'admin\PagesController@document'
    ]);

    Route::get('/media-library', [
        'as' => 'media-library',
        'uses' => 'admin\PagesController@mediaLibrary'
    ]);
    
    Route::post('/media-library-new-folder', 'admin\PagesController@mediaLibraryNewFolder');
    Route::post('/media-library-delete-folder', 'admin\PagesController@mediaLibraryDelFolder');
    Route::post('/media-library-move', 'admin\PagesController@mediaLibraryMove');
    
    Route::get('/logout-action', [
        'as' => 'logout-action',
        'uses' => 'admin\AdminActionController@logout'
    ]);

    Route::get('/admin-portfolio', [
        'as' => 'admin-portfolio',
        'uses' => 'admin\PagesController@portfolio'
    ]);

    Route::get('/portfolio-sort', [
        'as' => 'portfolio-sort',
        'uses' => 'admin\PagesController@portfolioSort'
    ]);

    Route::get('/portfolio-new', [
        'as' => 'portfolio-new',
        'uses' => 'admin\PagesController@portfolioNew'
    ]);

    Route::get('/portfolio-edit/{id}', [
        'as' => 'portfolio-edit',
        'uses' => 'admin\PagesController@portfolioEdit'
    ]);

    

    /*
     Admin Ajax Call From View
    */

    Route::post('/admin-add-action', 'admin\AdminActionController@adminAdd');
    Route::post('/admin-edit-action', 'admin\AdminActionController@adminEdit');
    Route::post('/admin-delete-action', 'admin\AdminActionController@adminDelete');

    Route::post('/media-upload', 'admin\MediaLibraryController@mediaUpload');
    
    Route::post('/media-upload-to-folder', 'admin\MediaLibraryController@mediaUploadToFolder');
    
    Route::post('/delete-media-file', 'admin\MediaLibraryController@deleteMediaFile');

    Route::post('/file-upload', 'admin\MediaLibraryController@fileUpload');
    Route::post('/document-delete-action', 'admin\MediaLibraryController@deleteFile');

   

    Route::post('/portfolio-add-action', 'admin\PortfolioActionController@portfolioNew');
    Route::post('/portfolio-edit-action', 'admin\PortfolioActionController@portfolioEdit');
    Route::post('/portfolio-feature-action', 'admin\PortfolioActionController@portfolioFeature');
    Route::post('/portfolio-client-action', 'admin\PortfolioActionController@portfolioClient');
    Route::post('/portfolio-delete-action', 'admin\PortfolioActionController@portfolioDelete');
    Route::post('/portfolio-ban-action', 'admin\PortfolioActionController@portfolioBan');
    Route::post('/portfolio-active-action', 'admin\PortfolioActionController@portfolioActive');
    Route::post('/client-sort-action', 'admin\PortfolioActionController@clientSort');
});


/*
 * Front-end pages
 */
Route::group(['middleware' => 'web'], function () {

     Route::get('/', [
        'as' => '',
        'uses' => 'PagesController@home'
    ]);

    Route::get('/index', [
        'as' => 'index',
        'uses' => 'PagesController@home'
    ]);

    Route::any('/login', [
        'as' => 'login',
        'uses' => 'PagesController@login'
    ]);

    Route::get('/portfolio', [
        'as' => 'portfolio',
        'uses' => 'PagesController@portfolio'
    ]);

    Route::get('/contact', [
        'as' => 'contact',
        'uses' => 'PagesController@contact'
    ]);

    Route::get('/about', [
        'as' => 'about',
        'uses' => 'PagesController@about'
    ]);

    Route::get('/service', [
        'as' => 'service',
        'uses' => 'PagesController@service'
    ]);

    /*
    *  Portfolio Pages (urls for all the portfolio parts)
    */
    Route::get('/portfolioTpls/{index}', [
        'as' => 'portfolio',
        'uses' => 'PagesController@portfolioTemplates'
    ]);
    /*
    *  FrontEnd Ajax Call
    */
    Route::post('/email-sending', 'EmailController@messageSend');
    Route::post('/get-portfolio-data', 'PortfolioController@getPortfolioData');
});
