<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



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
            $students = User::select('id', 'full_name', 'email', 'username', 'status', 'created_at')->whereHas('roles', function ($query) {
                $query->where('role_name', 'Student');
            });

            return Datatables::of($students)
                ->addIndexColumn()
                ->addColumn('action', function ($students) {
                    return '
                    <div class="d-flex gap-2">
                    <a href=' . route('admin.students.show', $students->username) . ' class="btn btn-info"><i class="fas fa-search"></i></a>
                    <a href="' . route('admin.students.edit', $students->username) . '" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
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
                ->addColumn('No', function ($students) {
                    $students = 1;
                    $students++;
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

        $validate = $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|min:3|max:50',
            'email' => 'required|email:dns|unique:users|max:255',
            'username' => 'required|string|unique:users|max:50',
            'phone_number' => 'required|numeric|min:10',
            'password' => 'required|string|min:8|confirmed',
            'job_title' => 'nullable|string|min:3|max:50 ',
            'picture' => 'required|image|file|mimes:jpg,png,jpeg|max:2024',
            'about' => 'nullable|string|regex:/^[a-zA-Z\s]+$/|min:3|max:400',
            'twitter' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'instagram' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'facebook' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'linkedin' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'youtube' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
        ]);


        $request->file('picture')->store('public/admin/students/uploaded');

        User::create([
            'full_name' => $validate['name'],
            'username' => ucfirst(Str::slug($validate['username'])),
            'password' => Hash::make($validate['password']),
            'phone_number' => $validate['phone_number'],
            'email' => $validate['email'],
            'job_title' => $validate['job_title'],
            'profile_picture' => $request->file('picture')->hashName(),
            'about' => $validate['about'],
            'social_twitter' => $validate['twitter'],
            'social_instagram' => $validate['instagram'],
            'social_facebook' => $validate['facebook'],
            'social_linkedin' => $validate['linkedin'],
            'social_youtube' => $validate['youtube'],
            'email_verified_at' => Carbon::now(),
            'is_email_verified' => true,
            'status' => 'active'
        ]);

        return redirect()->route('admin.students.index')->with('message', 'New student has beed created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::where('username', $username)->whereHas('roles', function ($query) {
            $query->where('role_name', 'Student');
        })->first();
        if (!$user) {
            abort(404);
        }
        return view('admin.students.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        $user = User::where('username', $username)->whereHas('roles', function ($query) {
            $query->where('role_name', 'Student');
        })->first();
        if (!$user) abort(404);
        return view('admin.students.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username)
    {
        $validate = $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|min:3|max:50',
            'email' => 'required|email:dns|unique:users|max:255',
            'username' => 'required|string|unique:users|max:50',
            'phone_number' => 'required|numeric|min:10',
            'password' => 'required|string|min:8|confirmed',
            'job_title' => 'nullable|string|min:3|max:50 ',
            'picture' => 'image|file|mimes:jpg,png,jpeg|max:2024',
            'about' => 'nullable|string|regex:/^[a-zA-Z\s]+$/|min:3|max:400',
            'twitter' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'instagram' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'facebook' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'linkedin' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
            'youtube' => 'nullable|string|regex:/^https:\/\/\w+(\.\w+)*(:[0-9]+)?\/?$/|max:50',
        ]);

        if ($request->file('picture')) {
            Storage::delete('storage/admin/students/uploaded/' . $request->oldPicture);
            $request->file('picture')->store('uploaded');
            $validate['picture'] = $request->file('picture')->hashName();
        } else {
            $validate['picture'] = $request->oldPicture;
        }

        User::where('username', $username)->update([
            'full_name' => $validate['name'],
            'username' => ucfirst(Str::slug($validate['username'])),
            'password' => Hash::make($validate['password']),
            'phone_number' => $validate['phone_number'],
            'email' => $validate['email'],
            'job_title' => $validate['job_title'],
            'profile_picture' => $validate['picture'],
            'about' => $validate['about'],
            'social_twitter' => $validate['twitter'],
            'social_instagram' => $validate['instagram'],
            'social_facebook' => $validate['facebook'],
            'social_linkedin' => $validate['linkedin'],
            'social_youtube' => $validate['youtube'],
        ]);

        return redirect()->route('admin.students.index')->with('message', 'Student has been updated!');
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
