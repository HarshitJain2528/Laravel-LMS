<?php

use App\Http\Controllers\Admin\AddTeacherController;
use App\Http\Controllers\Admin\CreateCourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Student\StudentHomeController;
use App\Http\Controllers\Teacher\TeacherHomeController;
use App\Http\Controllers\Teacher\TeacherMessageController;
use App\Http\Controllers\Teacher\CourseController;
use App\Http\Controllers\Teacher\TopicController;
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
Route::get('/student-page', [StudentHomeController::class, 'index']);
Route::get('/student/courses', [StudentHomeController::class, 'courses']);
Route::get('/student/contact', [StudentHomeController::class, 'contact']);
Route::get('/student/about', [StudentHomeController::class, 'about']);

//admin routes
Route::group(['middleware' => ['check.role:superadmin']], function () {
    Route::get('/admin/dashboard', [HomeController::class, 'showDashboard']);
    Route::get('/admin/students', [HomeController::class, 'showStudents']);
    Route::get('/admin/teachers', [HomeController::class, 'showTeachers']);
    Route::get('/admin/classes', [HomeController::class, 'showClasses']);
    Route::get('/admin/courses', [HomeController::class, 'showCourses']);
    Route::get('/admin/reports', [HomeController::class, 'showReports']);
    Route::get('/admin/reports', [HomeController::class, 'showReports']);
    Route::post('/admin/create/course', [CreateCourseController::class, 'createCourse']);
    Route::post('/admin/add/teacher', [AddTeacherController::class, 'addTeacher']);
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
    Route::get('/teacher/student/performance', [TeacherHomeController::class, 'showStudentPerformance']);
    Route::get('/teacher/messages', [TeacherMessageController::class, 'showMessages'])->name('teacher.messages');
    Route::post('/teacher/send-message', [TeacherMessageController::class, 'sendMessageToSuperAdmin'])->name('teacher.send.message');
    Route::post('/teacher/create/courses', [CourseController::class, 'createCourse'])->name('create.course');
    Route::post('/teacher/create/topic', [TopicController::class,'topicCreate'])->name('create.topic');
});

Route::get('/videos', function(){
    $topics = Topic::all(); // Retrieve all topics from the database

    return view('teacher.video', compact('topics'));
});