<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use App\Models\Role;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Trip;
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
