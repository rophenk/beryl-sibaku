<?php

Route::group(array('module' => 'Sibankum', 'namespace' => 'App\Modules\Sibankum\Controllers'), function() {

    Route::resource('sibankum', 'SibankumController');
    
});	