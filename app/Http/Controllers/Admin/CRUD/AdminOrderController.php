<?php

namespace App\Http\Controllers\Admin\CRUD;

use App\Http\Traits\Upload_Files;
use App\Http\Controllers\Controller;
use App\Models\BiographyImage;
use App\Models\BiographySkill;
use App\Models\Job;
use App\Models\LanguageTitle;
use App\Models\Nationalitie;
use App\Models\Order;
use App\Models\RecruitmentOffice;
use App\Models\Religion;
use App\Models\Biography;
use App\Models\Skill;
use App\Models\SocialType;
use App\Models\User;
use App\Services\SMS\MesgatSMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;
use App\Models\Language;

class AdminOrderController extends Controller
{


    use Upload_Files, MesgatSMS;

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

    /*


     */
//     public function index(Request $request, $value = null)
//     {

//         $rental = 0 ;
//         if($value == "rental") {
//             $rental =1 ;
//         }
//         if (!checkPermission(31))
//             return view('admin.permission');


//         $admin = \App\Models\Admin::find(admin()->id());
//         $roles = $admin->roles;
//         $count = 0;
//         $passport_key = $request->passport_key;
//         $nationality_id = $request->nationality_id;
//         $social_type_id = $request->social_type;
//         $booking_status = $request->booking_status ? $request->booking_status : '';
//         $recruitment_office_id = $request->recruitment_office_id;
//         $natinalities = Nationalitie::get();
//         $recruitment_office = RecruitmentOffice::get();
//         $social_type = SocialType::get();
//         $type = $request->type;
//         $date = $request->date;
//         $delivery_to = $request->delivery_to;

//         foreach ($roles as $role) {
//             if ($role->id == 1) {
//                 ++$count;
//             }
//         }


//         if ($request->ajax()) {

//             if (admin()->user()->admin_type == 0) {
//                 if ($count > 0) {
//                     $dataTables = Order::query()->whereHas('biography', function ($q)  use ($rental) {
//                     $q->where('is_rental', $rental);
//                     })->orderBy("id", "DESC");

//                 } else {
//                     $dataTables = Order::query()->whereHas('biography', function ($q) use ($rental) {
//                     $q->where('is_rental', $rental);
//                     })->where('admin_id', $admin->id)->orderBy("id", "DESC");

//                 }
//             } else {

//                 if ($count > 0) {
//                     $dataTables = Order::query()->whereHas('biography', function ($q) use ($rental) {
//                     $q->where('is_rental', $rental);
//                     })->where("admin_id",)->orderBy("id", "DESC");

//                 } else {
//                     $dataTables = Order::query()->whereHas('biography', function ($q) use ($rental) {
//                     $q->where('is_rental', $rental);
//                     })->where('admin_id', $admin->id)->orderBy("id", "DESC");

//                 }


//             }

//             if ($request->passport_key != null) {
//                 $dataTables = $dataTables->whereHas('biography', function ($q) use ($passport_key) {
//                     $q->where('passport_number', 'like', '%' . $passport_key . '%');
//                 });
//             }

            
//            if (!is_null($delivery_to)) {
//                 $dataTables = $dataTables->where('delivery_to', $delivery_to);
//             }

//             if ($request->social_type != null) {
//                 $dataTables = $dataTables->whereHas('biography', function ($q) use ($social_type_id) {
//                     if ($social_type_id == 1) {
//                         $q->where('type_of_experience', 'new');
//                     } else if ($social_type_id == 2) {
//                         $q->where('type_of_experience', 'with_experience');


//                     }

//                 });
//             }
//             if ($request->nationality_id != null) {
//                 $dataTables = $dataTables->whereHas('biography', function ($q) use ($nationality_id) {
//                     $q->whereHas('nationalitie', function ($q2) use ($nationality_id) {
//                         $q2->where('id', $nationality_id);
//                     });
//                 });
//             }

//             if ($request->booking_status != null) {
//                 $dataTables = $dataTables->where('status', $booking_status);
//             }

//             if ($request->recruitment_office_id != null) {
// //                $dataTables = $dataTables->where('recruitment_office_id', $recruitment_office_id);
//                 $dataTables = $dataTables->whereHas('biography', function ($q) use ($recruitment_office_id) {
//                     $q->whereHas('recruitment_office', function ($q2) use ($recruitment_office_id) {
//                         $q2->where('id', $recruitment_office_id);
//                     });
//                 });
//             }
//             if ($request->type != null) {
// //                $dataTables = $dataTables->where('type', $type);
//                 $dataTables = $dataTables->whereHas('biography', function ($q) use ($type) {
//                     if ($type == 'admission') {
//                         $q->where('type', 'admission');
//                     } else if ($type == 'transport') {
//                         $q->where('type', 'transport');


//                     }

//                 });
//             }
//             if ($date != null) {
//                 $dataTables = $dataTables->whereDate('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->whereDate('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])));
//             }
//             if ($rental == 1) {
//                 $dataTables = $dataTables->edit('delivery_to', function ($row) {
//                     return $row->delivery_to ? 'توصيل' : 'بدون توصيل';
//                 });
//             }
//             return DataTables::of($dataTables)
//                 ->editColumn('image', function ($row) {
//                     $cv = (isset($row->biography->cv_file)) ? $row->biography->cv_file : "";
//                     return ' <img src="' .url('frontend/images/users/' . $cv) . '" class="rounded"
//                         style="height:60px;width:60px;object-fit: contain;"
//                              onclick="window.open(this.src)">';
//                 })
//                 ->editColumn('created_at', function ($row) {
//                     return date('Y/m/d', strtotime($row->created_at));
//                 })
//                 ->editColumn('status', function ($row) {
//                     if ($row->status == "new") {
//                         return "غير محجوز";
//                     } elseif ($row->status == "under_work") {
//                         return "حجز السيرة الذاتيه";
//                     } elseif ($row->status == "contract") {
//                         return "تم التعاقد";
//                     } elseif ($row->status == "musaned") {
//                         return "تم الربط في مساند ";
//                     } elseif ($row->status == "traning") {
//                         return "تحت الاجراء و التدريب";
//                     } elseif ($row->status == "visa") {
//                         return " ختم التاشيره ";
//                     } elseif ($row->status == "finished") {
//                         return "وصول العمالة";
//                     } else {
//                         return "ملغى";
//                     }

//                 })
               
//                 ->addColumn('nationalitie_id', function ($row) {
//                     return (isset($row->biography->nationalitie?->title)) ? $row->biography->nationalitie?->title : "غير محدد ";
//                 })
//                 ->addColumn('passport_number', function ($row) {
//                     return (isset($row->biography->passport_number)) ? $row->biography->passport_number : "غير محدد ";
//                 })

//                 ->addColumn('user', function ($row) {
//                     return (isset($row->user->name)) ? $row->user->name : "غير محدد ";
//                 })
//                 ->addColumn('phone', function ($row) {
//                     return (isset($row->user->phone)) ? "0" . $row->user->phone : "غير محدد ";
//                 })
//                 ->addColumn('admin', function ($row) {
//                     return (isset($row->admin->name)) ? $row->admin->name : "غير محدد ";
//                 })
//                 ->editColumn('recruitment_office_id', function ($row) {
//                     return $row->biography->recruitment_office?->title;
//                 })
//                 ->editColumn('type', function ($row) {
//                     if ($row->biography->type == 'admission')
//                         return 'استقدام ';
//                     else
//                         return 'نقل خدمات  ';
//                 })
//                 ->addColumn('actions', function ($row) use ($rental) {
//                     $status = '';
//                     $delete = '';
//                     $back = 'hidden';
//                     if($rental == 1) {
//                         $back = '';
//                     }


//                     if ($row->status == "new" || $row->status == "under_work") {
//                         $status = "contract";
//                         $text = "إتمام التعاقد";
//                         return "
//                     <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> " . $text . "  </a>
//                      <a  $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i> </a>
//                       <a $back data-status='new' style='margin-right: 10px;' href='#'
//                           class='btn btn-warning  update-status mr-2'
//                           id='" . $row->id . "'><i class='fa fa-arrow-left'></i>
//                       </a>";


//                     } elseif ($row->status == "contract") {
//                         $status = "musaned";
//                         $text = "الربط في مساند";
//                         return "
//                     <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> " . $text . "  </a>
//                    <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2'
//                        id='" . $row->id . "'><i class='fa fa-trash'></i> </a> <a $back data-status='new'
//                        style='margin-right: 10px;' href='#' class='btn btn-warning  update-status mr-2'
//                        id='" . $row->id . "'><i class='fa fa-arrow-left'></i>
//                    </a>";
//                     } elseif ($row->status == "musaned") {
//                         $status = "traning";
//                         $text = "تحت الاجراء";
//                         return "
//                     <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> " . $text . "  </a>
//                    <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2'
//                        id='" . $row->id . "'><i class='fa fa-trash'></i> </a> <a $back data-status='new'
//                        style='margin-right: 10px;' href='#' class='btn btn-warning  update-status mr-2'
//                        id='" . $row->id . "'><i class='fa fa-arrow-left'></i>
//                    </a>";
//                     } elseif ($row->status == "traning") {
//                         $status = "visa";
//                         $text = "ختم التأشيرة";
//                         return "
//                     <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> " . $text . "  </a>
//                    <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2'
//                        id='" . $row->id . "'><i class='fa fa-trash'></i> </a> <a $back data-status='new'
//                        style='margin-right: 10px;' href='#' class='btn btn-warning  update-status mr-2'
//                        id='" . $row->id . "'><i class='fa fa-arrow-left'></i>
//                    </a>";
//                     } elseif ($row->status == "visa") {
//                         $status = "finished";
//                         $text = "وصول العمالة";
//                         return "
//                     <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> " . $text . "  </a>
//                    <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2'
//                        id='" . $row->id . "'><i class='fa fa-trash'></i> </a> <a $back data-status='new'
//                        style='margin-right: 10px;' href='#' class='btn btn-warning  update-status mr-2'
//                        id='" . $row->id . "'><i class='fa fa-arrow-left'></i>
//                    </a>";
//                     } elseif ($row->status == "finished") {
//                         return " <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2'
//                             id='" . $row->id . "'><i class='fa fa-trash'></i> </a><a $back data-status='new'
//                             style='margin-right: 10px;' href='#' class='btn btn-warning  update-status mr-2'
//                             id='" . $row->id . "'><i class='fa fa-arrow-left'></i>
//                         </a>";


//                     } else {
//                         return "<a  $delete style='margin-right: 10px;' href='#' class='btn btn-danger  delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i> </a>";


//                     }



//                 })
//                 ->rawColumns(['image', 'created_at', 'status', 'nationalitie_id', 'passport_number',
//                      'user', 'admin', 'recruitment_office_id', 'type', 'actions' ,'delivery_to'
//                 ])->make(true);
                
//         }
//         return view('admin.crud.order.admin', compact('natinalities', 'nationality_id', 'social_type', 'social_type_id', 'booking_status', 'recruitment_office', 'recruitment_office_id', 'type','date', 'value','delivery_to'));
//     }
public function index(Request $request, $value = null)
{
    $rental = 0;
    if ($value === "rental") {
        $rental = 1;
    }

    if (!checkPermission(31)) {
        return view('admin.permission');
    }

    $admin = \App\Models\Admin::find(admin()->id());
    $roles = $admin->roles;
    $count = $roles->where('id', 1)->count();

    $passport_key = $request->passport_key;
    $nationality_id = $request->nationality_id;
    $social_type_id = $request->social_type;
    $booking_status = $request->booking_status ?? '';
    $recruitment_office_id = $request->recruitment_office_id;
    $delivery_to = $request->delivery_to;
    $type = $request->type;
    $date = $request->date;

    $natinalities = Nationalitie::all();
    $recruitment_office = RecruitmentOffice::all();
    $social_type = SocialType::all();

    if ($request->ajax()) {
        $dataTables = Order::query()
            ->whereHas('biography', function ($q) use ($rental) {
                $q->where('is_rental', $rental);
            })
            ->when($count == 0 || $admin->admin_type != 0, function ($query) use ($admin) {
                return $query->where('admin_id', $admin->id);
            })
            ->orderByDesc('id');

        // Filters
        if (!empty($passport_key)) {
            $dataTables->whereHas('biography', function ($q) use ($passport_key) {
                $q->where('passport_number', 'like', '%' . $passport_key . '%');
            });
        }

        if (!is_null($delivery_to)) {
            $dataTables->where('delivery_to', $delivery_to);
        }

        if (!empty($social_type_id)) {
            $dataTables->whereHas('biography', function ($q) use ($social_type_id) {
                $q->where('type_of_experience', $social_type_id == 1 ? 'new' : 'with_experience');
            });
        }

        if (!empty($nationality_id)) {
            $dataTables->whereHas('biography.nationalitie', function ($q) use ($nationality_id) {
                $q->where('id', $nationality_id);
            });
        }

        if (!empty($booking_status)) {
            $dataTables->where('status', $booking_status);
        }

        if (!empty($recruitment_office_id)) {
            $dataTables->whereHas('biography.recruitment_office', function ($q) use ($recruitment_office_id) {
                $q->where('id', $recruitment_office_id);
            });
        }

        if (!empty($type)) {
            $dataTables->whereHas('biography', function ($q) use ($type) {
                $q->where('type', $type);
            });
        }

        if (!empty($date)) {
            [$startDate, $endDate] = explode(' - ', $date);
            $dataTables->whereBetween('created_at', [
                date('Y-m-d', strtotime($startDate)),
                date('Y-m-d', strtotime($endDate)),
            ]);
        }

        $dataTables = DataTables::of($dataTables)
            ->editColumn('image', fn($row) => '<img src="' . url('frontend/images/users/' . ($row->biography->cv_file ?? '')) . '" class="rounded" style="height:60px;width:60px;object-fit: contain;" onclick="window.open(this.src)">')
            ->editColumn('created_at', fn($row) => date('Y/m/d', strtotime($row->created_at)))
            ->editColumn('status', function ($row) {
                return match ($row->status) {
                    "new" => "غير محجوز",
                    "under_work" => "حجز السيرة الذاتيه",
                    "contract" => "تم التعاقد",
                    "musaned" => "تم الربط في مساند ",
                    "traning" => "تحت الاجراء و التدريب",
                    "visa" => "ختم التاشيره",
                    "finished" => "وصول العمالة",
                    default => "ملغى"
                };
            })
            ->addColumn('nationalitie_id', fn($row) => $row->biography->nationalitie->title ?? 'غير محدد')
            ->addColumn('passport_number', fn($row) => $row->biography->passport_number ?? 'غير محدد')
            ->addColumn('user', fn($row) => $row->user->name ?? 'غير محدد')
            ->addColumn('phone', fn($row) => isset($row->user->phone) ? '0' . $row->user->phone : 'غير محدد')
            ->addColumn('admin', fn($row) => $row->admin->name ?? 'غير محدد')
            ->editColumn('recruitment_office_id', fn($row) => $row->biography->recruitment_office->title ?? 'غير محدد')
            ->editColumn('type', fn($row) => $row->biography->type === 'admission' ? 'استقدام' : 'نقل خدمات')
            ->addColumn('actions', function ($row) use ($rental) {
                $status = '';
                $delete = '';
                $back = 'hidden';
                if ($rental == 1) {
                    $back = '';
                }

                if ($row->status == "new" || $row->status == "under_work") {
                    $status = "contract";
                    $text = "إتمام التعاقد";
                    return "
                        <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> $text </a>
                        <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>
                        <a $back data-status='new' style='margin-right: 10px;' href='#' class='btn btn-warning update-status mr-2' id='" . $row->id . "'><i class='fa fa-arrow-left'></i></a>";
                } elseif ($row->status == "contract") {
                    $status = "musaned";
                    $text = "الربط في مساند";
                    return "
                        <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> $text </a>
                        <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>
                        <a $back data-status='new' style='margin-right: 10px;' href='#' class='btn btn-warning update-status mr-2' id='" . $row->id . "'><i class='fa fa-arrow-left'></i></a>";
                } elseif ($row->status == "musaned") {
                    $status = "traning";
                    $text = "تحت الاجراء";
                    return "
                        <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> $text </a>
                        <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>
                        <a $back data-status='new' style='margin-right: 10px;' href='#' class='btn btn-warning update-status mr-2' id='" . $row->id . "'><i class='fa fa-arrow-left'></i></a>";
                } elseif ($row->status == "traning") {
                    $status = "visa";
                    $text = "ختم التأشيرة";
                    return "
                        <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> $text </a>
                        <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>
                        <a $back data-status='new' style='margin-right: 10px;' href='#' class='btn btn-warning update-status mr-2' id='" . $row->id . "'><i class='fa fa-arrow-left'></i></a>";
                } elseif ($row->status == "visa") {
                    $status = "finished";
                    $text = "وصول العمالة";
                    return "
                        <a href='#' $status data-status='" . $status . "' class='btn btn-info update-status' id='" . $row->id . "'> $text </a>
                        <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>
                        <a $back data-status='new' style='margin-right: 10px;' href='#' class='btn btn-warning update-status mr-2' id='" . $row->id . "'><i class='fa fa-arrow-left'></i></a>";
                } elseif ($row->status == "finished") {
                    return "
                        <a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>
                        <a $back data-status='new' style='margin-right: 10px;' href='#' class='btn btn-warning update-status mr-2' id='" . $row->id . "'><i class='fa fa-arrow-left'></i></a>";
                } else {
                    return "<a $delete style='margin-right: 10px;' href='#' class='btn btn-danger delete mr-2' id='" . $row->id . "'><i class='fa fa-trash'></i></a>";
                }
            })
            ;

        // Only add delivery_to column when rental == 1
        if ($rental == 1) {
            $dataTables->addColumn('delivery_to', function ($row) {
                return $row->delivery_to ? 'توصيل' : 'بدون توصيل';
            });
        }

        $rawColumns = [
            'image', 'created_at', 'status', 'nationalitie_id', 'passport_number',
            'user', 'admin', 'recruitment_office_id', 'type', 'actions'
        ];
        if ($rental == 1) {
            $rawColumns[] = 'delivery_to';
        }

        return $dataTables->rawColumns($rawColumns)->make(true);
    }

    return view('admin.crud.order.admin', compact(
        'natinalities', 'nationality_id', 'social_type', 'social_type_id',
        'booking_status', 'recruitment_office', 'recruitment_office_id', 'type',
        'date', 'value', 'delivery_to' ,'rental'
    ));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    }

