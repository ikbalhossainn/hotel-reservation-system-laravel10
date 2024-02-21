<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.banner.index', compact('banners'));

        // $demo['banners'] = Banner::all();
        // return view('backend.banner.index', $demo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'banner_src'=>'image|mimes:jpg,jpeg,png,gif',
            'alt_text'=>'required',
            
        ]);
        // $imageName = Null;
        $imageName = time().'.'.$request->banner_src->extension();

        // $test = [
        //     'banner_src'=>$imageName,
        // 'alt_text'=>$request->alt_text,
        // ];
        // dd($test);

        // $uuid = IdGenerator::generate(['table' => 'employees','field'=>'uuid', 'length' => 7, 'prefix' =>'EMP-']);

        if($validate){
            Banner::create([
                'banner_src'=>$imageName,
                'alt_text'=>$request->alt_text,
                // 'publish_status'=>$imageName,
            ]);
            $request->banner_src->move(('banner'), $imageName);
            return redirect('banners')->with('success',"Banner Photo has been added");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $banners = Banner::find($id);
        return view('backend.banner.edit',compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
