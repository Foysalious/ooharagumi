<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\newInfo;

class newInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newInfos = newInfo::orderBy('id','desc')->get();
        return view();
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
        $newInfo = new newInfo();
        $newInfo->status = $request->status;
        $newInfo->from_date = $request->from_date;
        $newInfo->to_date = $request->to_date;
        $newInfo->title = $request->title;
      
        $newInfo->save();
        // Toastr::success('Personal Info');
        return redirect()->route('');
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
    public function update(Request $request,newInfo $newInfo )
    {
        $newInfo->status = $request->status;
        $newInfo->from_date = $request->from_date;
        $newInfo->to_date = $request->to_date;
        $newInfo->title = $request->title;
      
        $newInfo->save();
        // Toastr::success('Personal Info');
        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(newInfo $newInfo)
    {
        $newInfo->delete();
        
        return redirect()->route('');
    }
}
