<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $useSettings = [];
        $settings = SiteSettings::all();
        foreach ($settings as $setting)
        {
            $useSettings[$setting->attribute][0] = $setting->value;
            $useSettings[$setting->attribute][1] = $setting->value2;

        }
        return view('Backend.Settings.index', compact('settings', 'useSettings'));
    }
    public function email()
    {
        $useSettings = [];
        $settings = SiteSettings::all();
        foreach ($settings as $setting)
        {
            $useSettings[$setting->attribute][0] = $setting->value;
            $useSettings[$setting->attribute][1] = $setting->value2;

        }
        return view('Backend.Settings.email', compact('settings', 'useSettings'));
    }

    public function frontend(){
        $useSettings = [];
        $settings = SiteSettings::all();
        foreach ($settings as $setting)
        {
            $useSettings[$setting->attribute][0] = $setting->value;
            $useSettings[$setting->attribute][1] = $setting->value2;

        }
        return view('Backend.Settings.frontend', compact('settings', 'useSettings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSettings $siteSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSettings  $siteSettings
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $settings = SiteSettings::all();

        foreach ($settings as $setting)
        {

            if(array_key_exists($setting->attribute, $request->all()))
            {

                if($setting->attribute == 'holiday_dates')
                {
                    $dateArray = explode(',', $request[$setting->attribute]);
                    $dates = json_encode($dateArray);
                    $setting->value = $dates;
                }
                elseif($setting->attribute == 'terms')
                {
                    $setting->value = 'Terms';
                    $setting->value2 = $request[$setting->attribute];
                }
                else
                {
                    $setting->value = $request[$setting->attribute];
                }

                $setting->save();

            }

        }

        return redirect()->route('setting.settings');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSettings  $siteSettings
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function emailUpdate(Request $request)
    {

        $settings = SiteSettings::all();

        foreach ($settings as $setting)
        {

            if(array_key_exists($setting->attribute, $request->all()))
            {

//                if($setting->attribute == 'mail_host')
//                {
//                    Config::set('mail.mailers.smtp.host', $request[$setting->attribute]);
//                }
//                if($setting->attribute == 'mail_username')
//                {
//                    Config::set('mail.mailers.smtp.username', $request[$setting->attribute]);
//                }
//                if($setting->attribute == 'mail_password')
//                {
//                    Config::set('mail.mailers.smtp.password', $request[$setting->attribute]);
//                }
//                if($setting->attribute == 'mail_from_name')
//                {
//                    Config::set('mail.mailers.smtp.from.name', $request[$setting->attribute]);
//                }
                $setting->value = $request[$setting->attribute];
                $setting->save();

            }

        }

        return redirect()->back();

    }

    public function fairRaiseForm()
    {
        return view('Backend.settings.fairIncrease');
    }

    /**
     * @param Request $request
     */
    public function fairRaise(Request $request)
    {
        $locations = Location::all();

        if($request->increase_type != 1)
        {
            foreach ($locations as $location)
            {
                foreach ($location->airports as $airport)
                {
                    $airport->pivot->price = $airport->pivot->price + ($airport->pivot->price*($request->fairRaise/100));
                    $airport->pivot->return_price = $airport->pivot->return_price + ($airport->pivot->return_price*($request->fairRaise/100));
                    $airport->pivot->update();

                }
            }
        }
        else{
            foreach ($locations as $location)
            {
                foreach ($location->airports as $airport)
                {
                    $airport->pivot->price = $airport->pivot->price + $request->fairRaise;
                    $airport->pivot->return_price = $airport->pivot->return_price + $request->fairRaise;
                    $airport->pivot->update();

                }
            }
        }


        return redirect()->route('setting.settings');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSettings $siteSettings)
    {
        //
    }
}
