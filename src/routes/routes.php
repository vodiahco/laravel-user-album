<?php

        Route::get(
            '/profile-photo',
            array(
                'as'   => 'get-profile-photo',
                'uses' => 'Ddata\UserAlbum\Controllers\AlbumController@getProfilePhoto'
            )
        );
        
        Route::post(
            '/profile-photo',
            array(
                'as'   => 'post-profile-photo',
                'uses' => 'Ddata\UserAlbum\Controllers\AlbumController@postProfilePhoto'
            )
        );

