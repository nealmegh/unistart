<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        $modules = $course->modules;
        return view('Backend.Dashboard.Teacher.Module.index', compact('modules', 'course'));
    }
    public function upload(Request $request){
        if($request->video_src)
        {
            return $request->file('video_src')->store('temp','public');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('Backend.Dashboard.Teacher.Module.create', compact( 'course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModuleRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Course $course, StoreModuleRequest $request)
    {
        $module = new Module();
        $module->name = $request->name;
        $module->course_id = $course->id;
        $module->explanation = $request->explanation;
        $module->save();
        $this->moduleVideoUpload($request, $module);

        return redirect()->route('teacher.courses.modules.index', $course->id);
//        dd($request->all(), $course);
    }

    public function moduleVideoUpload(Request $request, Module $module)
    {
        $videoPath = "videos/modules/";
        if ($request->video_src) {
            $video = Str::after($request->video_src, 'temp/');
            Storage::disk('public')->move($request->video_src, "$videoPath/$video");
            $module->video_src = "$videoPath/$video";
            $module->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModuleRequest  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return 200;
    }
}
