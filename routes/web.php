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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'StrandedController@index')->name('2');
Route::get('/home', 'StrandedController@index')->name('home');

Route::get('/index', 'StrandedController@index')->name('home1');
Route::post('/strandedS', 'StrandedController@create')->name('strandedSubmit');
Route::get('/success','StrandedController@success');

Route::get('/tanpuina', 'TanpuinaController@index')->name('tanpuinaF')->middleware('IsAdmin');;
Route::post('/tanpuinaS', 'TanpuinaController@create')->name('tanpuinaS')->middleware('IsAdmin');;
Route::get('/successTanpuina','TanpuinaController@success');
Route::get('/tanpuinaList', 'TanpuinaController@view')->name('tanpuinaView')->middleware('IsAdmin');
Route::get('/deleteT/{id}','TanpuinaController@destroy')->middleware('IsAdmin');




Route::get('/list', 'StrandedController@view')->name('strandedView')->middleware('IsAdmin');

Route::post('/stateList', 'StrandedController@viewState')->name('stateList')->middleware('IsAdmin');
Route::post('/districtList', 'StrandedController@viewDistrict')->name('districtList')->middleware('IsAdmin');
Route::get('/delete/{id}','StrandedController@destroy')->middleware('IsAdmin');


Route::get('/download','DownloadController@index')->name('downloadPage');
Route::get('exportAll', 'DownloadController@exportAll')->name('exportAll');
Route::get('exportAssam', 'DownloadController@exportAssam')->name('exportAssam');
Route::get('exportAP', 'DownloadController@exportAndhraPradesh')->name('exportAP');
Route::get('exportArunachal', 'DownloadController@exportArunachalPradesh')->name('exportArunachalPradesh');
Route::get('exportBihar', 'DownloadController@exportBihar')->name('exportBihar');
Route::get('exportChhattisgarh', 'DownloadController@exportChhattisgarh')->name('exportChhattisgarh');
Route::get('exportGoa', 'DownloadController@exportGoa')->name('exportGoa');
Route::get('exportGujarat', 'DownloadController@exportGujarat')->name('exportGujarat');
Route::get('exportHaryana', 'DownloadController@exportHaryana')->name('exportHaryana');
Route::get('exportHimachalPradesh', 'DownloadController@exportHimachalPradesh')->name('exportHimachalPradesh');
Route::get('exportJK', 'DownloadController@exportJK')->name('exportJK');
Route::get('exportJharkhand', 'DownloadController@exportJharkhand')->name('exportJharkhand');
Route::get('exportKarnataka', 'DownloadController@exportKarnataka')->name('exportKarnataka');
Route::get('exportKerala', 'DownloadController@exportKerala')->name('exportKerala');
Route::get('exportMadyaPradesh', 'DownloadController@exportMadyaPradesh')->name('exportMadyaPradesh');
Route::get('exportMaharashtra', 'DownloadController@exportMaharashtra')->name('exportMaharashtra');
Route::get('exportManipur', 'DownloadController@exportManipur')->name('exportManipur');
Route::get('exportMeghalaya', 'DownloadController@exportMeghalaya')->name('exportMeghalaya');
Route::get('exportNagaland', 'DownloadController@exportNagaland')->name('exportNagaland');
Route::get('exportOrissa', 'DownloadController@exportOrissa')->name('exportOrissa');
Route::get('exportPunjab', 'DownloadController@exportPunjab')->name('exportPunjab');
Route::get('exportRajasthan', 'DownloadController@exportRajasthan')->name('exportRajasthan');
Route::get('exportSikkim', 'DownloadController@exportSikkim')->name('exportSikkim');
Route::get('exportTamilNadu', 'DownloadController@exportTamilNadu')->name('exportTamilNadu');
Route::get('exportTelagana', 'DownloadController@exportTelagana')->name('exportTelagana');
Route::get('exportTripura', 'DownloadController@exportTripura')->name('exportTripura');
Route::get('exportUttaranchal', 'DownloadController@exportUttaranchal')->name('exportUttaranchal');
Route::get('exportUttarPradesh', 'DownloadController@exportUttarPradesh')->name('exportUttarPradesh');
Route::get('exportWestBengal', 'DownloadController@exportWestBengal')->name('exportWestBengal');
Route::get('exportAndamanAndNicobarIslands', 'DownloadController@exportAndamanAndNicobarIslands')->name('exportAndamanAndNicobarIslands');
Route::get('exportChandigarh', 'DownloadController@exportChandigarh')->name('exportChandigarh');
Route::get('exportDadarAndNagarHaveli', 'DownloadController@exportDadarAndNagarHaveli')->name('exportDadarAndNagarHaveli');
Route::get('exportDamanAndDiu', 'DownloadController@exportDamanAndDiu')->name('exportDamanAndDiu');
Route::get('exportDelhi', 'DownloadController@exportDelhi')->name('exportDelhi');
Route::get('exportLakshadeep', 'DownloadController@exportLakshadeep')->name('exportLakshadeep');
Route::get('exportPondicherry', 'DownloadController@exportPondicherry')->name('exportPondicherry');
Route::get('exportLadakh', 'DownloadController@exportLadakh')->name('exportLadakh');
Route::get('exportIndiaRamPawn', 'DownloadController@exportIndiaRamPawn')->name('exportIndiaRamPawn');

