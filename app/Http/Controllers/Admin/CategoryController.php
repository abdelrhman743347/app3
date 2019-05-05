<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $categories = Category::paginate(5);
        $categories = Category::when($request->search, function($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);
        return view('admin.categories.index', compact('categories'));

    }// End of index

    public function create()
    {
        return view('admin.categories.create');
    }// end of create

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        Category::create($request->all());

            session()->flash('status', ('Category Added Successfully'));
            return redirect()->route('categories.index');

    }// end of store
//
//
//    public function show(Category $category)
//    {
//        //
//    }
//
//
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }// end of edit


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id,
        ]);

            $category->update($request->all());
            session()->flash('status', ('Category Updated Successfully'));
            return redirect()->route('categories.index');

    }// end of update


    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('status', ('Category Deleted Successfully'));
        return redirect()->route('categories.index');

    }
}
