<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('search')->with('members', $members);
    }

    public function tag(Request $request){
        $tag = $request->input('tag');

        $members = Member::where('tag', 'like', "$tag%") ->get();

        return view('result')->with('members', $members);
    }

    public function salary(Request $request){
        $salary = $request->input('salary');

        $members = Member::where('salary_range', 'like', "$salary%") ->get();

        return view('result')->with('members', $members);
    }

    public function location(Request $request){
        $location = $request->input('location');

        $members = Member::where('location', 'like', "$location%") ->get();

        return view('result')->with('members', $members);
    }

    public function find(Request $request){
        $search = $request->input('search');

        $members = Member::where('tag', 'like', "$search%")
        ->orWhere('salary_range', 'like', "$search%")
        ->orWhere('location', 'like', "$search%")
           ->get();

        return view('searchresult')->with('members', $members);
    }
}
