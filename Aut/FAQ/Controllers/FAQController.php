<?php

namespace Aut\FAQ\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Aut\FAQ\Models\FAQ;
use Aut\FAQ\Models\CategoryFAQ;

use Aut\FAQ\ApiResources\FAQApiResources;
use Aut\FAQ\ApiResources\CategoryFAQApiResources;

class FAQController extends Controller
{
    public function index(Request $request)
    {
        $query = FAQ::query();

        if($request->inpute('category_f_a_q_id')){

            $query->where('category_f_a_q_id',$category_f_a_q_id);
        }
    $data = FAQApiResources::collection($query->paginate());

    $info = $data->response($request)->getData();
        return view('testfaq', compact('info'));
    }


