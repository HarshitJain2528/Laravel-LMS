<?php

use App\Http\Controllers\Admin\AddTeacherController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\CreateCourseController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\AttendanceController as ControllersAttendanceController;
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
use App\Http\Controllers\Student\AttendenceController;
use App\Http\Controllers\Student\StudentMessageController;
use App\Http\Controllers\Student\ProfileController;

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
    Route::get('/assign',[DisplayController::class,'assign'])->name('assign');
    Route::get('/attendence/{id}',[DisplayController::class,'attendence'])->name('attendenceMark');
    Route::post('/mark',[AttendenceController::class,'mark'])->name('Mark');
    Route::get('/check-attendance-status', [AttendenceController::class, 'checkAttendanceStatus'])
    ->name('CheckAttendanceStatus');
    Route::get('/courses',[DisplayController::class,'courses'])->name('courses');
    Route::get('/reviews/{id}',[DisplayController::class,'reviews'])->name('reviews');
    Route::post('/submit-reviews',[ReviewController::class,'submitReviews'])->name('submitReviews');
    Route::get('/profile/{id}',[DisplayController::class,'profile'])->name('profile');
    Route::get('/topics/{id}',[DisplayController::class,'topics'])->name('topics');
    Route::get('/description/{id}',[DisplayController::class,'description'])->name('description');
    Route::get('/assignment/{id}',[DisplayController::class,'assignment'])->name('assignmentView');
    Route::post('/submit-assignment',[AssignmentSubmitController::class,'submitAssignment'])->name('submitAssignment');
    Route::get('/next/{id}',[DisplayController::class,'next'])->name('next');
    Route::post('/change-password',[DisplayController::class,'change'])->name('change.password');
    Route::post('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    // Route::get('/help',[DisplayController::class,'help'])->name('help');
    Route::get('/help', [StudentMessageController::class, 'showMessages'])->name('help');
    Route::post('/student/send-message', [StudentMessageController::class, 'sendMessageToTeacher'])->name('student.send.message');
    Route::get('/student/fetch-messages', [StudentMessageController::class, 'fetchMessages'])->name('student.fetch.messages');
});

//admin routes
Route::group(['middleware' => ['check.role:superadmin']], function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/admin/dashboard', 'showDashboard')->name('dashboard');
        Route::get('/admin/profile', 'showProfile')->name('admin.profile');
        Route::get('/admin/courses', 'showCourses')->name('course.table');
        Route::get('/admin/students', 'showStudents')->name('student.table');
        Route::get('/admin/teachers', 'showTeachers')->name('teacher.table');
        Route::get('/admin/attendence', 'showAttendence')->name('admin.attendence');
        Route::get('/admin/assignment', 'showAssignment')->name('assignment');
        Route::get('/admin/delete-course/{id}', 'deleteCourse');
        Route::get('/admin/delete-student/{id}', 'deleteStudent');
        Route::get('/admin/delete-teacher/{id}', 'deleteTeacher');
        Route::get('/get-assignment-details/{id}', 'getAssignmentDetails');
        Route::post('/edit-admin-profile','editProfile')->name('edit');
    });

     Route::get('/fetch-updated-data/{duration}', [AttendanceController::class, 'fetchUpdatedData']);
     Route::get('/admin/messages', [MessageController::class, 'showMessages'])->name('chat.show');
     Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');
});

//teacher routes
Route::group(['middleware' => ['check.role:teacher']], function () {
    Route::controller(TeacherHomeController::class)->group(function(){
        Route::get('/teacher/course',  'course');
        Route::get('/teacher/course/topics/{id}',  'topic');
        Route::get('/teacher/create/courses',  'showCreateCourses');
        Route::get('/teacher/create/topic',  'showTopicPage')->name('topic');
        Route::get('/teacher/student',  'showStudent');
        Route::get('/teacher/create/assignments',  'showAssignment');
        Route::get('/teacher/submit/assignments',  'assignmentSubmit')->name('submit.assignments');
        Route::get('/teacher/attendence',  'showAttendence')->name('attendance.show');
        Route::get('/teacher/reviews',  'showReviews');

    });

    Route::controller(TeacherMessageController::class)->group(function(){
        Route::post('/teacher/send-message',  'sendMessageToSuperAdmin')->name('teacher.send.message');
        Route::get('/teacher/messages',  'showMessages')->name('teacher.show.messages');
        Route::post('/teacher/send-message',  'sendMessageToSuperAdmin')->name('teacher.send.message');
        Route::get('/teacher/fetch-messages',  'fetchMessages')->name('teacher.fetch.messages');
    });

    Route::controller(AssignmentController::class)->group(function(){
        Route::post('/teacher/create/assignments', 'createAssignment')->name('create.assignment');
        Route::get('details/{id}', 'assignmentDetails')->name('assignment.details');
        Route::post('/marks', 'updateMarks');
    });

    Route::post('/teacher/create/courses', [CourseController::class, 'createCourse'])->name('create.course');
    Route::post('/teacher/create/topic', [TopicController::class,'topicCreate'])->name('create.topic');
});
