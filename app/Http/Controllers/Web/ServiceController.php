<?php

namespace App\Http\Controllers\Web;

use App\Models\Service;
use App\Models\PaperType;
use App\Models\AcademicLevel;
Use App\Models\Deadline;
Use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $services = Service::orderBy('name', 'ASC')->get();
        return $services;
    }

    public function show($slug)
    {
        //  return 'msg';
        $service = Service::where(['slug' => $slug])->firstOrFail();
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();
        
        return view('pages.services.show', compact('service','services','deadlines','academic_levels','paper_types','web_setting', 'countries'));  
    }

    public function dissertation(){

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();

        return view('pages.services.dissertation-writing', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
    }

    public function essay(){

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();

        return view('pages.services.essay-writing', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
    }

    public function mba(){

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();

        return view('pages.services.mba-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
    }

    public function personal(){

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();

        return view('pages.services.mba-personal', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
    }

    public function write_my_assignment(){

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services=Service::all();
        $countries=Country::all();
        $web_setting=WebSetting::first();

        return view('pages.services.mba-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting', 'countries'));
    }

    
}










