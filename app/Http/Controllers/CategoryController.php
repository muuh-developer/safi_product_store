<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function add(){
        return view('layouts.category.add');
    }

    public function list(){

        $categories=CategoryModel::get();

        return view('layouts.category.list', compact('categories'));
    }


    public function store(Request $request) {
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes',
        ]);

        $path='uploads/category/';
        $filename=null;
    
              if($request->hasFile('image')){

                $file=$request->file('image');

                $extension=$file->getClientOriginalExtension();

                $filename= time().'.'.$extension;


                $file->move($path, $filename);

              }
        
    
        CategoryModel::create([
            'name' => $request->name,
             'image' =>  $path . $filename,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
    
        return redirect('category/add')->with('status', 'Category added successfully');
    }
    

    public function edit(int $id){
        $category = CategoryModel::findOrFail($id);
        return  view('layouts.category.edit',compact('category'));

    }

    public function update(Request $request,int $id){
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes',
        ]);
        

        $path='uploads/category/';
        $filename=null;
    
              if($request->hasFile('image')){

                $file=$request->file('image');

                $extension=$file->getClientOriginalExtension();

                $filename= time().'.'.$extension;


                $file->move($path, $filename);

              }
        
    
        CategoryModel::findOrFail($id)->update([
            'name' => $request->name,
             'image' =>  $path . $filename,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
    
        return redirect('category/{id}/edit')->with('status', 'Category updated successfully');

    }
}
