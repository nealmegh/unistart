<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Course;
use App\Models\Driver;
use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Trip;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index()
    {
//        dd(Auth::user()->can('Admin'));
//        if (Auth::user()->role_id == Role::IS_STUDENT)
//        {
//            return redirect('customer.dashboard');
//        }
//        $numberOfCustomers = 10;
//        $numberOfTrips = 10;
//        $numberOfDrivers = 10;
        if(Auth::user()->can('Student')) {
            $student = Auth::user()->student;
            $admissions = [];
            $universities = Admission::distinct()->get(['university_id']);

            foreach ($universities as $university)
            {
                $admissions [] = Admission::where('student_id', $student->id)->where('university_id', $university->university_id)->orderBy('id', 'desc')->first();;

            }
//        return view('Backend.Dashboard.Student.Admission.index', compact('admissions'));
            return view('Backend.Dashboard.index', compact('admissions'));
        }
        if(Auth::user()->can('Admin')) {
            $students = count(Student::all());
            $teachers = count(Teacher::all());
            $universities = count(University::all());
            $categories = count(Category::all());
            $courses = count(Course::all());
            return view('Backend.Dashboard.index', compact('students', 'teachers', 'categories', 'universities', 'courses'));
        }
        return view('Backend.Dashboard.index');

    }
    public function students()
    {
        $students = Student::all();
        return view('Backend.Student.index', compact('students'));
    }
    public function teachers()
    {
        $teachers = Teacher::all();
        return view('Backend.Teacher.index', compact('teachers'));
    }
    public function users()
    {
        $users = User::all();
        return view('Backend.User.index', compact('users'));
    }

    public function reports()
    {
        $bookings = null;
        $numberOfCustomers = 0;
        $numberOfTrips = 0;
        $numberOfDrivers = 0;
        return view('Backend.Dashboard.reports')->with(compact('bookings', 'numberOfCustomers', 'numberOfDrivers', 'numberOfTrips'));
    }
}
