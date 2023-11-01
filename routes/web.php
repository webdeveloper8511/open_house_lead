<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.dashboard');
});

    Route::get('/property', function () {
        return view('dashboard.property.property');
    })->name('property');

// Property Route
    Route::get('/property', function () {
        return view('dashboard.property.property');
    })->name('property');

    Route::get('/add-edit-property-dt', function () {
        return view('dashboard.property.add-edit-property-dt');
    })->name('add-edit-property-dt');

    Route::get('/create-flyer22-dt', function () {
        return view('dashboard.property.create-flyer22-dt');
    })->name('create-flyer22-dt');

    Route::get('/add-edit-property-dt-edit', function () {
        return view('dashboard.property.add-edit-property-dt-edit');
    })->name('add-edit-property-dt-edit');

    Route::get('/show-opens-dt-view-add-visitors', function () {
        return view('dashboard.property.show-opens-dt-view-add-visitors');
    })->name('show-opens-dt-view-add-visitors');

    Route::get('/visitor-add-edit', function () {
        return view('dashboard.property.visitor-add-edit');
    })->name('visitor-add-edit');
// End Property Route

// Visitor
Route::get('/visitor-show', function () {
    return view('dashboard.visitors.show-visitors-dt');
})->name('visitor-show');

Route::get('/visitor-view', function () {
    return view('dashboard.visitors.visitor-view');
})->name('visitor-view');

// flyer
Route::get('/flyer-brochure-list', function () {
    return view('dashboard.flyer.flyer-brochure-list');
})->name('flyer-brochure-list');

Route::get('/quick-start-dt', function () {
    return view('dashboard.quick-start.quick-start-dt');
})->name('quick-start-dt');

Route::get('/quick-setting', function () {
    return view('dashboard.setting.quick-settings');
})->name('quick-setting');

Route::get('/profile', function () {
    return view('dashboard.setting.profile');
})->name('profile');

Route::get('/smartphone', function () {
    return view('dashboard.setting.smartphone');
})->name('smartphone');

Route::get('/fonts-colors-dt', function () {
    return view('dashboard.setting.fonts-colors-dt');
})->name('fonts-colors-dt');

Route::get('/crm-dt', function () {
    return view('dashboard.setting.crm-dt');
})->name('crm-dt');

Route::get('/account-dt', function () {
    return view('dashboard.setting.account-dt');
})->name('account-dt');

Route::get('/welcome-email-dt', function () {
    return view('dashboard.marketingtools.welcome-email-dt');
})->name('welcome-email-dt');

Route::get('/drips-dt', function () {
    return view('dashboard.marketingtools.drips-dt');
})->name('drips-dt');

Route::get('/feedback-dt', function () {
    return view('dashboard.marketingtools.feedback-dt');
})->name('feedback-dt');

Route::get('/your-team', function () {
    return view('dashboard.manageteam.your-team');
})->name('your-team');

Route::get('/add-agent', function () {
    return view('dashboard.manageteam.add-agent');
})->name('add-agent');

Route::get('/view-agent', function () {
    return view('dashboard.manageteam.view-agent');
})->name('view-agent');

Route::get('/edit-agent', function () {
    return view('dashboard.manageteam.edit-agent');
})->name('edit-agent');

Route::get('/add-coopagent-dt', function () {
    return view('dashboard.Partners.add-coopagent-dt');
})->name('add-coopagent-dt');

Route::get('/coopagents', function () {
    return view('dashboard.Partners.coopagents');
})->name('coopagents');