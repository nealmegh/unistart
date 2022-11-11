<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Http\Requests\StoreAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Models\Student;
use App\Models\University;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Auth;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = [];
        $student = Auth::user()->student;
        $universities = Admission::distinct()->get(['university_id']);

        foreach ($universities as $university)
        {
            $admissions [] = Admission::where('student_id', $student->id)->where('university_id', $university->university_id)->orderBy('id', 'desc')->first();;

        }
        return view('Backend.Dashboard.Student.Admission.index', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Student $student, University $university)
    {
        return view('Backend.Dashboard.Student.university.apply', compact('student', 'university'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdmissionRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreAdmissionRequest $request, Student $student, University $university)
    {

        $testId = $request->subject.'-'.rand(10000, 20000);
        $testDate = CarbonImmutable::now()->add(30, 'day')->format('Y-m-d');
        $data = [
            'university_id' => $university->id,
            'student_id' => $student->id,
            'admission_test_date' => $testDate,
            'admission_test_id' => $testId
        ];
        $admission = Admission::create($data);
        return redirect()->route('student.admission.apply.success', $admission->id);
    }

    public function success(Admission $admission){
        $university = University::find($admission->university_id);
        $student = Student::find($admission->student_id);
        return view('Backend.Dashboard.Student.university.applySuccess', compact('university', 'student', 'admission'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdmissionRequest  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
