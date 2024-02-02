<?php

use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ViewController;
use App\Http\Controllers\Auth\AuthController;
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
Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'showLoginForm');
    Route::post('/register', 'postRegister')->name('register');
    Route::post('/signin', 'login');
    Route::get('/logout', 'logout');
});

//student routes
Route::group(['middleware' => ['check.role:student']], function () {
    Route::controller(DisplayController::class)->group(function(){
        Route::get('/index','index')->name('index');
        Route::get('/assign','assign')->name('assign');
        Route::get('/attendence/{id}','attendence')->name('attendence.mark');
        Route::get('/courses','courses')->name('courses');
        Route::get('/reviews/{id}','reviews')->name('reviews');
        Route::get('/profile/{id}','profile')->name('profile');
        Route::get('/topics/{id}','topics')->name('topics');
        Route::get('/description/{id}','description')->name('description');
        Route::get('/assignment/{id}','assignment')->name('assignment.view');
        Route::get('/next/{id}','next')->name('next');
        Route::post('/change-password','change')->name('change.password');
    });

    Route::controller(AttendenceController::class)->group(function(){
        Route::post('/mark','mark')->name('Marks');
        Route::get('/check-attendance-status','checkAttendanceStatus')->name('attendence.status');
    });

    Route::controller(StudentMessageController::class)->group(function(){
        Route::get('/help','showMessages')->name('help');
        Route::post('/student/send-message','sendMessage')->name('student.send.message');
        Route::get('/get-messages/{teacherId}','getMessages')->name('student.get.messages');
    });

    Route::post('/submit-reviews',[ReviewController::class,'submitReviews'])->name('submit.reviews');
    Route::post('/submit-assignment',[AssignmentSubmitController::class,'submitAssignment'])->name('submit.assignment');
    Route::post('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

});

//admin routes
Route::group(['middleware' => ['check.role:superadmin']], function () {
    Route::controller(ViewController::class)->group(function(){
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
        Route::get('/teacher/profile', 'showTeacherProfile')->name('teacher.profile');
        Route::get('/edit-teacher-profile','editTeacherProfile')->name('edit.teacher.profile');

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
