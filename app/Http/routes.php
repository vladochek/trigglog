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

Route::get('/', function () {


        return view('welcome');
});
Route::get('foo/', function()
    {
        $users2 = DB::connection('sqlsrv');
        echo '<pre>';
        var_dump($users2);
        echo '</pre>';
        $results = DB::select('SELECT TOP 1000 * FROM triggmine1db.dbo.LogItem L (nolock) LEFT JOIN triggmine1db.dbo.UserAccountView U (nolock) ON U.AccountId = L.AccountId WHERE Date > 2015-05-01 00:24:28.350 AND (ErrorCode IS NULL OR ErrorCode NOT IN(142, 242, 111, 150, 112, 130, 140, 230, 163, 152, -11115, -11113, 100, -11135, -11132)) ORDER BY LogItemId DESC', array(1));

        echo '<pre>';
        var_dump($results);
        echo '</pre>';/*return  */phpinfo();

      //  return 'Hello World';
    });