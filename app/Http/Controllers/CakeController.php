<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;
use App\Model\Cake;
use App\Model\Flavour;
use App\Model\Shape;
use App\Model\Color;
use App\Model\PriceandSize;

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
        $cakes = Cake::all();
        $data = [
            'cakes'=>$cakes,
            'properties' => $properties,
          
        ];

        return view('seller.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cakes = Cake::all();
        $flavors = Flavour::all();
        $shaps = Shape::all();
        $colors = Color::all();
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

        $cake_id = Cake::where('name',$request->cake)->first()->id;
        $fla_id = Flavour::where('flavour',$request->flavour)->first()->id;
        $shape_id = Shape::where('shape',$request->shape)->first()->id;
        $color_id = Color::where('color',$request->color)->first()->id;
        // dd($fla_id);
        $properties = new Property([
            'description'   =>  $request->get('description'),
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
        $cakes = Cake::all();
        $cakes = Cake::findOrFailnd($id);
        return view('/master/cart', compact('cakes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id  
     * @return \Illuminate\Http\Response
     */
    public function edit(request $id)
    {
        $cakes = Cake::all();
        $flavors = Flavour::all();
        $shaps = Shape::all();
        $colors = Color::all();
        $prices = Property::all();
        $sizes = PriceandSize::all();

        $data = [
            "cakes" => $cakes,
            "flavors" => $flavors,
            "shapes" => $shaps,
            "colors" => $colors,
            "prices" => $prices,
            "sizes" => $sizes
        ];
        if ($id->hasFile('image1')){
            $cake_img = $id->file('image1');
            $fileName = time().'.'.$cake_img->getClientOriginalExtension();
            Image::make($cake_img)->resize(150,150)->save(public_path('/storage/cake_img/'.$fileName));
            $properties->image1=$fileName;
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
       
        $properties = Property::find($id);
        $properties->delete();

        return redirect('/cake')->with('success', 'Cake has been deleted Successfully');
    }
}
