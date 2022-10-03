<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Categorylist()
    {
        $categories = Category::all();
        return View('welcome',[
            'data' => $categories
        ]);
    }

    public function addCategory()
{
        return view('addcategory');
}
public function Store(Request $request)
{
       Category::create([
        'categoryName' => $request->categoryName,
        'products'=> $request->products,
        'description'=> $request->description,
       ]);
       return redirect(route('/'));
}
public function viewSingle($id)
{

        $singleCategory = Category::find($id);

        return View ('singleView',compact('singleCategory'));
}
public function editCategory($id){
        $categories= Category::find($id);
        return view('edit',compact('categories'));
}
public function updateCategory(Request $request,$id)
{
    $requestData = [
        'categoryName' => $request ->categoryName,
        'products' => $request -> products,
        'description' => $request -> description,
        'image'=> $request -> image
    ];
    $categories = Category::find($id);
    $categories->update($requestData);
    return redirect()->route('/');
}
}


