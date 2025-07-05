<?php

namespace App\Traits;

use App\Http\Requests\StageRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Dashboard\Stage;

trait ModalRepeaterStore
{
    public function storeFromFormRepeater(array $stages, StageRequest $request)
    {
        try {
            $request->validated(); 
            foreach ($stages as $stageData) {
                $stageData['created_by'] = Auth::id();
                $stageData['updated_by'] = Auth::id();
                Stage::create($stageData);
            }
            Alert::toast(__('keywords.add_successfully'), 'success')
                ->position('top-end')
                ->autoClose(3000);

            return to_route('admin.stages.index')->withInput();
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) { // Duplicate entry
                Alert::toast('هذا الحقل موجود مسبقًا (تكرار في الاسم  )', 'error')
                    ->position('top-end')
                    ->autoClose(5000);
            }
            return redirect()->back()->withInput();
        }
    }
}