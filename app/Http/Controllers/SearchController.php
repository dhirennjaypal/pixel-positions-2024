<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(){
		$jobs	=	Job::where("LOWER(title)", "LIKE", "%LOWER(".request("q").")%")->get();
		return view("jobs.results", [
			"jobs"	=>	$jobs,
		]);
	}

}