<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use LDAP\Result;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return response()->json([
            'success' => true,
            'response' => $projects,
        ]);
    }
}
