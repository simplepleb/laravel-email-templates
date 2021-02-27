<?php

/**
 * Used to preview the Pleb email templates
 * @todo remove these routes before going live
 */
Route::get('welcome_member', function () {

    $member = App\User::find(1);
    return new App\Mail\WelcomeMember($member);
});
