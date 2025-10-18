<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Departments\DepartmentController; 
use App\Http\Controllers\Sliders\SliderController; 
use App\Http\Controllers\Services\ServiceController; 
use App\Http\Controllers\Services\SampleController; 
use App\Http\Controllers\Zones\ZoneController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Information\WantedPController;
use App\Http\Controllers\Home\IgpSpeechController;
use App\Http\Controllers\Information\NewsController;
use App\Http\Controllers\Information\CategoryController;
use App\Http\Controllers\Home\ManagemController;
use App\Http\Controllers\Home\PastIgps;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\aboutus\visionController;
use App\Http\Controllers\aboutus\igpsecController;
use App\Http\Controllers\aboutus\historyController;
use App\Http\Controllers\aboutus\forcestructureController;
use App\Http\Controllers\Information\contactController;
use App\Http\Controllers\Information\peacekeepingController;
use App\Http\Controllers\Information\fproController;
use App\Http\Controllers\Information\securitytipsController;
use App\Http\Controllers\Information\pastfprosController;
use App\Http\Controllers\Formations\FormationsController;
use App\Http\Controllers\Units\UnitsController;
use App\Http\Controllers\Information\FallenHerosController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

////////////////////  Home Routes Begin ///////////////////////////////////

// Our Management Team Page all routes

Route::controller(ManagemController::class)->group(function(){
    Route::get('/ourMgtTeamfr', 'AllOurMgtTeamFront')->name('ourmgtTeamfr.page');
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/ourMgtTeam', 'AllOurMgtTeam')->name('ourmgtTeam.page');
            Route::get('/add/mgt', 'AddMgtTeam')->name('add.mgtTeam');
            Route::post('/store/mgtTeam', 'StoreMgtTeam')->name('store.mgtTeam');
            Route::get('/edit/mgtTeam/{id}', 'EditMgtTeam')->name('edit.mgtTeam');
            Route::get('/delete/mgtTeam/{id}', 'DeleteMgtTeam')->name('delete.mgtTeam');
            Route::post('/updateMgt', 'UpdateOurMgtTeam')->name('update.ourmgtTeam');
        }); 
    });


// Past IGPs Page all routes
        Route::controller(PastIgps::class)->group(function(){
        Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/ourpastigps', 'AllOurPastIgp')->name('ourpastigps.page');
        Route::get('/add/pastigp', 'AddTPastIgp')->name('add.pastigp');
        Route::post('/store/pastigp', 'StorePastIgp')->name('store.pastigp');
        Route::get('/edit/pastigp/{id}', 'EditPastIgp')->name('edit.pastigp');
        Route::get('/delete/pastigp/{id}', 'DeletePastIgp')->name('delete.pastigp');
        Route::post('/updatepastigp', 'UpdatePastIgp')->name('update.pastigp');
    });
    Route::get('/ourpastigpsfr', 'AllOurPastIgpFront')->name('ourfrpastigps.page');
});



////////////////////  Home Routes End /////////////////////////////////////



////////////////////  Aboutus Routes Begin ///////////////////////////////////
Route::controller(visionController::class)->group(function () {
    //vision and mission
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/vision/page', 'visionpage')->name('vision.page');
        Route::post('store/message', 'storeVsion')->name('store.vision');
        Route::get('/edit/index', 'editPage')->name('edit.index');
        Route::get('/edit/vision/{id}', 'editVision')->name('edit.vision');
        Route::post('/vision/update{id}', 'updateVision')->name('update.vision');
    });
    Route::get('/vision/display', 'visionDisplay')->name('vision.display');

});
   //secretariat
Route::controller(igpsecController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/igpsec/page', 'igpsecPage')->name('igpsec_page');
        Route::post('/igpsec/message', 'igpsecMessage')->name('igpsec.message');
        Route::get('/delete/igpsec/{id}', 'igpsecDelete')->name('delete.igpsec');
        Route::get('/edit/igp', 'secPage')->name('igpsec.index');
        Route::get('/edit/igpsec/{id}', 'editIGP')->name('edit_igpsec');
        Route::post('/igpsec/update{id}', 'updateIgpsec')->name('update.igpsec');
    });

    Route::get('/igpsec/display', 'igpsecDisplay')->name('igpsec.display');

          });
//history
Route::controller(historyController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/history/index', 'historyPage')->name('history.index');
        Route::post('/store/message', 'storeHistory')->name('store.history');
        Route::get('/delete/history/{id}', 'historyDelete')->name('delete.history');
        Route::get('/edit/history', 'showHistory')->name('history.show');
        Route::get('/edit/history/{id}', 'editHistory')->name('edit_history');
        Route::post('/history/update{id}', 'updateHistory')->name('update.history');
    });

    Route::get('/history/display', 'historyDisplay')->name('history.display');

});

