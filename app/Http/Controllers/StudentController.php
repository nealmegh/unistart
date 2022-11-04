<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
