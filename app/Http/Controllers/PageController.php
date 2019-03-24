<?php

namespace App\Http\Controllers;

use App\About;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{



    public function frontPage()
    {

        $aboutMe = About::all();

        return view('welcome')->with([
            'aboutMe' => $aboutMe,
        ]);
    }

    public function works()
    {

        $works = Project::all();
        $aboutMe = About::all()->first();
        return view('projects')->with([
            'works' => $works,
            'aboutMe' => $aboutMe,
        ]);
    }


    public function showWork($slug)
    {

         $work = Project::find($slug); 

         return view('singleProject')->with([
            'work' => $work,
        ]); 
        
    }
}