//ForceStructure
Route::controller(forcestructureController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/force/index', 'forcePage')->name('force_structure');
        Route::post('/store/message', 'storeForce')->name('store.force');
        Route::get('/show/force', 'showForce')->name('force.show');
        Route::get('/edit/force/{id}', 'editForce')->name('edit.force');
        Route::get('/delete/force/{id}', 'deleteForce')->name('delete.force');
        Route::post('/update/force{id}', 'updateForce')->name('update.force');
    });
    Route::get('/force/display', 'forceDisplay')->name('force.display');

});


////////////////////  Aboutus Routes End /////////////////////////////////////





/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/





////////////////////  Service Routes Begin ///////////////////////////////////

Route::controller(ServiceController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/service/view', 'ServiceView')->name('service.view'); 
        Route::get('/add/service', 'AddService')->name('add.service');
        Route::post('/store/service', 'StoreService')->name('store.service');
        Route::get('/edit/service/{id}', 'Editservice')->name('edit.service');
        Route::post('/update/service', 'Updateservice')->name('update.service');
    });
    Route::get('/all/services', 'Homeservice')->name('all.services');
    
    //  SAMPLE PAGES Routes Begin ///
    Route::get('/department/sample', 'departmentsample')->name('department.sample');
    Route::get('/zone/sample', 'zonesample')->name('zone.sample');
    Route::get('/management_team/sample', 'management_teamsample')->name('management_team.sample');
    Route::get('/vision/sample', 'visionsample')->name('vision.sample');
    Route::get('/formation/sample', 'formationsample')->name('formation.sample');
    Route::get('/information/sample', 'informationsample')->name('information.sample');
    Route::get('/unit/sample', 'unitsample')->name('unit.sample');
    Route::get('/fpro/sample', 'fprosample')->name('fpro.sample');
    Route::get('/fpros/sample', 'fprossample')->name('fpros.sample');



});

////////////////////  Service Routes End /////////////////////////////////////

////////////////////  Slider Routes Begin ///////////////////////////////////

Route::controller(SliderController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/slider/view', 'SliderView')->name('slider.view');
        Route::get('/edit/slider/{id}', 'Editslider')->name('edit.slider');
        Route::post('/update/slider', 'Updateslider')->name('update.slider');
    });
    Route::get('/home/slider/{id}', 'Homeslider')->name('slider.home');
});

////////////////////  Slider Routes End /////////////////////////////////////

////////////////////  Department Routes Begin ///////////////////////////////////

Route::controller(DepartmentController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/department/view', 'DepartmentView')->name('department.view');
        Route::get('/edit/department/{id}', 'EditDepartment')->name('edit.department');
        Route::post('/update/department', 'UpdateDepartment')->name('update.department');
    });
    Route::get('/home/department/{id}', 'HomeDepartment')->name('department.home');
    Route::get('/home/zone/{id}', 'HomeZone')->name('zone.home');
});

////////////////////  Department Routes End /////////////////////////////////////

////////////////////  zone Routes Begin ///////////////////////////////////

Route::controller(ZoneController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/zone/view', 'ZoneView')->name('zone.view');
        // Route::get('/admin/register', 'AdminRegister')->name('admin.register');
        Route::get('/edit/zone/{id}', 'EditZone')->name('edit.zone');
        Route::post('/update/zone', 'UpdateZone')->name('update.zone');
    });
    Route::get('/home/zone/{id}', 'HomeZone')->name('zone.home');
});


/////////////////////  Admin Routes End ///////////////////////////////////





////////////////////  Formations Routes Begin ///////////////////////////////////
    Route::controller(FormationsController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/formation/view', 'FormationsView')->name('formations.view');
        Route::get('/edit/formation/{id}', 'EditFormations')->name('edit.formation');
        Route::post('/update/formations', 'UpdateFormations')->name('update.formation');
        // Add new formation
        Route::get('/formation/add', 'FormationsCreate')->name('formation.add');
        // Store new formation
        Route::post('/formation/store', 'FormationsStore')->name('formation.store');
        // User Delete
        Route::get('/formation/delete/{id}', 'FormationDelete')->name('formation.delete');
    });
    Route::get('/formation/show/{id}', 'FormationsShow')->name('formation.show');

});

////////////////////  Formations Routes End /////////////////////////////////////




