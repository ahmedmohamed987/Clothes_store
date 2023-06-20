<?php

namespace App\Http\Controllers;
use App\Clothes;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class clothesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clothes=clothes::orderBy('id','DESC')->paginate(9);
        return View('clothes.index',['clothes'=>$clothes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('clothes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
         $clo = new Clothes;
         $clo->name= $request->input('name');
         $clo->price= $request->input('price');
         if($request->hasFile('image')){
            $file= $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move( public_path('storage'),$filename);
            $clo->image =$filename;
         }
        
        $clo->save();
        return redirect()->route('clothes.index');
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
        $clothes=Clothes::find($id);
        return View('clothes.show',['clothes'=>$clothes]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clothes=Clothes::find($id);
        return View('clothes.edit',['clothes'=>$clothes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {        
        
         $cloth = Clothes::find($id);
         $cloth->name= $request->input('name');
         $cloth->price= $request->input('price');
         if($request->hasFile('image')){
            $file= $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('storage',$filename);
            $cloth->image =$filename;

         }
            $cloth->save();
    return redirect()->route('clothes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Clothes::find($id)->delete();
         return Redirect::back();
       
        

    }
}
