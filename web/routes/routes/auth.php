<?php

use Illuminate\Support\Facades\Route;

Route::get('auth/login', function() {
    return Socialite::driver('eveonline')->scopes(['publicData'])->redirect();
});

Route::get('auth/logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::get('auth/callback', function() {
    $user = Socialite::driver('eveonline')->user();

    $n_user = \App\Models\User::updateOrCreate(['character_id' => $user->charcter_id], [
        'character_name' => $user->character_name,
        'character_owner_hash' => $user->character_owner_hash,
        'character_id' => $user->character_id,
        'token' => $user->token,
        'refresh_token' => $user->refreshToken,
    ]);

    Auth::login($n_user);

    return redirect('/');
});
