<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\Course;
use App\Models\Module;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreStudentRequest $request)
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'password' => $request->password
        ];
        try{
            $createUser = New CreateNewUser();

            $user = $createUser->create($userData);

            $request->request->remove('name');
            $request->request->remove('email');
            $request->request->remove('password');
            $request->request->add(['user_id' => $user->id]);
            Student::create($request->all());
        }
        catch (Exception $e)
        {

        }

        return redirect()->route('admin.students');
    }

    public function student_register()
    {
        return view('register.student');
    }

    public function universities(){
        $universities = University::all();
        return view('Backend.Dashboard.Student.university.index', compact('universities'));
    }
    public function courses(){
        $courses = Course::all();
        return view('Backend.Dashboard.Student.Course.index', compact('courses'));
    }
    public function modules(Course $course){
        $modules = $course->modules;
        return view('Backend.Dashboard.Student.Course.modules', compact('course' ,'modules'));
    }
    public function moduleView(Course $course, Module $module){

        return view('Backend.Dashboard.Student.Course.moduleView', compact('course' ,'module'));
    }

    public function student_register_store(Request $request)
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'password' => $request->password
        ];
        try{
            $createUser = New CreateNewUser();

            $user = $createUser->create($userData);

            $request->request->remove('name');
            $request->request->remove('email');
            $request->request->remove('password');
            $request->request->add(['user_id' => $user->id]);
            Student::create($request->all());
        }
        catch (Exception $e)
        {

        }

       return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('Backend.Student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {

        $oldUser = User::find($student->user_id);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role_id'] = 2;

        try {
            $updateUser = new UpdateUserProfileInformation();
            $updateUser->update($oldUser, $data);
        } catch (Exception $exception) {

        }
        $student->update($request->all());
        return redirect()->route('admin.students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->user->delete();
        $student->delete();
        return 200;
    }
}
