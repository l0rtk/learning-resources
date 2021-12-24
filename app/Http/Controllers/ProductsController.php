<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products=Products::all();
        return view("mainPage",["products"=>$products]);
    }

    public function create()
    {
        return view("admin.createMenu");
    }

    public function show($id)
    {
        $result=Products::where("id",$id)->firstOrFail();
        return view("singleProduct",["result"=>$result]);

    }

    public function store(Request $request)
    {
        Products::create([
            "name"=>$request->input('title'),
            "description"=>$request->input('description'),
            "price" => $request->input('price'),
            "priority" => $request->input('priority'),
            "group_id" => $request->input('groups'),
        ]);
        return redirect()->route("Adminindex");
    }

    public function edit($id)
    {

        $result=Products::where("id",$id)->firstOrFail();

        return view("admin.updateMenu",["result"=>$result]);

    }

    public function update(Request $request)
    {
        Products::where("id",$request->input("id"))->update([
            "name"=>$request->input('title'),
            "description"=>$request->input('description'),
            "price" => $request->input('price'),
            "priority" => $request->input('priority'),
            "group_id" => $request->input('groups'),
        ]);
        return redirect()->route("Adminindex");
    }

    public function destroy($id)
    {
        Products::destroy($id);
        return redirect()->route("Adminindex");

    }

}
