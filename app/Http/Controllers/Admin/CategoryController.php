<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();

        return view('admin.components.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Category::create([
            'name' => $request->name,
            'img' => saveImage($request->img, 'uploads/category/'),
            'slug' => Str::slug($request->name),
            'remarks' => $request->remarks,
        ]);

        $notification = [
            'message' => 'Category Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.components.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgName = 'CategoryPhoto- ' . md5(uniqid()) . '.' . $img->getClientOriginalExtension();
            $img_url = "backend/assets/uploads/{$imgName}";
            $img->move(public_path('backend/assets/uploads'), $img_url);


            $filePath = $request->$img_url;
            File::delete($filePath);
            $category->update([
                'name' => $request->name,
                'img' => $img_url,
                'slug' => Str::slug($request->name),
                'remarks' => $request->remarks,
            ]);
        } else {
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'remarks' => $request->remarks,
            ]);
        }

        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        
        $category->delete();

        return response()->json([
            'status' => true,
            'message' => 'Category Deleted Successfully',
        ]);
    }
}
