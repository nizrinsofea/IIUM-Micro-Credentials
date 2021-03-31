<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programmes;

class ProgrammesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programme = DB::table('mdl_course_categories')
        ->select('name')->where('parent','=','2')
        ->get();
        
        return response()->json($programme);
    }

    function kictview()
    {    $programme = DB::table('mdl_course_categories')
        ->select('name','description','path')->where('parent','=','2')
        ->get();   
        $kulliyyah = DB::table('mdl_course_categories')
        ->join('category_image', 'mdl_course_categories.id', '=', 'category_image.categoryid')
        ->select('category_image.imagesrc', 'mdl_course_categories.description')->where('name','=','kict')
        ->get();   
        return view('programme')->with('programme', $programme)->with('kulliyyah', $kulliyyah);
    }

    function koeview()
    {    $programme = DB::table('mdl_course_categories')
        ->select('name','description','path')->where('parent','=','3')
        ->get();   
        $kulliyyah = DB::table('mdl_course_categories')
        ->join('category_image', 'mdl_course_categories.id', '=', 'category_image.categoryid')
        ->select('category_image.imagesrc', 'mdl_course_categories.description')->where('name','=','koe')
        ->get(); 
        return view('programme')->with('programme', $programme)->with('kulliyyah', $kulliyyah);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