Route::get('exportAizawl', 'DownloadController@exportAizawl')->name('exportAizawl');
Route::get('exportLunglei', 'DownloadController@exportLunglei')->name('exportLunglei');
Route::get('exportMamit', 'DownloadController@exportMamit')->name('exportMamit');
Route::get('exportKolasib', 'DownloadController@exportKolasib')->name('exportKolasib');
Route::get('exportChamphai', 'DownloadController@exportChamphai')->name('exportChamphai');
Route::get('exportSerchhip', 'DownloadController@exportSerchhip')->name('exportSerchhip');
Route::get('exportSiaha', 'DownloadController@exportSiaha')->name('exportSiaha');
Route::get('exportLawngtlai', 'DownloadController@exportLawngtlai')->name('exportLawngtlai');
Route::get('exportSaitual', 'DownloadController@exportSaitual')->name('exportSaitual');
Route::get('exportHnahthial', 'DownloadController@exportHnahthial')->name('exportHnahthial');
Route::get('exportKhawzawl', 'DownloadController@exportKhawzawl')->name('exportKhawzawl');
Route::get('exportTanpuina', 'DownloadController@exportTanpuina')->name('exportTanpuina');


Route::get('/downloadTanpuina','DownloadController@tanpuinaPage')->name('downloadTanpuina');
Route::get('/downloadTanpuinaAndra','DownloadController@tanpuinaAndra')->name('tanpuinaAndra');
Route::get('/downloadTanpuinaArunachal','DownloadController@tanpuinaArunachal')->name('tanpuinaArunachal');
Route::get('/downloadTanpuinaAssam','DownloadController@tanpuinaAssam')->name('tanpuinaAssam');
Route::get('/downloadTanpuinaBihar','DownloadController@tanpuinaBihar')->name('tanpuinaBihar');
Route::get('/downloadTanpuinaChhattisgarh','DownloadController@tanpuinaChhattisgarh')->name('tanpuinaChhattisgarh');
Route::get('/downloadTanpuinaGoa','DownloadController@tanpuinaGoa')->name('tanpuinaGoa');
Route::get('/downloadTanpuinaGujarat','DownloadController@tanpuinaGujarat')->name('tanpuinaGujarat');
Route::get('/downloadTanpuinaHaryana','DownloadController@tanpuinaHaryana')->name('tanpuinaHaryana');
Route::get('/downloadTanpuinaHimachal','DownloadController@tanpuinaHimachal')->name('tanpuinaHimachal');
Route::get('/downloadTanpuinaJnK','DownloadController@tanpuinaJnK')->name('tanpuinaJnK');
Route::get('/downloadTanpuinaJharkhand','DownloadController@tanpuinaJharkhand')->name('tanpuinaJharkhand');
Route::get('/downloadTanpuinaKarnataka','DownloadController@tanpuinaKarnataka')->name('tanpuinaKarnataka');
Route::get('/downloadTanpuinaKerala','DownloadController@tanpuinaKerala')->name('tanpuinaKerala');
Route::get('/downloadTanpuinaMadya','DownloadController@tanpuinaMadya')->name('tanpuinaMadya');
Route::get('/downloadTanpuinaMaharashtra','DownloadController@tanpuinaMaharashtra')->name('tanpuinaMaharashtra');
Route::get('/downloadTanpuinaManipur','DownloadController@tanpuinaManipur')->name('tanpuinaManipur');