/////////////////////////  Units Routes Begin ///////////////////////////////////
Route::controller(UnitsController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/units/view', 'unitsView')->name('units.view');
        Route::get('/edit/unit/{id}', 'EditUnits')->name('edit.unit');
        Route::post('/update/units', 'UpdateUnits')->name('update.unit');
        // Add new formation
        Route::get('/unit/add', 'UnitsCreate')->name('unit.add');
        // Store new formation
        Route::post('/unit/store', 'UnitsStore')->name('unit.store');
        // User Delete
        Route::get('/unit/delete/{id}', 'UnitDelete')->name('units.delete');
    });
    Route::get('/unit/show/{id}', 'UnitsShow')->name('unit.show');

});

/////////////////////////  Units Routes End /////////////////////////////////////





////////////////////  Information Routes Begin ///////////////////////////////////

//Wanted PController Route

        Route::controller(WantedPController::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/all/wanted', 'AllWanted')->name('all.wanted');
        Route::get('/add/wanted', 'AddWanted')->name('add.wanted');
        Route::post('/store/wanted', 'StoreWanted')->name('store.wanted');
        Route::get('/edit/wanted/{id}', 'EditWanted')->name('edit.wanted');
        Route::get('/delete/wanted/{id}', 'DeleteWanted')->name('delete.wanted');
        Route::post('/update/wanted/', 'UpdateWanted')->name('update.wanted');
        Route::get('/search/wanted/', 'SearchWanted')->name('wanted.search');

        Route::get('/all/missing', 'AllMissing')->name('all.missing');
        Route::get('/add/missing', 'AddMissing')->name('add.missing');
        Route::post('/store/missing', 'StoreMissing')->name('store.missing');
        Route::get('/edit/missing/{id}', 'EditMissing')->name('edit.missing');
        Route::get('/delete/missing/{id}', 'DeleteMissing')->name('delete.missing');
        Route::post('/update/missing/', 'UpdateMissing')->name('update.missing');
        Route::get('/search/missing/', 'SearchMissing')->name('missing.search');
    });
    Route::get('/missing/details/{id}', 'MissingDetail')->name('missed.details');
    Route::get('/wanted/details/{id}', 'WantedDetail')->name('wanted.details');
    Route::get('/wanted', 'ViewAllWanted')->name('wanted.home');
    Route::get('/missing', 'ViewAllMissed')->name('missed.home');


});

