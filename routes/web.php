<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|   Table of Contents
|   =================
|   * 1. View Web Page
|        -- View Landing Page
|           * View Remarks
|        
|
*/

Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/remark/secgen2020', 'PageRequestController@viewRemarkSecgen2020');
Route::get('/remark/secgen2019', 'PageRequestController@viewRemarkSecgen2019');
Route::get('/remark/gmunc-advisor', 'PageRequestController@viewRemarkGmuncAdvisor');
