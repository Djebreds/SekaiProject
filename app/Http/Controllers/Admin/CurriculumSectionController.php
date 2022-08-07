<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCurriculum;
use App\Models\CourseCurriculumSection;
use Illuminate\Http\Request;
use DataTables;

class CurriculumSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request, $masterclass_slug)
    {
        $curriculum_sections = CourseCurriculumSection::with('course_masterclasses')->whereHas('course_masterclasses', function ($query) use ($masterclass_slug) {
            $query->where('masterclass_slug', $masterclass_slug);
        })->first();

        if ($request->ajax()) {
            $curriculum_sections = CourseCurriculumSection::with(['course_curriculums', 'course_masterclasses']);
            return Datatables::of($curriculum_sections)
                ->addIndexColumn()
                ->addColumn('action', function ($curriculum_sections) {
                    $actionBtn =  '
                    <div class="d-flex gap-2">
                    <a href=' . route('admin.masterclass.curriculum-section.edit', ['masterclass' => $curriculum_sections->course_masterclasses->masterclass_slug, 'curriculum_section' => $curriculum_sections->curriculum_section_id]) . ' class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    <a href=' . route('admin.masterclass.curriculum-section.edit', ['masterclass' => $curriculum_sections->course_masterclasses->masterclass_slug, 'curriculum_section' => $curriculum_sections->curriculum_section_id]) . ' class="btn btn-primary"><i class="fas fa-book-open"></i></a>
                    <form method="POST" action=' . route('admin.masterclass.curriculum-section.destroy', ['masterclass' => $curriculum_sections->course_masterclasses->masterclass_slug, 'curriculum_section' => $curriculum_sections->curriculum_section_id]) . ' id="data-' . $curriculum_sections->curriculum_section_id . '">
                    ' . csrf_field() . '
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-danger" onclick="confirmDelete(' . '\'' . $curriculum_sections->curriculum_section_id . '\'' . ')" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.curriculumSection.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
