<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $students = User::select('full_name', 'email', 'username', 'status', 'created_at')->whereHas('roles', function ($query) {
                $query->where('role_name', 'Student');
            });

            return Datatables::of($students)
                ->addIndexColumn()
                ->addColumn('action', function ($students) {
                    return '
                    <div class="d-flex gap-2">
                    <a href=' . "/" . ' class="btn btn-info"><i class="fas fa-search"></i></a>
                    <a href=' . "/" . ' class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>';
                })
                ->addColumn('status', function ($students) {
                    switch ($students->status) {
                        case 'active':
                            return '<span class="badge rounded-pill bg-success">Active</span>';
                            break;
                        case 'deactivated':
                            return '<span class="badge rounded-pill bg-secondary">Deactivated</span>';
                            break;
                        default:
                            return '<span class="badge rounded-pill bg-warning">Inactive</span>';
                            break;
                    }
                })
                ->editColumn('created_at', function ($students) {
                    $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $students->created_at)->format('d-M-Y H:i');
                    return $formatedDate;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('admin.students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
