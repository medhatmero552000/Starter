<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StageRequest;
use App\Models\Dashboard\Stage;
use App\Traits\CrudOperations;
use App\Traits\ModalRepeaterStore as TraitsModalRepeaterStore;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use ModalRepeaterStore;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use RealRashid\SweetAlert\Facades\Alert;

use function Laravel\Prompts\error;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /* ------------------------------ Start Traits Useage ----------------------------- */
use TraitsModalRepeaterStore;
/* ------------------------- Aliases CrudOperations Trait ------------------------- */
use CrudOperations {
    CrudOperations::index as traitIndex;
    CrudOperations::create as traitCreate;
    CrudOperations::store as traitStore;
    CrudOperations::edit as traitEdit;
    CrudOperations::update as traitUpdate;
    CrudOperations::destroy as traitDestroy;
    CrudOperations::show as traitShow;
}



    protected string $viewPath = 'dashboard.Stages';
    protected string $routePrefix = 'admin.stages';




    /* ------------------------------ End Traits Useage ----------------------------- */

    public function index()
    {
        return $this->traitIndex(Stage::class);
    }



    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {

    //     return view(self::PATH . 'create', get_defined_vars());
    // }

    /**
     * Store a newly created resource in storage From Repeater Form.
     */

    public function store(StageRequest $request)
    {
        return $this->storeFromFormRepeater($request->stages, $request);
    }





    /**
     * Display the specified resource.
     */
    // public function show(Stage $stage)
    // {
    //     return view(self::PATH . 'show', get_defined_vars());
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Stage $stage)
    // {
    //     return view(self::PATH . 'edit', get_defined_vars());
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Stage $stage)
    // {
    //     $data = $request->validated();
    //     $stage->update($data);
    //     return to_route(self::PATH . 'index')->with('success', 'Message');
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Stage $stage)
    // {
    //     $stage->delete();
    //     return to_route(self::PATH . 'index')->with('success', 'Message');
    // }
}
