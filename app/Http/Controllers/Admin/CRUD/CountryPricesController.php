<?php
namespace App\Http\Controllers\Admin\CRUD;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\country_prices;
use App\Models\Nationalitie;
use DataTables;
class CountryPricesController extends Controller
{
    

    public function index(Request $request)
    {
        $countries = country_prices::get();
        $cities = Nationalitie::get();
        if ($request->ajax()) {
            $data = country_prices::latest()->get();
    
            return DataTables::of($data)
            ->addColumn('country' , function($row){
                return $row->country?->title;
            })
                ->addColumn('actions', function ($row) {
                    $edit = '';
                    $delete = '';
                    if (!checkPermission(12))
                        $edit = 'hidden';
                    if (!checkPermission(13))
                        $delete = 'hidden';
                    return "<button $edit class='btn btn-info editButton' id='" . $row->id . "'><i class='fa fa-edit'></i></button>
                        <button $delete class='btn btn-danger delete' id='" . $row->id . "'><i class='fa fa-trash'></i></button>";
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
    
        return view('admin.crud.country_prices.index')->with([
            'countries' => $countries,
            'cities' => $cities,
        ]);
    }

    public function create(Request $request){
        if ($request->ajax()){
            $returnHTML = view("admin.crud.country_prices.parts.add-form")->with('cities' ,
            Nationalitie::get())->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
        // return view('admin.crud.country_prices.create');
    }

    public function store(Request $request){
        $request->validate([
            'country_id' => 'required',
            'price' => 'required',
            'none_muslim' => 'required',
            'rent_muslim_price' => 'nullable',
            'rent_none_muslim_price' => 'nullable',
           
        ]);
        $country = new country_prices( $request->all());
        $country->Save();
      
        return redirect()->route('country-index')->with('sucess' ,'تمت بنجاح');

        
    }

    public function edit(Request $request ,$id){
        if ($request->ajax()){
            $returnHTML = view("admin.crud.country_prices.parts.edit-form")
                ->with([
                    'obj' =>country_prices::findOrFail($id),
                    'cities' => Nationalitie::get(),
                    
                ])
                ->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
        // return view('admin.crud.country_prices.update')->with('country',$country);
     }
      
        
    


    public function update(Request $request){
        $request->validate([
            'country_id' => 'nullable',
            'price' => 'nullable',
            'none_muslim' => 'nullable', 
            'rent_muslim_price' => 'nullable',
           'rent_none_muslim_price' => 'nullable',
        ]);
        $country = country_prices::findOrFail($request->id);
        $country->update($request->all());
        $country->save();
        return redirect()->route('country-index')->with('success' ,'تم التعديل بنجاح');
    }


    public function delete($id){
        
        return response()->json(country_prices::destroy($id),200);
    }
    
    public function delete_all(Request $request)
    {
        country_prices::destroy($request->id);
        return response()->json(1,200);
    }

    public function get_price($id, $religon_id, $value = null) {

        $rental = 0;
        if($value == 'rental') {
            $rental = 1;
        }
        $price = country_prices::where('country_id', $id)->first();
        if($price == null) {
            return 0;
        } else {
            if($religon_id == 1) {
                 return $rental == 1 ? $price->rent_muslim_price : $price->price;
            } else {
                return $rental == 1 ? $price->rent_none_muslim_price : $price->none_muslim;
            }
           
        }
    }
    
}