        /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $value = null)
    {
        $order = Order::where("id", $id)->first();
        Order::where("id", $id)->update(["status" => "canceled"]);
        Biography::where("id", $order->biography_id)->update(["status" => "new", "admin_id" => null, "user_id" => null]);
        return response()->json("ok", 200);
    }//end fun
//    public function update(Request $request, $id)
//    {
//        $order = Order::where("id", $id)->first();
//        Order::where("id", $id)->update(["status" => "finished"]);
//        Biography::where("id", $order->biography_id)->update(["status" => "finished"]);
//        $phone=$order->user->phone;
//        $country=substr($biograpy->nationalitie->title??'', 0, 5);
//        $admin=$order->admin->name??'';
//        $msg="عزيزي العميل تم إتمام التعاقد الخاص بك برقم حجز
//( $biograpy->passport_number .$country  )
//الرجاء المتابعه مع
//( $admin )";
//
//        $this->sendSms($phone,$msg);
//        return response()->json("ok", 200);
//    }//end fun

/**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $value = null)
    {
        $order = Order::where("id", $id)->first();
        Order::where("id", $id)->update(["status" => $request->status]);
       
        if($request->status == 'new' && $value == 'rental') {
            Order::where("id", $id)->update(["status" => "canceled"]);
        }
        Biography::where("id", $order->biography_id)->update(["status" => $request->status]);
        $biography = Biography::find($order->biography_id);
        $status = [];
        $country = substr($biograpy->nationalitie->title ?? '', 0, 5);
        $admin = $order->admin->name ?? '';

        $msg = "عزيزي العميل تم قبول التعاقد الخاص بك برقم حجز
( $biography->passport_number .$country  )
الرجاء المتابعه مع
( $admin )";
        $status['contract'] = $msg;
        $status['musaned'] = "تم ربط طلبك استقدامك مع مساند بنجاح ";
        $status['traning'] = "اصبح طلبك استقدامك فى مرحلة الاجراءات بنجاح ";
        $status['visa'] = "اصبح طلبك استقدامك فى مرحلة التأشيرة بنجاح ";
        $status['finished'] = "تم وصول العمالة بنجاح ";
        $status['canceled'] = "تم رفض  طلب استقدامك بنجاح ";


        if ($request->status == "contract" or $request->status == "musaned" or $request->status == "traning" or $request->status == "visa" or $request->status == "finished" or $request->status == "canceled") {

            // $user = User::find($order->user_id);
            // if (!empty($user)) {
            //     $this->sendSMS($user->phone, $status[$request->status]);
            // }
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete_all(Request $request)
    {

    }


}//end
