<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\CentreController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\ModulesController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SchemeController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseViewController;
use App\Http\Controllers\userinstructorController;
use App\Http\Controllers\UserNotificationController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        // dashboard
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.home');

        // course
        Route::get('/course', [CourseController::class, 'index'])->name('admin.course.index');
        Route::get('/get-courses', [CourseController::class, 'getCourses'])->name('admin.course.get');
        Route::get('/course/create', [CourseController::class, 'create'])->name('admin.course.create');
        Route::post('/course/store', [CourseController::class, 'store'])->name('admin.course.store');
        Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
        Route::delete('/course/delete/{id}', [CourseController::class, 'destroy'])->name('admin.course.delete');

        Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('admin.course.update');

        Route::get('/course/study-materials/{id}', [CourseController::class, 'studyMaterials'])->name('admin.course.study-materials');
        Route::post('/course/study-materials/store', [CourseController::class, 'studyMaterialsStore'])->name('admin.course.study-materials.store');
        Route::get('/course/study-materials/edit', [CourseController::class, 'studyMaterialsEdit'])->name('admin.course.study-materials.edit');
        Route::post('/course/study-materials/update', [CourseController::class, 'studyMaterialsUpdate'])->name('admin.course.study-materials.update');
        Route::get('/course/study-materials/delete/{id}', [CourseController::class, 'studyMaterialsDelete'])->name('admin.course.study-materials.delete');

        // notification
        Route::get('/notification', [NotificationController::class, 'index']);

        // student
        Route::get('/students', [StudentController::class, 'index'])->name('admin.student.index');
        Route::get('/students/create', [StudentController::class, 'create'])->name('admin.student.create');
        Route::post('/students/store', [StudentController::class, 'store'])->name('admin.student.store');
        Route::get('/students/view/{id}', [StudentController::class, 'show'])->name('admin.student.show');
        Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('admin.student.edit');
        Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('admin.student.update');
        Route::post('/students/remove/assign-purchase-course', [StudentController::class, 'assignPurchaseCourse'])->name('admin.student.assign.course');
        Route::post('/students/remove/purchase-course', [StudentController::class, 'removePurchaseCourse'])->name('admin.student.remove.purchase.course');
        Route::post('/students/remove/wishlist-course', [StudentController::class, 'removeWishlistCourse'])->name('admin.student.remove.wishlist.course');
        Route::get('/students/getcategory', [StudentController::class, 'getCategory'])->name('admin.student.select_category');
        Route::get('/students/getcourse', [StudentController::class, 'getCourse'])->name('admin.student.select_course');
        Route::get('/students/getcentre', [StudentController::class, 'getCentre'])->name('admin.student.select_centre');
        Route::get('/students/getbatch', [StudentController::class, 'getBatch'])->name('admin.student.select_batch');
        Route::post('/payments/addpayment', [StudentController::class, 'addPayment'])->name('admin.student.addpayment');

        //invoice
        Route::get('/student/invoice/{id}', [InvoiceController ::class, 'index'])->name('invoice.generate');

        // category
        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/update/{id} ', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

        // tutor
        Route::get('/tutor', [TutorController::class, 'index'])->name('admin.tutor.index');
        Route::get('/tutor/create', [TutorController::class, 'create'])->name('admin.tutor.create');
        Route::post('/tutor/store', [TutorController::class, 'store'])->name('admin.tutor.store');
        Route::get('/tutor/show/{id}', [TutorController::class, 'show'])->name('admin.tutor.show');
        Route::post('/tutor/update', [TutorController::class, 'update'])->name('admin.tutor.update');
        // Route for soft deleting a tutor
        Route::delete('tutor/{id}/delete', [TutorController::class, 'destroy'])->name('admin.tutor.destroy');
        // payments
        Route::get('/payments', [PaymentController::class, 'index'])->name('admin.payment.index');
        Route::get('/get-payments', [PaymentController::class, 'getStudentPayment'])->name('admin.payment.get');
        Route::get('/payments/create', [PaymentController::class, 'create'])->name('admin.payment.create');
        Route::post('/payments/store', [PaymentController::class, 'store'])->name('admin.payment.store');
        Route::get('/payments/edit/{id}', [PaymentController::class, 'edit'])->name('admin.payment.edit');
        Route::post('/payments/update/{id}', [PaymentController::class, 'update'])->name('admin.payment.update');
        Route::get('/payments/getcourse', [PaymentController::class, 'getCourse'])->name('admin.payment.select_course');
        Route::delete('/payments/{id}', [PaymentController::class, 'destroy'])->name('admin.payment.delete');

        // Tags
        // Route::get('/tag', [TagController::class, 'index']);
        // Route::post('add-tag', [TagController::class, 'store'])->name('add_tag');
        // Route::post('update-tag', [TagController::class, 'update'])->name('update_tag');
        // Route::get('delete_tag/{id}', [TagController::class, 'destroy']);

        // quiz
        Route::get('/quiz', [QuizController::class, 'index'])->name('admin.quiz.index');
        Route::get('/quiz/create', [QuizController::class, 'create'])->name('admin.quiz.create');
        Route::post('/quiz/store', [QuizController::class, 'store'])->name('admin.quiz.store');
        Route::get('/quiz/view/{id}', [QuizController::class, 'show'])->name('admin.quiz.show');
        Route::get('/quiz/edit/{id}', [QuizController::class, 'edit'])->name('admin.quiz.edit');
        Route::post('/quiz/update/{id}', [QuizController::class, 'update'])->name('admin.quiz.update');
        Route::get('/quiz/destroy/{id}', [QuizController::class, 'destroy'])->name('admin.quiz.destroy');
        Route::post('/quiz/import', [QuizController::class, 'import'])->name('admin.exam.import');

        // settings
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::get('/settings/general', [SettingsController::class, 'general'])->name('settings.genaral');
        Route::get('/settings/permission', [SettingsController::class, 'permissions'])->name('settings.permissions');
        Route::get('/settings/permissioncreate', [SettingsController::class, 'permissionscreate'])->name('settings.permissions.create');
        Route::get('/settings/permissionedit', [SettingsController::class, 'permissionsedit'])->name('settings.permissions.edit');
        Route::get('/settings/payments', [SettingsController::class, 'payments'])->name('settings.payments');
        Route::get('/settings/user', [SettingsController::class, 'user_view'])->name('settings.user');
        Route::get('/get-users', [SettingsController::class, 'getusers'])->name('settings.getuser');


        // category
        Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::get('/banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('admin.banner.store');
        Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
        Route::post('/banner/update/{id} ', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::delete('banner/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');

        // services
        Route::get('/services', [ServiceController::class, 'index'])->name('admin.services.index');
        Route::get('/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
        Route::post('/services/store', [ServiceController::class, 'store'])->name('admin.services.store');
        Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
        Route::post('/services/update/{id} ', [ServiceController::class, 'update'])->name('admin.services.update');
        Route::get('/services/delete/{id} ', [ServiceController::class, 'destroy'])->name('admin.services.delete');

        //batch
        Route::resource('batch', BatchController::class);
        Route::post('batch/update', [BatchController::class, 'update'])->name('admin.batch.update');
        Route::post('batch/delete', [BatchController::class, 'destroy'])->name('admin.batch.delete');

        //centre
        Route::resource('centre', CentreController::class);
        Route::post('centre/update', [CentreController::class, 'update'])->name('admin.centre.update');
        Route::post('centre/delete', [CentreController::class, 'destroy'])->name('admin.centre.delete');


        //exam
        Route::resource('exam', ExamController::class);
        Route::post('exam/update', [ExamController::class, 'update'])->name('admin.exam.update');
        Route::post('exam/delete', [ExamController::class, 'destroy'])->name('admin.exam.delete');

        //module
        Route::resource('modules', ModulesController::class);
        Route::post('modules/update', [ModulesController::class, 'update'])->name('admin.modules.update');
        Route::post('modules/delete', [ModulesController::class, 'destroy'])->name('admin.modules.delete');

        //exam result
        Route::resource('exam_result', ResultController::class);
        //  Route::post('modules/update',[ModulesController::class, 'update'])->name('admin.modules.update');
        //  Route::post('modules/delete',[ModulesController::class, 'destroy'])->name('admin.modules.delete');

        //roles 
        Route::post('/settings/roles-store', [RolesController::class, 'store'])->name('admin.settings.roles_store');
        Route::get('/settings/roles-edit/{id}', [RolesController::class, 'edit'])->name('admin.settings.roles_edit');
        Route::post('/settings/roles-update', [RolesController::class, 'update'])->name('admin.settings.roles_update');
        Route::get('/settings/roles-destroy/{id}', [RolesController::class, 'destroy'])->name('admin.settings.roles_delete');

        //user
        Route::get('/settings/user-create', [RolesController::class, 'user_create'])->name('admin.settings.create_user');
        Route::post('/settings/store_user', [RolesController::class, 'store_user'])->name('admin.settings.store_user');
        Route::get('/settings/editUser/{id}', [RolesController::class, 'editUser'])->name('admin.settings.editUser');
        Route::post('/settings/update-user', [RolesController::class, 'update_user'])->name('admin.settings.update_user');
        Route::get('/settings/delete-user/{id}', [RolesController::class, 'destroy_user'])->name('admin.settings.deleteUser');

        //scheme  
        Route::resource('scheme', SchemeController::class);
        Route::post('/scheme/update', [SchemeController::class, 'update'])->name('admin.scheme.update');
        Route::post('/scheme/destroy', [SchemeController::class, 'destroy'])->name('admin.scheme.delete');
    });
});


// tutor Routes
Route::middleware(['auth', 'user-access:tutor'])->group(function () {

    // Route::get('/tutor/home', [TutorController::class, 'tutorHome'])->name('tutor.home');
});


// Normal User Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::get('/user_profile', [UserController::class, 'profile']);
    Route::get('/Courses', [UserCourseViewController::class, 'index']);
    Route::get('/Courses_grid', [UserCourseViewController::class, 'grid']);
    Route::get('/productShow', [UserProductController::class, 'show']);
    Route::get('/productcheckout', [UserProductController::class, 'checkout']);
    Route::get('/productcart', [UserProductController::class, 'cart']);
    Route::get('/instructor_profile', [userinstructorController::class, 'index']);
    Route::get('/notification', [UserNotificationController::class, 'index']);
});
