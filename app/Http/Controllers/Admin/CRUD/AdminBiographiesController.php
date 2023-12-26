<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Traits\Upload_Files;
use App\Http\Controllers\Controller;
use App\Models\BiographyImage;
use App\Models\BiographySkill;
use App\Models\Job;
use App\Models\LanguageTitle;
use App\Models\Nationalitie;
use App\Models\RecruitmentOffice;
use App\Models\Religion;
use App\Models\Biography;
use App\Models\City;
use App\Models\Skill;
use App\Models\SocialType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Models\Language;
use App\Models\User;
use App\Models\biograpies_exp;

class AdminBiographiesController extends Controller
{

    use Upload_Files;

    // use CheckPermission;


    public function __construct()
    {
        /* $this->middleware([('permission:siteTexts index,admin')])->only(['index']);*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!checkPermission(18))
            return view('admin.permission');

        $admin = \App\Models\Admin::find(admin()->id());
        $roles = $admin->roles;
        $count = 0;
        $passport_key = $request->passport_key;
        $nationality_id = $request->nationality_id;
        $recruitment_office_id = $request->recruitment_office_id;
        $social_type_id = $request->social_type;
        $booking_status = $request->booking_status ? $request->booking_status : '';

        $natinalities = Nationalitie::get();
        $recruitment_office = RecruitmentOffice::get();
        $social_type = SocialType::get();
        $type = $request->type;
        $date = $request->date;


        if ($request->ajax()) {
            $biographies = Biography::query()->where("order_type", "normal")->orderBy("id", "DESC");

            if ($request->passport_key != null) {
                $biographies = $biographies->where('passport_number', $passport_key);

            }

            if ($request->social_type != null) {

                if ($social_type_id == 1) {
                    $biographies = $biographies->where('type_of_experience', 'new');

                } else if ($social_type_id == 2) {
                    $biographies = $biographies->where('type_of_experience', 'with_experience');


                }
            }

            if ($request->nationality_id != null) {
                $biographies = $biographies->where('nationalitie_id', $nationality_id);

            }
            if ($request->recruitment_office_id != null) {
                $biographies = $biographies->where('recruitment_office_id', $recruitment_office_id);

            }
            if ($request->booking_status != null) {
                $biographies = $biographies->where('status', $booking_status);
            }
            if ($request->type != null) {
                $biographies = $biographies->where('type', $type);
            }
            if ($date != null) {
                $biographies = $biographies->whereDate('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->whereDate('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])));
            }
            return DataTables::of($biographies)
                ->editColumn('image', function ($row) {
                    return ' <img src="' . url('frontend/images/users/'.$row->cv_file) . '" class="rounded"
                        style="height:60px;width:60px;"
                             onclick="window.open(this.src)">';
                })
                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d', strtotime($row->created_at));
                })
                ->addColumn('delete_all', function ($row) {
                    return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all' id='" . $row->id . "'>";
                })
                ->editColumn('status', function ($row) {
                    if ($row->status == "new") {
                        return "غير محجوز";
                    } elseif ($row->status == "under_work") {
                        return "حجز السيرة الذاتيه";
                    } elseif ($row->status == "contract") {
                        return "تم التعاقد";
                    } elseif ($row->status == "musaned") {
                        return "تم الربط في مساند ";
                    } elseif ($row->status == "traning") {
                        return "تحت الاجراء و التدريب";
                    } elseif ($row->status == "visa") {
                        return " ختم التاشيره ";
                    } elseif ($row->status == "finished") {
                        return "وصول العمالة";
                    } else {
                        return "ملغى";
                    }

                })
                ->editColumn('nationalitie_id', function ($row) {
                    return $row->nationalitie->title;
                })
                ->editColumn('type_of_experience', function ($row) {
                    if ($row->type_of_experience == 'new') {
                        return 'قادم جديد';
                    } else {
                        return 'لديه خبرة سابقة';
                    }
                    //return $row->nationalitie->type_of_experience;
                })
                ->editColumn('recruitment_office_id', function ($row) {
                    return $row->recruitment_office->title;
                })
                ->editColumn('type', function ($row) {
                    if ($row->type == 'admission')
                        return 'استقدام ';
                    else
                        return 'نقل خدمات  ';
                })
                ->addColumn('actions', function ($row) {
                    $edit = '';
                    $delete = '';
                    if (!checkPermission(20))
                        $edit = 'hidden';
                    if (!checkPermission(21))
                        $delete = 'hidden';
                    return "<a $edit href='" . route('biographies.edit', $row->id) . "'  class='btn btn-info editButton' id='" . $row->id . "'> <i class='fa fa-edit'></i></button>
                   <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i> </a>";
                })->rawColumns(['actions', 'image', 'delete_all', 'nationalitie_id', 'type_of_experience', 'recruitment_office_id', 'type', 'status','date'])->make(true);
        }
        return view('admin.crud.biographies.index', compact('natinalities', 'nationality_id', 'social_type', 'social_type_id', 'booking_status', 'recruitment_office', 'recruitment_office_id', 'type','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          
            'recruitment_office_id' => 'nullable',
            'recruitment_price' => 'nullable',
            'nationalitie_id' => 'nullable',
            'language_title_id' => 'nullable',
            'display' => 'nullable' ,
            'religion_id' => 'nullable',
            'job_id' => 'nullable',
            'social_type_id' => 'nullable',
            'age' => 'nullable',
            'salary' => 'nullable',
            'biography_number' => 'nullable',
            'passport_number' => 'nullable|max:255|unique:biographies,passport_number',
            'skills' => 'nullable|array',
            'certificates.*' => 'nullable|file|image',
            'type' => 'nullable',
            'reasonservices' => 'nullable',
            'periodservices' => 'nullable',
            'transfer_price' => 'nullable',
            'type_of_experience' => 'nullable',
            'transfer_price' => 'nullable' ,
            'name' => 'nullable',
            'contract_period' => 'nullable' ,
            'education' => 'nullable' ,
            'passport_start' => 'nullable' ,
            'passport_end' => 'nullable' ,
            'passport_city' => 'nullable' ,
            'height' => 'nullable' ,
            'weight' => 'nullable' ,
            'no_of_childrens' => 'nullable' ,
            'birthdate' => 'nullable' ,
            'birth_country' => 'nullable' ,
            'phone_no' => 'nullable' ,
            'cv_file' => 'nullable|image|mimes:jpeg,png,jpg',
          
        ]);

        $data = $request->except(['skills', 'images','exp_job_id' ,'exp_city_id' ,'exp_period']);


      
        // $data["cv_file"] = $this->uploadFiles('biographies', $request->file('cv_file'), null);
        $image = $request->file('cv_file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('frontend/images/users/', $imageName);


        $biography = Biography::create($data);
        $biography->cv_file = $imageName;
        $biography->save();
        //skills
        if (isset($request->skills)) {
            foreach ($request->skills as $index => $skillid) {
                BiographySkill::create([
                    'biography_id' => $biography->id,
                    'skill_id' => $skillid,
                ]);
            }
        }

        //experince
        if ($request->exp_job_id) {
            $exp = new biograpies_exp();
            $exp->exp_job_id = $request->exp_job_id;
            $exp->exp_city_id = $request->exp_city_id;
            $exp->exp_period = $request->exp_period;
            $exp->biography_id = $biography->id;
            $exp->save();
            
       }

        //biography galary
        if (isset($request->images)) {
            foreach ($request->images as $index => $single_image) {
                BiographyImage::create([
                    'biography_id' => $biography->id,
                    'image' => $this->uploadFiles('biographies', $single_image, null)
                ]);
            }
        }


        return response()->json([], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = [
            'languages' => Language::where('is_active', 'active')->get(),
            'recruitment_office' => RecruitmentOffice::get(),
            'nationalitie' => Nationalitie::get(),
            'religion' => Religion::get(),
            'job' => Job::get(),
            'social_type' => SocialType::get(),
            'skills' => Skill::get(),
            'language_title' => LanguageTitle::get(),
            'cities' => City::get(),
            'users' => User::get(),
        ];
        return view('admin.crud.biographies.create', $data);
    }//end fun

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $biography = Biography::with('images', 'skills')->findOrFail($id);


        $images = [];
        if (!is_null($biography->images()->get())) {
            foreach ($biography->images()->get() as $index => $image) {
                $images[$index]['id'] = $image->id;
                $images[$index]['src'] = get_file($image->image);
            }
        }

        $data = [
            'languages' => Language::where('is_active', 'active')->get(),
            'recruitment_office' => RecruitmentOffice::get(),
            'nationalitie' => Nationalitie::get(),
            'religion' => Religion::get(),
            'job' => Job::get(),
            'social_type' => SocialType::get(),
            'skills' => Skill::get(),
            'language_title' => LanguageTitle::get(),
            'cities' => City::get(),
//            'skill_ids' => $skill_ids,
            'images' => $images,
            'biography' => $biography,
      
        ];
        return view('admin.crud.biographies.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cv_file' => 'nullable',
            'recruitment_office_id' => 'nullable',
            'nationalitie_id' => 'nullable',
            'language_title_id' => 'nullable',
            'religion_id' => 'nullable',
            'recruitment_price' => 'nullable',
            'job_id' => 'nullable',
            'social_type_id' => 'nullable',
            'age' => 'nullable',
            'salary' => 'nullable',
            'biography_number' => 'nullable',
            'passport_number' => 'nullable|max:255|unique:biographies,passport_number,' . $id,
            'skills' => 'nullable|array',
            'certificates.*' => 'nullable|file|image',
            'type' => 'nullable',
            'reasonservices' => 'nullable',
            'periodservices' => 'nullable',
            'transfer_price' => 'nullable',
            'contract_period' => 'nullable',
            'education' => 'nullable',
            'passport_start' => 'nullable',
            'passport_end' => 'nullable',
            'passport_city' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'no_of_childrens' => 'nullable',
            'birthdate' => 'nullable',
            'birth_country' => 'nullable',
            'phone_no' => 'nullable',
        //    'cv_file' => 'required|image|mimes:jpeg,png,jpg',
            'display' => 'nullable',
        ]);
    
        try {
            DB::beginTransaction();
    
            $biography = Biography::findOrFail($id);
            $data = $request->except(['skills', 'images', 'cv_file', '_token', '_method', 'old','exp_job_id' ,'exp_city_id' ,'exp_period']);
    
            if ($request->hasFile('cv_file')) {
               
               $image = $request->file('cv_file');
               $imageName = time() . '.' . $image->getClientOriginalExtension();
               $image->storeAs('frontend/images/users/', $imageName);

               $data['cv_file'] = $imageName;
            }
    
            $biography->fill($data);
            $biography->save();
    
            // Update skills
            $skills = $request->input('skills', []);
            $biography->skills()->sync($skills);
    
            // Update images
            $oldImages = $request->input('old', []);
            BiographyImage::where('biography_id', $id)
                ->whereNotIn('id', $oldImages)
                ->delete();
    
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $single_image) {
                    $imagePath = $this->uploadFiles('biographies', $single_image, null);
                    BiographyImage::create([
                        'biography_id' => $id,
                        'image' => $imagePath
                    ]);
                }
            }
    
            //Update experience
            if ($request->filled('exp_job_id')) {
                $exp = new biograpies_exp();
                $exp->exp_job_id = $request->input('exp_job_id');
                $exp->exp_city_id = $request->input('exp_city_id');
                $exp->exp_period = $request->input('exp_period');
                $exp->biography_id = $biography->id;
                $exp->save();
            }
    
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            // Log the exception or return an error response
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    
        return response()->json([], 200);
    }//end fun

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete_all(Request $request)
    {
        Biography::destroy($request->id);
        return response()->json(1, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(Biography::destroy($id), 200);
    }


}//end
