<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Top;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $top = new Top();
        $top->status = $request->status;
        $top->date = $request->date;
        $top->title = $request->title;
        $top->description = $request->description;
        $top->unknown1 = $request->unknown1;
        $top->unknown2 = $request->unknown2;
        $top->unknown3 = $request->unknown3;
        $top->unknown4 = $request->unknown4;
        $top->info_id = $request->info_id;
        if( $request->image ){
            $image  = $request->file('image');
            $img    = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $img);
            Image::make($image)->save($location);
            $top->image = $img;
        }

        if( $request->logo ){
            $image  = $request->file('logo');
            $img    = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $img);
            Image::make($image)->save($location);
            $top->logo = $img;
        }
      
        $top->save();
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
    public function update(Request $request, Top $top)
    {
        $top->status = $request->status;
        $top->date = $request->date;
        $top->title = $request->title;
        $top->description = $request->description;
        $top->unknown1 = $request->unknown1;
        $top->unknown2 = $request->unknown2;
        $top->unknown3 = $request->unknown3;
        $top->unknown4 = $request->unknown4;
        $top->info_id = $request->info_id;

        if( $request->image ){
            if( File::exists('images/'. $top->image) ){
                File::delete('images/'. $top->image);
            }
            $image  = $request->file('image');
            $img    = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $img);
            Image::make($image)->save($location);
            $top->image = $img;
        }

        if( $request->logo ){
            if( File::exists('images/'. $top->logo) ){
                File::delete('images/'. $top->logo);
            }
            $image  = $request->file('logo');
            $img    = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $img);
            Image::make($image)->save($location);
            $top->logo = $img;
        }

        $top->save();
        // Toastr::success('Personal Info');
        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
