<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class TeacherController extends Controller
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
        return view('Backend.Teacher.create');
    }

    public function teacher_register()
    {
        return view('register.teacher');
    }


    public function teacher_register_store(Request $request)
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 3,
            'password' => $request->password
        ];
        try{
            $createUser = New CreateNewUser();

            $user = $createUser->create($userData);

            $request->request->remove('name');
            $request->request->remove('email');
            $request->request->remove('password');
            $request->request->add(['user_id' => $user->id]);
            Teacher::create($request->all());
        }
        catch (Exception $e)
        {

        }

        return redirect('login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 3,
            'password' => $request->password
        ];
        try{
            $createUser = New CreateNewUser();

            $user = $createUser->create($userData);

            $request->request->remove('name');
            $request->request->remove('email');
            $request->request->remove('password');
            $request->request->add(['user_id' => $user->id]);
            Teacher::create($request->all());
        }
        catch (Exception $e)
        {

        }

        return redirect()->route('admin.teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
