<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    // Configuration de cURL
    $curlOptions = [
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
    ];

// Configuration du client Guzzle HTTP avec les options cURL
    $client = new \GuzzleHttp\Client([
        'curl' => $curlOptions,
    ]);

// Envoi de la requête à l'API GeoNames
    $response = $client->get('https://laravel-world.com/api/states?filters%5Bcountry_code%5D=CD&fields=cities');

// Récupération du corps de la réponse
    $body = $response->getBody();

// Conversion de la réponse JSON en tableau associatif
    $data = json_decode($body, true);
    //dd($data);

// Traitement des données
    if (isset($data['data'])) {
        foreach ($data['data'] as $dataState) {
            $state = \App\Models\State::where('name', '=', $dataState['name'])->first();
            foreach ($dataState['cities'] as $dataCity) {
                $city = new \App\Models\City();
                $city->name = $dataCity['name'];
                $city->state_id = $state->id;
                $city->save();
                //dump($state->name, $dataCity['name']);
            }
            //echo $state['name'] . PHP_EOL;
        }
    }
});
//Route::get('/', ['as' => 'home.page', 'uses' => 'App\\Http\\Controllers\\PageController@home']);
Route::get('/about', ['as' => 'about.page', 'uses' => 'App\\Http\\Controllers\\PageController@about']);
Route::get('/category/{category}', ['as' => 'category.page', 'uses' => 'App\\Http\\Controllers\\PageController@category']);
Route::get('/event', ['as' => 'article.page', 'uses' => 'App\\Http\\Controllers\\PageController@event']);
Route::get('/event/{event}', ['as' => 'event.details.page', 'uses' => 'App\\Http\\Controllers\\PageController@details']);
Route::get('/faq', ['as' => 'faq.page', 'uses' => 'App\\Http\\Controllers\\PageController@faq']);
Route::get('/confidentialite', ['as' => 'confidentialite.page', 'uses' => 'App\\Http\\Controllers\\PageController@confidentialite']);
Route::get('/register/{event?}', ['as' => 'register.page', 'uses' => 'App\\Http\\Controllers\\PageController@register']);
Route::get('/login/{event?}', ['as' => 'login.page', 'uses' => 'App\\Http\\Controllers\\PageController@login']);
Route::get('/contact', ['as' => 'contact.page', 'uses' => 'App\\Http\\Controllers\\PageController@contact']);
Route::post('/contact', ['as' => 'contact.page', 'uses' => 'App\\Http\\Controllers\\PageController@contactUs']);

Route::post('/auth/register/{event?}', ['as' => 'register.auth', 'uses' => 'App\\Http\\Controllers\\AuthController@register']);
Route::get('/active/{user}/{event?}', ['as' => 'activeAccount.auth', 'uses' => 'App\\Http\\Controllers\\AuthController@activeAccount']);
Route::post('/auth/login/{event?}', ['as' => 'login.auth', 'uses' => 'App\\Http\\Controllers\\AuthController@login']);

Route::resource('sale', 'App\\Http\\Controllers\\SaleController');
Route::get('/check/sale/{sale}', ['as' => 'check.sale', 'uses' => 'App\\Http\\Controllers\\SaleController@check']);
Route::get('/images/events/{path}', ['as' => 'show.image', 'uses' => 'App\\Http\\Controllers\\ImageController@show']);

Route::prefix('admin')->group(function(){
    Route::resource('type', 'App\\Http\\Controllers\\TypeController')->except(['show']);
    Route::resource('category', 'App\\Http\\Controllers\\CategoryController')->except(['show']);
    Route::resource('organiser', 'App\\Http\\Controllers\\OrganiserController')->except(['show']);
    Route::resource('event', 'App\\Http\\Controllers\\EventController')->except(['show']);
    Route::post('/confirm/{sale}', ['as' => 'confirm.sale', 'uses' => 'App\\Http\\Controllers\\SaleController@confirm']);
});
