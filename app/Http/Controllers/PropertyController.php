<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;
use App\Model\Cake;
use App\Model\Flavour;
use App\Model\Shape;
use App\Model\Color;
use App\Model\Size;

use Image;

class PropertyController extends Controller
{

    // my custom function
    public function getArrayOfIndex($table , $array ,$field)
    {   
        $ids = array();
        foreach($array as $value)
        {
            $id = $table->where($field, $value)->first()->id;
            if($id == null)
                return null;
            $ids[] = $id;
        }

        return $ids;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        // $cake =  \App\Model\Cake::first()->flavour()->getResults();
        // $shape =  \App\Model\Shape::first()->shape()->getResults();
        // $flavour =  \App\Model\Flavour::first()->flavour()->getResults();
        // $color =  \App\Model\Color::first()->color()->getResults();
        $data = [
            'properties' => $properties,
            // 'color' => $color,
            // 'flavour' => $flavour,
            // 'color' => $color,
            // 'shape' => $shape
        ];

        //dd($cakes);   
        return view('seller.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cakes =Cake::all();
        $flavors = Flavour::all();
        $shaps =Shape::all();
        $colors = Color::all();
        $sizes = Size::all();

        $data = [
            "cakes" => $cakes,
            "flavors" => $flavors,
            "shapes" => $shaps,
            "colors" => $colors,
            "sizes" => $sizes

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
            'description' =>   'required',
            'price' => 'required'
        
        ]);

        $cake_id = Cake::where('name',$request->cake)->first()->id;
        $fla_id = Flavour::where('flavour',$request->flavour)->first()->id;
        $shape_id = Shape::where('shape',$request->shape)->first()->id;
        $color_id =Color::where('color',$request->color)->first()->id;

        // size table;
        $size = \App\Model\Size::all();

        // many to many: id needed
        $size_IDs = $this->getArrayOfIndex($size, $request->sizes, 'size');

        $fileName="";      
        if ($request->hasFile('image')){
            $cake_img = $request->file('image');
            $fileName = time().'.'.$cake_img->getClientOriginalExtension();
            Image::make($cake_img)->resize(150,150)->save(public_path('/storage/cake_img/'.$fileName));
        }

// dd( $request->price['S']);
        // dd($sizePrice);

       // if(count($sizes)>0){
       //  foreach ($sizes as $key => $value) {
       //      $properties = new Property([
       //          'description'     =>  $request->get('description'),
       //          'cake_id' => $cake_id,
       //          'flavour_id' => $fla_id,
       //          'shape_id' => $shape_id,
       //          'color_id' =>$color_id,
       //          'price' => $request->price[$value->size],
       //          // 'sizePrice_id'=>\App\Model\PriceandSize::where('size',$value->size)->first()->id,
       //      ]);
       //      $properties->image=$fileName;
       //      $properties->save();
       //  }
       // }
        $properties = new Property([
            'description'     =>  $request->get('description'),
            'cake_id' => $cake_id,
            'flavour_id' => $fla_id,
            'shape_id' => $shape_id,
            'color_id' =>$color_id,
            'price' => $request->price
        ]);
        $properties->image=$fileName;
        $properties->save();


        // insert to pivot table
        $properties->sizes()->attach($size_IDs);

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
    public function edit($id)
    {

        $cakes = \App\Model\Cake::all();
        $flavors = \App\Model\Flavour::all();
        $shaps = \App\Model\Shape::all();
        $colors = \App\Model\Color::all();
        $property = \App\Model\Property::find($id);
        // a ng man?yes brp
        $data = [
            "property" => $property,
            "cakes" => $cakes,
            "flavors" => $flavors,
            "shapes" => $shaps,
            "colors" => $colors,
         
        ];
        return view('seller.edit', $data);  // a nis trov ot?
        // kleang ng ot torn tver ey na hez?ort te bro 

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
       
        // $properties = \App\Model\Property::find($id);
        // $properties->delete();

        // return redirect('/cake')->with('success', 'Cake has been deleted Successfully');
    }
}
