<?php

use App\Http\Controllers\API\CommonApiController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\ServiceApiController;
use App\Http\Controllers\API\ModuleApiController;
use App\Http\Controllers\Auth\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [UserAuthController::class, 'register']);
//login user
Route::post('/login', [UserAuthController::class, 'login']);
// banners
Route::get('/banners', [CommonApiController::class, 'getBanners']);

//using middleware
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [UserAuthController::class, 'logout']);

    // profile 
    Route::get('/profile', [CommonApiController::class, 'profile']);
    Route::post('/profile/update', [CommonApiController::class, 'profileUpdate']);

    // courses
    Route::get('/courses', [CourseController::class, 'getCourses']);

    Route::get('/categories', [CommonApiController::class, 'getCategories']);
    Route::get('/category-courses/{id}', [CourseController::class, 'getCourseUnderCategory']);
    Route::get('/course-details/{id}', [CourseController::class, 'getCourseDetails']);
    Route::get('/study-materials/{id}', [CourseController::class, 'getStudyMaterials']);
    Route::get('/quiz', [CourseController::class, 'getQuiz']);

    Route::get('/purchased-course', [CourseController::class, 'purchasedCourse']);

    Route::post('/add-to-wishlist', [CourseController::class, 'addToWishlist']);
    Route::get('/get-wishlist', [CourseController::class, 'getWishlist']);

    Route::post('/apply-purchase-request', [CourseController::class, 'applyPurchaseRequest']);
    Route::get('/get-purchase-request', [CourseController::class, 'getPurchaseRequest']);

    Route::get('/services', [ServiceApiController::class, 'getServices']);
    Route::get('/service-details/{id}', [ServiceApiController::class, 'servicesDetails']);

    //modules
    Route::get('exam-module',[ModuleApiController::class,'get_module']);

    //questions
    Route::get('questions',[ModuleApiController::class,'get_questions']);
    
    //exams
    Route::get('exam-details',[ModuleApiController::class,'get_exam_details']);
    
    //exam results
    Route::post('results',[ModuleApiController::class,'get_exam_results']);

});
