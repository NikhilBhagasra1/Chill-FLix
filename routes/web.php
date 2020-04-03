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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/termofuse', function () {
    return view('termofuse');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/orignal', function () {
    return view('orignal');
});
Route::get('/legal', function () {
    return view('legal');
});
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/corporateinfo', function () {
    return view('corporateinfo');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/mainpage', function () {
    return view('mainpage');
});
Route::get('/animated', function () {
    return view('animated');
});
Route::get('/trending', function () {
    return view('trending');
});
Route::get('/movies', function () {
    return view('movies');
});
Route::get('/tvprogrammes', function () {
    return view('tvprogrammes');
});
Route::get('/buynow', function () {
    return view('buynow');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/breakingbad', function () {
    return view('breakingbad');
});
Route::get('/GOT', function () {
    return view('GOT');
});
Route::get('/friends', function () {
    return view('friends');
});
Route::get('/thewitcher', function () {
    return view('thewitcher');
});
Route::get('/naagin', function () {
    return view('naagin');
});
Route::get('/blackmirror', function () {
    return view('blackmirror');
});
Route::get('/moneyheist', function () {
    return view('moneyheist');
});
Route::get('/peakyblinders', function () {
    return view('peakyblinders');
});
Route::get('/alteredcarbon', function () {
    return view('alteredcarbon');
});
Route::get('/houseofcards', function () {
    return view('houseofcards');
});
Route::get('/sherlock', function () {
    return view('sherlock');
});
Route::get('/stangerthings', function () {
    return view('strangerthings');
});
Route::get('/theoffice', function () {
    return view('theoffice');
});
Route::get('/thewalkingdead', function () {
    return view('thewalkingdead');
});
Route::get('/narcos', function () {
    return view('narcos');
});
Route::get('/thesimpsons', function () {
    return view('thesimpsons');
});
Route::get('/adventuretime', function () {
    return view('adventuretime');
});
Route::get('/chotabheem', function () {
    return view('chotabheem');
});
Route::get('/rickandmorty', function () {
    return view('rickandmorty');
});
Route::get('/naruto', function () {
    return view('naruto');
});
Route::get('/dragonballz', function () {
    return view('dragonballz');
});
Route::get('/familyguy', function () {
    return view('familyguy');
});
Route::get('/samuraijack', function () {
    return view('samuraijack');
});
Route::get('/fullmetal', function () {
    return view('fullmetal');
});
Route::get('/attackontitan', function () {
    return view('attackontitan');
});
Route::get('/phineasandferb', function () {
    return view('phineasandferb');
});
Route::get('/demonslayer', function () {
    return view('demonslayer');
});
Route::get('/myhero', function () {
    return view('myhero');
});
Route::get('/sevendeadlysins', function () {
    return view('sevendeadlysins');
});
Route::get('/deathnote', function () {
    return view('deathnote');
});
Route::get('/avengers', function () {
    return view('avengers');
});
Route::get('/parasite', function () {
    return view('parasite');
});
Route::get('/joker', function () {
    return view('joker');
});
Route::get('/herapheri', function () {
    return view('herapheri');
});
Route::get('/macanddevin', function () {
    return view('macanddevin');
});
Route::get('/johnwick', function () {
    return view('johnwick');
});
Route::get('/pineappleexpress', function () {
    return view('pineappleexpress');
});
Route::get('/projectx', function () {
    return view('projectx');
});
Route::get('/dictator', function () {
    return view('dicktator');
});
Route::get('/spiderman', function () {
    return view('spiderman');
});
Route::get('/jajantram', function () {
    return view('jajantram');
});
Route::get('/dirtygrandpa', function () {
    return view('dirtygrandpa');
});
Route::get('/jojorabbit', function () {
    return view('jojorabbit');
});
Route::get('/wonderwomen', function () {
    return view('wonderwomen');
});
Route::get('/polar', function () {
    return view('polar');
});
Route::get('/gabrieliglesias', function () {
    return view('gabrieliglesias');
});
Route::get('/riverdale', function () {
    return view('riverdale');
});
Route::get('/friendsfromcollege', function () {
    return view('friendsfromcollege');
});
Route::get('/tedbundytapes', function () {
    return view('tedbundytapes');
});
Route::get('/unbreakablekimmyschmidt', function () {
    return view('unbreakablekimmyschmidt');
});
Route::get('/edtv', function () {
    return view('edtv');
});
Route::get('/velvetbuzzsaw', function () {
    return view('velvetbuzzsaw');
});
Route::get('/eveningwithbeverly', function () {
    return view('eveningwithbeverly');
});
Route::get('/fyre', function () {
    return view('fyre');
});
Route::get('/amazinginteriors', function () {
    return view('amazinginteriors');
});
Route::get('/punisher', function () {
    return view('punisher');
});
Route::get('/polar', function () {
    return view('polar');
});
Route::get('/suits', function () {
    return view('suits');
});
Route::get('/thegoodplace', function () {
    return view('thegoodplace');
});
Route::get('/russiandoll', function () {
    return view('russiandoll');
});














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
