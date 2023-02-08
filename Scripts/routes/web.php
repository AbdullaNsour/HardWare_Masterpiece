<?php

use App\Http\Controllers\web\MessageController;
use App\Http\Controllers\web\AuthController;
use App\Http\Controllers\web\BrandController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\CatController;
use App\Http\Controllers\web\OrderController;
use App\Http\Controllers\web\ProductController;
use Illuminate\Support\Facades\Route;






Route::middleware(['auth'])->group(function () {
    Route::controller(CartController::class)->group(function () {
        Route::get('/addtocart/{id}', 'add');
        Route::get('/deletefromcart/{id}', 'dropFromCart');
        Route::get('/clearcart', 'clearCart');
        Route::get('/cart/{id}', 'show');
    });
    Route::controller(AuthController::class)->group(function () {
        Route::get('/profile', 'profile');
        Route::get('/editinfo', 'editInfoForm');
        Route::get('/changepassword', 'changePasswordForm');
        Route::get('/modifyaddress', 'modifyAddressForm');
        Route::get('/showorders', 'showorders');
        Route::get('/showreturnrequests', 'returnOrders');

        Route::post('/editinfo', 'editInfo');
        Route::post('/changepassword', 'changePassword');
        Route::post('/modifyaddress', 'modifyAddress');
    });
    Route::controller(OrderController::class)->group(function () {
        Route::get('/checkout',  'checkOut');
        Route::get('/showorder/{id}', 'show');
        Route::get('/confirmorder', 'confirmOrderView');
        Route::get('/submitorder', 'confirmOrder');
        Route::get('/orderchangeaddress', 'changeAddressForm');
        Route::post('/orderchangeaddress', 'changeAddress');
        Route::get('/returnorder/{id}', 'return');
    });
    Route::controller(MessageController::class)->group(function () {
        Route::post('/createmessage', 'create');
        Route::get('/contactus', 'contact');
    });
});


Route::get('/cat/{id}', [CatController::class, 'show']);
    Route::middleware(['auth', 'isBK'])->group(function () {
    Route::prefix('/admin')->controller(OrderController::class)->group(function () {
        Route::get('/', 'pindingOrders');
        Route::get('/editorder', 'editForm');
        Route::post('/editorder', 'edit');
        Route::get('/pindingorders', 'pindingOrders');
        Route::get('/allorders', 'allOrders');
        Route::get('/deleteorder/{id}', 'delete');
        Route::get('/dropfromorder/{oid}/{pid}', 'drop');
        Route::post('/updateorder/{id}', 'update');
        Route::get('/showorder/{id}', 'adminShow');
        Route::get('/returnrequest', 'returnOrders');
    });
    Route::prefix('/admin')->controller(MessageController::class)->group(function () {
        Route::get('/allmessages', 'all');
        Route::get('/deletemessage/{id}', 'delete');
    });
});



Route::controller(ProductController::class)->group(function () {
    Route::get('/index','index');
    Route::get('/','index');
    Route::get('/search', 'search');
    Route::get('/products/show/{id}','show');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::prefix('/admin')->controller(ProductController::class)->group(function () {
        Route::get('/addproduct', 'addProductForm');
        Route::post('/addproduct', 'addProduct');
        Route::get('/editproduct/{id}', 'editProductForm');
        Route::get('/deleteproduct/{id}', 'deleteProduct');
        Route::post('/editproduct/{id}', 'editProduct');
        Route::get('/allproducts', 'adminAll');
        Route::get('/filterproducts', 'filter');
        Route::get('/searchproducts', 'adminSearch');
    });

    Route::prefix('/admin')->controller(CatController::class)->group(function () {
        Route::get('/cats', 'all');
        Route::get('/deletecat/{id}', 'delete');
        Route::post('/editcat/{id}', 'edit');
        Route::post('/addcat', 'add');
        Route::get('/catsearch', 'search');
    });


    Route::prefix('/admin')->controller(BrandController::class)->group(function () {
        Route::get('/brands', 'all');
        Route::get('/deletebrand/{id}','delete');
        Route::post('/editbrand/{id}', 'edit');
        Route::post('/addbrand', 'add');
        Route::get('/brandsearch', 'search');
    });

    Route::get('/admin/usersearch', [AuthController::class, 'search']);
});

Route::get('/brand/{id}', [BrandController::class, 'show']);




Route::middleware(['auth', 'isSuperAdmin'])->group(function () {
    Route::prefix('/admin')->controller(AuthController::class)->group(function () {
        Route::get('/users','all');
        Route::post('/adduser','adminAdd');
        Route::get('/edituser/{id}','adminEditForm');
        Route::post('/edituser/{id}','adminEdit');
        Route::get('/deleteuser/{id}','delete');
    });
});

Route::fallback(function () {
    return redirect(url('/index'));
});




// Old Route : without organize with short group

// Route::get('/addtocart/{id}', [CartController::class, 'add'])->middleware('auth');
// Route::get('/deletefromcart/{id}', [CartController::class, 'dropFromCart'])->middleware('auth');
// Route::get('/clearcart', [CartController::class, 'clearCart'])->middleware('auth');
// Route::get('/cart/{id}', [CartController::class, 'show'])->middleware('auth');

// Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth');
// Route::get('/editinfo', [AuthController::class, 'editInfoForm'])->middleware('auth');
// Route::get('/changepassword', [AuthController::class, 'changePasswordForm'])->middleware('auth');
// Route::get('/modifyaddress', [AuthController::class, 'modifyAddressForm'])->middleware('auth');
// Route::get('/showorders', [AuthController::class, 'showorders'])->middleware('auth');
// Route::get('/showreturnrequests', [AuthController::class, 'returnOrders'])->middleware('auth');

// Route::post('/editinfo', [AuthController::class, 'editInfo'])->middleware('auth');
// Route::post('/changepassword', [AuthController::class, 'changePassword'])->middleware('auth');
// Route::post('/modifyaddress', [AuthController::class, 'modifyAddress'])->middleware('auth');


// Route::get('/checkout', [OrderController::class, 'checkOut'])->middleware('auth');
// Route::get('/showorder/{id}', [OrderController::class, 'show'])->middleware('auth');
// Route::get('/confirmorder', [OrderController::class, 'confirmOrderView'])->middleware('auth');
// Route::get('/submitorder', [OrderController::class, 'confirmOrder'])->middleware('auth');
// Route::get('/orderchangeaddress', [OrderController::class, 'changeAddressForm'])->middleware('auth');
// Route::post('/orderchangeaddress', [OrderController::class, 'changeAddress'])->middleware('auth');
// Route::get('/returnorder/{id}', [OrderController::class, 'return'])->middleware('auth');


// Route::post('/createmessage', [MessageController::class, 'create'])->middleware(['auth']);
// Route::get('/contactus', [MessageController::class, 'contact']);


// Route::get('/admin',[OrderController::class,'pindingOrders'])->middleware(['auth','isBK']);
// Route::get('/admin/editorder',[OrderController::class,'editForm'])->middleware(['auth','isBK']);
// Route::post('/admin/editorder',[OrderController::class,'edit'])->middleware(['auth','isBK']);
// Route::get('/admin/pindingorders',[OrderController::class,'pindingOrders'])->middleware(['auth','isBK']);
// Route::get('/admin/allorders',[OrderController::class,'allOrders'])->middleware(['auth','isBK']);
// Route::get('/admin/deleteorder/{id}',[OrderController::class,'delete'])->middleware(['auth','isBK']);
// Route::get('/admin/dropfromorder/{oid}/{pid}',[OrderController::class,'drop'])->middleware(['auth','isBK']);
// Route::post('/admin/updateorder/{id}',[OrderController::class,'update'])->middleware(['auth','isBK']);
// Route::get('/admin/showorder/{id}',[OrderController::class,'adminShow'])->middleware(['auth','isBK']);
// Route::get('/admin/returnrequest',[OrderController::class,'returnOrders'])->middleware(['auth','isBK']);

// Route::get('/admin/allmessages',[MessageController::class,'all'])->middleware(['auth','isBK']);
// Route::get('/admin/deletemessage/{id}',[MessageController::class,'delete'])->middleware(['auth','isBK']);


// Route::get('/admin/addproduct', [ProductController::class, 'addProductForm'])->middleware(['auth', 'isAdmin']);
// Route::post('/admin/addproduct', [ProductController::class, 'addProduct'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/editproduct/{id}', [ProductController::class, 'editProductForm'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/deleteproduct/{id}', [ProductController::class, 'deleteProduct'])->middleware(['auth', 'isAdmin']);
// Route::post('/admin/editproduct/{id}', [ProductController::class, 'editProduct'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/allproducts', [ProductController::class, 'adminAll'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/filterproducts', [ProductController::class, 'filter'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/searchproducts', [ProductController::class, 'adminSearch'])->middleware(['auth', 'isAdmin']);


// Route::get('/admin/cats', [CatController::class, 'all'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/deletecat/{id}', [CatController::class, 'delete'])->middleware(['auth', 'isAdmin']);
// Route::post('/admin/editcat/{id}', [CatController::class, 'edit'])->middleware(['auth', 'isAdmin']);
// Route::post('/admin/addcat', [CatController::class, 'add'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/catsearch', [CatController::class, 'search'])->middleware(['auth', 'isAdmin']);


// Route::get('/admin/brands', [BrandController::class, 'all'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/deletebrand/{id}', [BrandController::class, 'delete'])->middleware(['auth', 'isAdmin']);
// Route::post('/admin/editbrand/{id}','edit'])->middleware(['auth', 'isAdmin']);
// Route::post('/admin/addbrand','add'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/brandsearch','search'])->middleware(['auth', 'isAdmin']);

// Route::get('/admin/usersearch', [AuthController::class, 'search'])->middleware(['auth', 'isAdmin']);
// Route::get('/admin/users', [AuthController::class, 'all'])->middleware(['auth', 'isSuperAdmin']);
// Route::post('/admin/adduser', [AuthController::class, 'adminAdd'])->middleware(['auth', 'isSuperAdmin']);
// Route::get('/admin/edituser/{id}', [AuthController::class, 'adminEditForm'])->middleware(['auth', 'isSuperAdmin']);
// Route::post('/admin/edituser/{id}', [AuthController::class, 'adminEdit'])->middleware(['auth', 'isSuperAdmin']);
// Route::get('/admin/deleteuser/{id}', [AuthController::class, 'delete'])->middleware(['auth', 'isSuperAdmin']);