<?php

namespace App\Http\Controllers;

use App\Image;
use App\Review;
use App\Project;
use App\Category;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function nav1(){
        $comments=Review::all();
        return view('template.links.about', compact('comments'));
        
    }

    public function nav2(){
        return view('template.links.services');
    }

    public function nav3($id){
        $projects=Project::find($id);
        $categories= $projects->categories;
        
        return view('template.links.portfolio', compact('projects','categories'));
    }

    public function nav4(){
        
        return view('template.links.contact');
    }
    public function nav5(){
        $projects=Project::all();
        // foreach ($projects as $project) {
        //     foreach ($project->images as $image) {
        //         $images[]=$image->file;
        //     }
        // }
        // return $images;
        
        return view('template.links.project', compact('projects'));
    }
}