Route::get('/downloadTanpuinaMeghalaya','DownloadController@tanpuinaMeghalaya')->name('tanpuinaMeghalaya');
Route::get('/downloadTanpuinaNagaland','DownloadController@tanpuinaNagaland')->name('tanpuinaNagaland');
Route::get('/downloadTanpuinaOrissa','DownloadController@tanpuinaOrissa')->name('tanpuinaOrissa');
Route::get('/downloadTanpuinaPunjab','DownloadController@tanpuinaPunjab')->name('tanpuinaPunjab');
Route::get('/downloadTanpuinaRajasthan','DownloadController@tanpuinaRajasthan')->name('tanpuinaRajasthan');
Route::get('/downloadTanpuinaSikkim','DownloadController@tanpuinaSikkim')->name('tanpuinaSikkim');
Route::get('/downloadTanpuinaTamil','DownloadController@tanpuinaTamil')->name('tanpuinaTamil');
Route::get('/downloadTanpuinaTelagana','DownloadController@tanpuinaTelagana')->name('tanpuinaTelagana');
Route::get('/downloadTanpuinaTripura','DownloadController@tanpuinaTripura')->name('tanpuinaTripura');
Route::get('/downloadTanpuinaUttaranchal','DownloadController@tanpuinaUttaranchal')->name('tanpuinaUttaranchal');
Route::get('/downloadTanpuinaUttar','DownloadController@tanpuinaUttar')->name('tanpuinaUttar');
Route::get('/downloadTanpuinaWB','DownloadController@tanpuinaWB')->name('tanpuinaWB');
Route::get('/downloadTanpuinaAndaman','DownloadController@tanpuinaAndaman')->name('tanpuinaAndaman');
Route::get('/downloadTanpuinaChandigarh','DownloadController@tanpuinaChandigarh')->name('tanpuinaChandigarh');
Route::get('/downloadTanpuinaDadar','DownloadController@tanpuinaDadar')->name('tanpuinaDadar');
Route::get('/downloadTanpuinaDaman','DownloadController@tanpuinaDaman')->name('tanpuinaDaman');
Route::get('/downloadTanpuinaDelhi','DownloadController@tanpuinaDelhi')->name('tanpuinaDelhi');
Route::get('/downloadTanpuinaLakshadeep','DownloadController@tanpuinaLakshadeep')->name('tanpuinaLakshadeep');
Route::get('/downloadTanpuinaPondicherry','DownloadController@tanpuinaPondicherry')->name('tanpuinaPondicherry');
Route::get('/downloadTanpuinaLadakh','DownloadController@tanpuinaLadakh')->name('tanpuinaLadakh');
Route::get('/downloadTanpuinaOthers','DownloadController@tanpuinaOthers')->name('tanpuinaOthers');
Route::get('/downloadTanpuinaAizawl','DownloadController@tanpuinaAizawl')->name('tanpuinaAizawl');
Route::get('/downloadTanpuinaLunglei','DownloadController@tanpuinaLunglei')->name('tanpuinaLunglei');
Route::get('/downloadTanpuinaMamit','DownloadController@tanpuinaMamit')->name('tanpuinaMamit');
Route::get('/downloadTanpuinaKolasib','DownloadController@tanpuinaKolasib')->name('tanpuinaKolasib');
Route::get('/downloadTanpuinaChamphai','DownloadController@tanpuinaChamphai')->name('tanpuinaChamphai');
Route::get('/downloadTanpuinaSerchhip','DownloadController@tanpuinaSerchhip')->name('tanpuinaSerchhip');
Route::get('/downloadTanpuinaSiaha','DownloadController@tanpuinaSiaha')->name('tanpuinaSiaha');
Route::get('/downloadTanpuinaSaitual','DownloadController@tanpuinaSaitual')->name('tanpuinaSaitual');
Route::get('/downloadTanpuinaHnahthial','DownloadController@tanpuinaHnahthial')->name('tanpuinaHnahthial');
Route::get('/downloadTanpuinaKhawzawl','DownloadController@tanpuinaKhawzawl')->name('tanpuinaKhawzawl');