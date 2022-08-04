<?php

namespace App\Http\Controllers;

use App\Models\OverBurden;
use Illuminate\Support\Facades\DB;
use App\Models\People;
use Yajra\Datatables\Datatables;

class OverBurdenController extends Controller
{
    public function anyData()
    {

        return Datatables::of(People::query())
        ->addColumn('action', function ($model) {
            return '<a class="text-decoration-none" href="/admin/people/' . $model->NIK_number . '"><button class="btn btn-secondary py-1 px-2 mr-1"><i class="icon-copy bi bi-eye-fill"></i></button></a>
            <a class="text-decoration-none" href="/admin/' . $model->id . '/edit"><button class="btn btn-warning py-1 px-2 mr-1"><i class="icon-copy dw dw-pencil"></i></button></a>
            <button onclick="myFunction(' . $model->id . ')"  type="button" class="btn btn-danger  py-1 px-2"><i class="icon-copy dw dw-trash"></i></button>';
        })

        ->make(true);
            
    }

    public function index()
    {
        return view('admin.over-burden.index', [
            'title'         => 'People'
        ]);
    }
}
