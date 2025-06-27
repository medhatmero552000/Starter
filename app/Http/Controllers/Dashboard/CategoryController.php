<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\createCategoryRequest;
use App\Models\Dashboard\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {


        $data = Category::whereNull('parent_id')->paginate(PAGINATION_COUNT);

        return view('dashboard.categories.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createCategoryRequest $request)
    {
        try {

            DB::beginTransaction();
            $data = $request->validated();
            $validated = $request->validated();
            $validated['is_active'] = $request->has('is_active') ? 1 : 0;
            Category::create($data);
            DB::commit();
            Alert::toast('تم إضافة القسم بنجاح', 'success'); // 👈 توست ناجح
            return redirect()->route('admin.categories.index');
        } catch (\Throwable $th) {
            DB::rollBack(); // تراجع عن أي تغيير
            Alert::toast(' خطأ لم يتم حفظ القسم  ', 'error');
           return redirect()->back()->withInput();

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::findOrFail($id);
        $data->makeVisible('translations');
        return view('dashboard.categories.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        try {
            // return $request;
            DB::beginTransaction();
            $data = Category::findOrFail($id);
            $validated = $request->validated();
            $validated['is_active'] = $request->has('is_active') ? 1 : 0;
            $data->update($validated);
            DB::commit();
            Alert::toast('تم تحديث البيانات بنجاح', 'success'); // 👈 توست ناجح
            return redirect()->route('admin.categories.index');
        } catch (\Throwable $th) {
            DB::rollBack(); // تراجع عن أي تغيير
            Alert::toast('لم يتم التحديث  ', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {
            DB::beginTransaction();
            $data = Category::findOrFail($id);
            $data->delete();
            DB::commit();
            Alert::toast('تم الحذف  بنجاح', 'success'); // 👈 توست ناجح
            return redirect()->route('admin.categories.index');
        } catch (\Throwable $th) {
            DB::rollBack(); // تراجع عن أي تغيير
            Alert::toast('لم يتم الحذف  ', 'error');
            return redirect()->back();
        }
    }
}
