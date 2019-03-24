<?php

namespace App\Http\Controllers;

use App\About;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{



    public function frontPage()
    {

        $aboutMe = About::where('id', '=', 1)->get();

        return view('welcome')->with([
            'aboutMe' => $aboutMe,
        ]);
    }

    public function works()
    {

        $works = Project::all();
        return view('projects')->with([
            'works' => $works,
        ]);
    }


    public function showWork($id)
    {

        $work = Project::find($id);

        return view('singleProject')->with([
            'work' => $work,
        ]);
    }
}
