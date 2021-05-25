<?php

Route::get('/', function () {
    return redirect(config('backend.uri'));
});
