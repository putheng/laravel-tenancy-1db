<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('projects.dashboard', compact('projects'));
    }
}
