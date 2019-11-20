<?php

Route::get('/', function () {
    return redirect(config('cms.backendUri'));
});
