<?php

namespace App\Http\Controllers;

use App\DataTables\PostDatatable;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostDatatableController extends Controller
{
    public function index(PostDatatable $dataTable)
    {
        return $dataTable->render('datatable.post-datatable');
    }

    public function users(Request $request)
    {
        if ($request->ajax()) {
            $data = User::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status) {
                        return '<span class="badge bg-primary">Active</span>';
                    } else {
                        return '<span class="badge bg-danger">Deactive</span>';
                    }
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('status') == '0' || $request->get('status') == '1') {
                        $instance->where('status', $request->get('status'));
                    }
                    if (!empty($request->get('search'))) {
                        $instance->where(function ($w) use ($request) {
                            $search = $request->get('search');
                            $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns(['status'])
                ->make(true);
        }

        return view('datatable.user-datatable');
    }
}
