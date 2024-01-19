<?php

use App\Http\Controllers\Admin\AddTeacherController;
use App\Http\Controllers\Admin\CreateCourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Student\StudentHomeController;
use App\Http\Controllers\Teacher\TeacherHomeController;
use App\Http\Controllers\Teacher\TeacherMessageController;
use App\Http\Controllers\Teacher\AssignmentController;
use App\Http\Controllers\Teacher\CourseController;
use App\Http\Controllers\Teacher\TopicController;
use App\Http\Controllers\Student\DisplayController;
use App\Http\Controllers\Student\ReviewController;
use App\Http\Controllers\Student\AssignmentSubmitController;
use App\Models\Topic;
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
// login routes
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/register', [AuthController::class, 'postRegister'])->name('register');
Route::post('/signin', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['check.role:student']], function () {
    Route::get('/index',[DisplayController::class,'index'])->name('index');
    Route::get('/single',[DisplayController::class,'single'])->name('single');
    Route::get('/assign',[DisplayController::class,'assign'])->name('assign');
    Route::get('/attendence',[DisplayController::class,'attendence'])->name('attendence');
    Route::get('/courses',[DisplayController::class,'courses'])->name('courses');
    Route::get('/reviews/{id}',[DisplayController::class,'reviews'])->name('reviews');
    Route::post('/submit-reviews',[ReviewController::class,'submitReviews'])->name('submitReviews');
    Route::get('/profile/{id}',[DisplayController::class,'profile'])->name('profile');
    Route::get('/help',[DisplayController::class,'help'])->name('help');
    Route::get('/topics/{id}',[DisplayController::class,'topics'])->name('topics');
    Route::get('/desc/{id}',[DisplayController::class,'desc'])->name('desc');
    Route::get('/assignment/{id}',[DisplayController::class,'assignment'])->name('assignment');
    Route::post('/submit-assignment',[AssignmentSubmitController::class,'submitAssignment'])->name('submitAssignment');
    Route::get('/next/{id}',[DisplayController::class,'next'])->name('next');
    Route::post('/change-password',[DisplayController::class,'change'])->name('change.password');

});

//admin routes
Route::group(['middleware' => ['check.role:superadmin']], function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/admin/dashboard', 'showDashboard')->name('dashboard');
        Route::get('/admin/profile', 'showProfile')->name('admin.profile');
        Route::get('/admin/students', 'showStudents')->name('student.table');
        Route::get('/admin/teachers', 'showTeachers')->name('teacher.table');
        Route::get('/admin/attendence', 'showAttendence')->name('attendence');
        Route::get('/admin/assignment', 'showAssignment')->name('assignment');
        Route::get('/edit_admin_profile','editProfile')->name('edit');
    });

        Route::get('/admin/messages', [MessageController::class, 'showMessages'])->name('chat.show');
        Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');

});

//teacher routes
Route::group(['middleware' => ['check.role:teacher']], function () {
    Route::get('/teacher/course', [TeacherHomeController::class, 'course']);
    Route::get('/teacher/course/topics/{id}', [TeacherHomeController::class, 'topic']);
    Route::get('/teacher/create/courses', [TeacherHomeController::class, 'showCreateCourses']);
    Route::get('/teacher/create/topic', [TeacherHomeController::class, 'showTopicPage'])->name('topic');
    Route::get('/teacher/student', [TeacherHomeController::class, 'showStudent']);
    Route::get('/teacher/create/assignments', [TeacherHomeController::class, 'showAssignment']);
    Route::get('/teacher/attendence', [TeacherHomeController::class, 'showAttendence']);
    Route::get('/teacher/reviews', [TeacherHomeController::class, 'showReviews']);
    Route::get('/teacher/messages', [TeacherMessageController::class, 'showMessages'])->name('teacher.messages');
    Route::post('/teacher/send-message', [TeacherMessageController::class, 'sendMessageToSuperAdmin'])->name('teacher.send.message');
    Route::post('/teacher/create/courses', [CourseController::class, 'createCourse'])->name('create.course');
    Route::post('/teacher/create/topic', [TopicController::class,'topicCreate'])->name('create.topic');
    Route::post('/teacher/create/assignments', [AssignmentController::class, 'createAssignment'])->name('create.assignment');
});

Route::get('/videos', function(){
    $topics = Topic::all(); // Retrieve all topics from the database

    return view('teacher.video', compact('topics'));
});

