<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cake;
use Image;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cakes = cake::all()->toArray();
        // dd($cakes);
        return view('seller.list', compact('cakes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'shape'    =>  'required',
            'flavour'   =>  'required',
            'color' =>  'required',
            'image' => 'required',
            'sizePrice' => 'required',
            'description' =>    'required']);
        $cake = new Cake([
            'shape'    =>  $request->get('shape'),
            'flavour'     =>  $request->get('flavour'),
            'color'    =>  $request->get('color'),
            'description'     =>  $request->get('description'),

        ]);
        if ($request->hasFile('image')){
            $cake_img = $request->file('image');
            $fileName = time().'.'.$cake_img->getClientOriginalExtension();
            Image::make($cake_img)->resize(150,150)->save(public_path('/storage/cake_img/'.$fileName));
            $cake->image=$fileName;
        }
        $cake->save();
        //return redirect()->route('seller.create');
        return redirect()->route('seller.index')->with('success_created', 'new cake created');
    }
//     public function getImageUrl(){
//     return asset($this->cake_img);
// }


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
        $cakes = cake::find($id);

        return view('seller.edit', compact('cakes'));
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
        $cakes = cake::find($id);
        $cakes->delete();

        return redirect('/seller')->with('success', 'Cake has been deleted Successfully');
    }
}
