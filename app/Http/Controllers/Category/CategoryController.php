<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('adminPanel.category.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();
        Category::create($data);
        return redirect()->route('categories.index');
    }

}
