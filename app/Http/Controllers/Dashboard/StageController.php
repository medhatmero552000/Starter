<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StageRequest;
use App\Models\Dashboard\Stage;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\error;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    private const PATH = "dashboard.Stages.";

  public function index()
{
    $locale = LaravelLocalization::getCurrentLocale();

    $items = Stage::with(['translations', 'createdByAdmin', 'updatedByAdmin'])
        ->whereHas('translations', function ($query) use ($locale) {
            $query->where('locale', $locale);
        })
        ->latest()
        ->paginate(config('pagenation.count'));

    return view(self::PATH . 'index', compact('items'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view(self::PATH . 'create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */




public function store(StageRequest $request)
{
    $data = $request->validated();

    try {
        foreach ($data['stages'] as $stageData) {
            $stageData['created_by'] = auth()->id();
            $stageData['updated_by'] = auth()->id();

            Stage::create($stageData);
        }

        Alert::toast(__('keywords.add_successfully'), 'success')
            ->position('top-end')
            ->autoClose(3000);

        return to_route('admin.stages.index');
    } catch (QueryException $e) {
        if ($e->errorInfo[1] == 1062) { // Duplicate entry
            Alert::toast('هذا الحقل موجود مسبقًا (تكرار في الاسم أو السلاج)', 'error')
                ->position('top-end')
                ->autoClose(5000);
        } else {
            Alert::toast('حدث خطأ غير متوقع', 'error');
        }

        return redirect()->back()->withInput();
    }
}





    /**
     * Display the specified resource.
     */
    public function show(Stage $stage)
    {
        return view(self::PATH . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stage $stage)
    {
        return view(self::PATH . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stage $stage)
    {
        $data = $request->validated();
        $stage->update($data);
        return to_route(self::PATH . 'index')->with('success', 'Message');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stage $stage)
    {
        $stage->delete();
        return to_route(self::PATH . 'index')->with('success', 'Message');
    }
}
