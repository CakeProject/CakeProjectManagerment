<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;
use Image;
class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $properties = \App\Model\Property::all();
        $data = [
            'properties' => $properties,
        ];

        return view('seller.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cakes = \App\Model\Cake::all();
        $flavors = \App\Model\Flavour::all();
        $shaps = \App\Model\Shape::all();
        $colors = \App\Model\Color::all();
        $data = [
            "cakes" => $cakes,
            "flavors" => $flavors,
            "shapes" => $shaps,
            "colors" => $colors
            
        ];
        return view('seller.upload', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'shape'    =>  'required',
            'flavour'   =>  'required',
            'color' =>  'required',
            'image' => 'required',
            'description' =>    'required']);

        $cake_id = \App\Model\Cake::where('name',$request->cake)->first()->id;
        $fla_id = \App\Model\Flavour::where('flavour',$request->flavour)->first()->id;
        $shape_id = \App\Model\Shape::where('shape',$request->shape)->first()->id;
        $color_id = \App\Model\Color::where('color',$request->color)->first()->id;
        // dd($fla_id);
        $properties = new Property([
            'description'     =>  $request->get('description'),
            'cake_id' => $cake_id,
            'flavour_id' => $fla_id,
            'shape_id' => $shape_id,
            'color_id' =>$color_id
        ]);
        if ($request->hasFile('image')){
            $cake_img = $request->file('image');
            $fileName = time().'.'.$cake_img->getClientOriginalExtension();
            Image::make($cake_img)->resize(150,150)->save(public_path('/storage/cake_img/'.$fileName));
            $properties->image=$fileName;
        }
        $properties->save();
        return redirect()->route('cake.index'); 
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
    public function edit(request $id)
    {
        $cakes = \App\Model\Cake::all();
        $flavors = \App\Model\Flavour::all();
        $shaps = \App\Model\Shape::all();
        $colors = \App\Model\Color::all();
   

        $data = [
            "cakes" => $cakes,
            "flavors" => $flavors,
            "shapes" => $shaps,
            "colors" => $colors,
        
            
        ];
        if ($id->hasFile('image')){
            $cake_img = $id->file('image');
            $fileName = time().'.'.$cake_img->getClientOriginalExtension();
            Image::make($cake_img)->resize(150,150)->save(public_path('/storage/cake_img/'.$fileName));
            $properties->image=$fileName;
        }
        //$data->description = $id->description;
       //$data->image= $image;
        //return view('cake.index', $data); 
        //return redirect()->route('cake.index'); 
        return view('seller.edit',$data);
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
       
        $properties = \App\Model\Property::find($id);
        $properties->delete();

        return redirect('/cake')->with('success', 'Cake has been deleted Successfully');
    }
}
