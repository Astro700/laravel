<?php
/*...*/
Route::get('/hello',function(){
	return view('welcome');
});

Route::get('/first',function(){
	return view('first');
});


Route::group(['middleware'=>['web']],function(){

});

Route::get('/index','StaticController@index');

?>