// All Route for Fallen Heros
    Route::controller(FallenHerosController::class)->group(function(){
    Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/all/hero', 'AllFallenHero')->name('all.hero');
    Route::get('/add/hero', 'AddFallenHero')->name('add.hero');
    Route::post('/store/hero', 'StoreFallenHero')->name('store.hero');
    Route::get('/edit/hero/{id}', 'EditHero')->name('edit.hero');
    Route::get('/delete/hero/{id}', 'DeleteHero')->name('delete.hero');
    Route::post('/update/hero/', 'UpdateHero')->name('update.hero');
    Route::get('/search/hero/', 'SearchHero')->name('hero.search');
    
});
Route::get('/hero/details/{id}', 'FallenHeroDetail')->name('hero.details');
Route::get('/hero', 'ViewAllHero')->name('hero.home');

});



    //All routes for News Category

        Route::controller(CategoryController::class)->group(function(){
        Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/news/category', 'NewsCategory')->name('news.category');
        Route::get('/add/news_category', 'AddNewsCategory')->name('add.news_category');
        Route::post('/store/news_category', 'StoreNewsCategory')->name('store.news_category');
        Route::get('/edit/news_category/{id}', 'EditNewsCategory')->name('edit.news.category');
        Route::get('/delete/news_category/{id}', 'DeleteNewsCategory')->name('delete.news.category');
        Route::post('/update/news_category/{id}', 'UpdateNewsCategory')->name('update.news_category');
    });
});



    //All routes for News Post

            Route::controller(NewsController::class)->group(function(){
            Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/all/news', 'AllNews')->name('all.news');
            Route::get('/add/news', 'AddNews')->name('add.news');
            Route::post('/store/news', 'StoreNews')->name('store.news');
            Route::get('/edit/news/{id}', 'EditNews')->name('edit.news');
            Route::get('/delete/news/{id}', 'DeleteNews')->name('delete.news');
            Route::post('/update/news/', 'UpdateNews')->name('update.news');
            Route::get('/search/news/', 'SearchNews')->name('news.search');
        });
            Route::get('/news', 'HomeNews')->name('news.home');
            Route::get('/news/details/{id}', 'DetailNews')->name('news.details');
            Route::get('/category/post/{id}', 'CategoryPost')->name('category.post');
    });


        // IGP Speech  Page all routes

        Route::controller(IgpSpeechController::class)->group(function(){
        Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/about', 'IgpPage')->name('igp.page');
        Route::get('/edit/about/{id}', 'EditIgp')->name('edit.igp');
        Route::post('/updateabout', 'UpdateIgp')->name('update.igp');
    });
    Route::get('/home/about', 'IgpHome')->name('home.igp');

});


    Route::controller(peacekeepingController::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/peace/index', 'PeacePage')->name('peace.index');
            Route::post('/store/peace', 'storePeace')->name('store.peace');
            Route::get('/peace/view', 'viewPeace')->name('peace.view');
            Route::get('/edit/peace/{id}', 'editPeace')->name('edit_peace');
            Route::post('/delete/peace/{id}', 'peaceDelete')->name('delete.peace');
            Route::post('/update/peace/{id}', 'peaceUpdate')->name('update.peace');
        });
        Route::get('/peace/display', 'peaceDisplay')->name('peace.display');
    });

    // Security Tips
    Route::controller(securitytipsController::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/security/index', 'securityPage')->name('security.index');
            Route::post('/store/security', 'storeSecurity')->name('store.security');
            Route::get('/delete/security/{id}', 'securityDelete')->name('delete.security');
            Route::get('/security/view', 'viewSecurity')->name('security_show');
            Route::get('/edit/security/{id}', 'editsecurity')->name('edit_security');
            Route::post('/update/security/{id}', 'securityUpdate')->name('update.security');
        });
        Route::get('/security/display', 'securityDisplay')->name('security.display');

    });



      //Contacts
        Route::controller(contactController::class)->group(function () {
            Route::middleware(['auth', 'verified'])->group(function () {
                Route::get('/contact/index', 'contactPage')->name('contact.index');
                Route::post('/store/contact', 'storeMessage')->name('store.message');
                Route::get('/delete/contact/{id}', 'contactDelete')->name('delete.contact');
                Route::get('/contact/view', 'viewContact')->name('contact.view');
                Route::get('/edit/contact/{id}', 'editContact')->name('edit.contact');
                Route::post('/update/contact/{id}', 'contactUpdate')->name('update.contact');
            });
            Route::get('/contact/display', 'contactDisplay')->name('contact.display');

        });


        //FPRO
    Route::controller(fproController::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/fpro/index', 'fproPage')->name('fpro.index');
            Route::post('/store/fpro', 'StoreFpro')->name('store.fpro');
            Route::get('/delete/fpro/{id}', 'fprotDelete')->name('delete.fpro');
            Route::get('/fpro/view', 'viewFpro')->name('fpro.view');
            Route::get('/edit/fpro/{id}', 'editFpro')->name('edit.fpro');
            Route::post('/update/fpro/{id}', 'fproUpdate')->name('update.fpro');
        });
        Route::get('/fpro/display', 'fproDisplay')->name('fpro.display');
    });


     //PASTFPRO
     Route::controller(pastfprosController::class)->group(function () {
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/pastfpro/index', 'pastfproPage')->name('pastfpro.index');
            Route::post('/pastfpro/message', 'StorepastFpro')->name('store.pastfpro');
            Route::get('/delete/pastfpro/{id}', 'pastfproDelete')->name('delete.pastfpro');
            Route::get('/pastfpro/view', 'pastviewFpro')->name('pastfpro.view');
            Route::get('/change/pastfpro/{id}', 'changePastfpro')->name('change.pastfpro');
            Route::post('/update/pastfpro/{id}', 'pastfproUpdate')->name('update.pastfpro');

        });
        Route::get('/pastfpro/display', 'pastfproDisplay')->name('pastfpro.display');
    });


////////////////////  Information Routes End /////////////////////////////////////





/////////////////////  BackEnd Routes End ///////////////////////////////////




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::controller(AdminController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/admin/logout', 'Destroy')->name('admin.logout');
        Route::get('/admin/view', 'AdminView')->name('admin.view');
        Route::get('/admin/register', 'AdminRegister')->name('admin.register');
        Route::post('/register/create', 'AdminRegisterCreate')->name('admin.register_create');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
    }); 

});

/////////////////////  Admin Routes End ///////////////////////////////////






/////////////////////  Default Routes ///////////////////////////////////

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/', function () {
    return view('frontend.dashboard');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function () {
// Route::middleware('auth','verified')->group(function () { // This will be implemented when we want to go live
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
