<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

trait CrudOperations
{
 

    public function index($model)
    {
        $locale = LaravelLocalization::getCurrentLocale();

        $items = $model::with(['translations', 'createdByAdmin', 'updatedByAdmin'])
            ->whereHas('translations', function ($query) use ($locale) {
                $query->where('locale', $locale);
            })
            ->latest()
            ->paginate(PAGINATION_COUNT);

        return view($this->viewPath . '.index', compact('items'));
    }

    public function create()
    {
        return view($this->viewPath . '.create');
    }

    public function store(Request $request, $model)
    {
        $data = $request->validated();
        $model::create($data);
        return redirect()->route($this->routePrefix . '.index')->with('success', __('messages.created'));
    }

    public function edit($id, $model)
    {
        $item = $model::findOrFail($id);
        return view($this->viewPath . '.edit', compact('item'));
    }

    public function update(Request $request, $id, $model)
    {
        $data = $request->validated();
        $item = $model::findOrFail($id);
        $item->update($data);
        return redirect()->route($this->routePrefix . '.index')->with('success', __('messages.updated'));
    }

    public function destroy($id, $model)
    {
        $item = $model::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', __('messages.deleted'));
    }

    public function show($slug, $model)
    {
        $locale = LaravelLocalization::getCurrentLocale();
        $item = $model::with(['translations', 'createdByAdmin', 'updatedByAdmin'])
            ->whereHas('translations', function ($query) use ($locale) {
                $query->where('locale', $locale);
            })
            ->where('slug', $slug)
            ->firstOrFail();

        return view($this->viewPath . '.show', compact('item'));
    }
}