<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\House;

class HouseController extends Controller
{
	public function index()
	{
		$house = House::all();

		return view('welcome',compact('house'));
	}
	public function addHomePage()
	{
		return view('addhome');
	}
    public function homeInit(Request $request)
    {
    	// var_dump($request->all());
    	// exit();
    	$this->validate($request,[
    		'address' => 'required',
    		'meter' => 'required',
    		'money' => 'required',
    		'rooms' => 'required',
    		'desc' => 'required',
            'select' => 'required',
            'centrGatboba' => 'required'
    		// 'image' => 'required|image'
    	]);

    	// $file = $request->file('image');
    	// $fileName = $file->getClientOriginalName();
    	$house = new House;
    	$house->address = $request->input('address');
        $house->mdebareoba = $request->input('select');
    	// $house->image = $fileName;
    	$house->meter = $request->input('meter');
    	$house->money = $request->input('money');
    	$house->rooms = $request->input('rooms');
        $house->mdebareoba = $request->input('select');
    	$house->description = $request->input('desc');
        $house->centraluri = $request->input('centrGatboba');
    	$house->save();

    	return \Redirect::to('/');
    }
    public function Search(Request $request)
    {
        if ($request->input('mdebareoba') && $request->input('rooms')) {
           $this->validate($required,[
                'mdebareoba' =>'required',
                'rooms' => 'required'
            ]);

           $mde = $request->input('mdebareoba');
           $checkBox = $request->input('rooms');

           $house = House::where('mdebareoba',$mde)->where('rooms',$checkBox);
        }
        if ($request->input('select')) {
            $this->validate($request,[
                'select' => 'required'
            ]);
            $mde = $request->input('select');
            $house = House::where('mdebareoba',$mde)->get();
        }
        if ($request->input('select') && $request->input('search')) {
            $this->validate($request,[
                'select' => 'required',
                'search'=>'required'
            ]);
            $select = $request->input('select');
            $search = $request->input('search');

           $house = House::where('mdebareoba',$select)->where('address','LIKE',"%{$search}%")->get();
        }
        if ($request->input('centraluri')) {
            $house = House::where('centraluri',1)->get();
        }
        if ($request->input('rooms')) {
            $this->validate($request,[
                'rooms' => 'required'
            ]);

            $check = $request->input('rooms');

            $house = House::where('rooms',$check)->get();
        }
        if($request->input('minNumber') && !$request->input('maxNumber') || !$request->input('minNumber') && $request->input('maxNumber')){
            if (!$request->input('maxNumber')) {
                $this->validate($request,[
                    'minNumber'=>'required'
                ]);
                $minNum = $request->input('minNumber');
                $house = House::where('meter','>=',$minNum)->get();
            }else{
                $this->validate($request,[
                    'maxNumber'=>'required'
                ]);
                $maxNumber = $request->input('maxNumber');
                $house = House::where('meter','<=',$maxNumber)->get();
            }
        }
        if ($request->input('minNumber') && $request->input('maxNumber')) {
            $this->validate($request,[
                'maxNumber'=>'required',
                'minNumber'=>'required'
            ]);

            $minNum = $request->input('minNumber');
            $maxNumber = $request->input('maxNumber');
            $house = House::whereBetween('meter',[$minNum,$maxNumber])->get();
        }
        if ($request->input('centraluri') && $request->input('rooms')) {
            $this->validate($request,[
                'rooms' => 'required',
                'centraluri' => 'required'
            ]);

            $ro = $request->input('rooms');
            $cent = $request->input('centraluri');

            $house = House::where('centraluri',$cent)->where('rooms',$ro)->get();
        }
        if($request->input('minMoney') && !$request->input('maxMoney') || !$request->input('minMoney') && $request->input('maxMoney')){
            if (!$request->input('maxMoney')) {
                $this->validate($request,[
                    'minMoney'=>'required'
                ]);
                $minNum = $request->input('minMoney');
                $house = House::where('money','>=',$minNum)->get();
            }else{
                $this->validate($request,[
                    'maxMoney'=>'required'
                ]);
                $maxNumber = $request->input('maxMoney');
                $house = House::where('money','<=',$maxNumber)->get();
            }
        }

        if ($request->input('minMoney') && $request->input('maxMoney')) {
            $this->validate($request,[
                'maxMoney'=>'required',
                'minMoney'=>'required'
            ]);

            $minNum = $request->input('minMoney');
            $maxNumber = $request->input('maxMoney');
            $house = House::whereBetween('money',[$minNum,$maxNumber])->get();
        }
        if ($request->input('mdebareoba') && $request->input('minNumber') || $request->input('mdebareoba') && $request->input('maxNumber') || $request->input('mdebareoba') && $request->input('minNumber') && $request->input('maxNumber')) {
           if($request->input('minNumber'))
           {
                $this->validate($request,[
                    'minNumber'=>'required',
                    'mdebareoba'=>'required'
                ]);

                $mde = $request->input('mdebareoba');
                $minNum = $request->input('minNumber');

                $house = House::where('mdebareoba',$mde)->where('money','<',$minNum)->get();
           }else{
                $this->validate($request,[
                    'maxNumber'=>'required',
                    'mdebareoba'=>'required'
                ]);
                $mde = $request->input('mdebareoba');
                $maxNum = $request->input('maxNumber');

                $house = House::where('mdebareoba',$mde)->where('money','>',$maxNum)->get();
           }

           if ($request->input('minNumber') && $request->input('maxNumber') && $request->input('mdebareoba')) {
                $this->validate($request,[
                    'maxNumber'=>'required',
                    'minNumber'=>'required',
                    'mdebareoba'=>'required'
                ]);
                $mde = $request->input('mdebareoba');
                $minNum = $request->input('minNumber');
                $maxNum = $request->input('maxNumber');

                $house = House::where('mdebareoba',$mde)->where('money','<',$minNum)->where('money','>',$maxNum)->get();
           }
        }
        if ($request->input('select') && $request->input('centraluri')) {
                $this->validate($request,[
                    'select' => 'required',
                    'centraluri' => 'required'
                ]);
                $cent = $request->input('centraluri');
                $select = $request->input('select');
                $house = House::where('mdebareoba',$select)->where('centraluri',$cent)->get();
                    // TESTING !!
                // while ($house) {
                //     foreach($house as $houses) {
                //         print_r($houses['address']);
                //     }
                //      exit();
                // }
                 // House::select(House::raw("SELECT * FROM houses WHERE centraluri = 1 AND mdebareoba = '$select'"));
        }
        if ($request->input('centraluri') && $request->input('search')) {
                $this->validate($request,[
                    'search' => 'required',
                ]);

                $select = $request->input('search');
                $house = House::where('address','like',"%{$select}%")->orWhere('description','like',"%{$select}%")->where('centraluri',1)->get();
        }
        if ($request->input('select') && $request->input('minMoney') && $request->input('centraluri')) {
            $this->validate($request ,[
                'select' => 'required',
                'minMoney' => 'required',
                'centraluri' => 'required'
            ]);
            $select = $request->input('select');
            $minMoney = $request->input('minMoney');
            $cen = $request->input('centraluri');

            $house = House::where('mdebareoba',$select)->where('money','>',$minMoney)->where('centraluri',$cen)->get();
        }
        if ($request->input('select') && $request->input('maxMoney') && $request->input('centraluri')) {
            $this->validate($request ,[
                'select' => 'required',
                'maxMoney' => 'required',
                'centraluri' => 'required'
            ]);
            $select = $request->input('select');
            $maxMoney = $request->input('maxMoney');
            $cen = $request->input('centraluri');

            $house = House::where('mdebareoba',$select)->where('money','<',$maxMoney)->where('centraluri',$cen)->get();
        }
        if ($request->input('select') && $request->input('minMoney') && $request->input('maxMoney') && $request->input('centraluri')) {
            $this->validate($request ,[
                'select' => 'required',
                'maxMoney' => 'required',
                'minMoney' => 'required',
                'centraluri' => 'required'
            ]);
            $select = $request->input('select');
            $maxMoney = $request->input('maxMoney');
            $minMoney = $request->input('minMoney');
            $cen = $request->input('centraluri');

            $house = House::where('mdebareoba',$select)->where('money','>',$minMoney)->where('money','<',$maxMoney)->where('centraluri',$cen)->get();
        }
        if ($request->input('select') &&$request->input('search') &&$request->input('rooms') && $request->input('centraluri')) {
            $this->validate($request ,[
                'select' => 'required',
                'search' => 'required',
                'rooms' => 'required',
            ]);
            $select = $request->input('select');
            $search = $request->input('search');
            $rooms = $request->input('rooms');

            $house = House::where('mdebareoba',$select)->where('address','like',"%{$search}%")->orWhere('description','like',"%{$search}%")->where('rooms',$rooms)->get(); 
        }

        return view('anotherSearch',compact('house'));
    }
}
