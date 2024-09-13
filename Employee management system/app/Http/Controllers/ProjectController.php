<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index(){
        $proj_data= Project::get();
       
         
       return view('admin.projects.index',compact('proj_data'));
    }
        public function show( $project_id){
        $proj_data= Project::findorfail($project_id);
      //  return  $proj_data->employees;
        return view('admin.projects.show',compact('proj_data'));
    }
}
