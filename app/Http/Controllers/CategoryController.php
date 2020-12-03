<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category ;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::orderby('category_id','ASC')->paginate(5);
        return view('category.index',[
                    'categories'=>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $category = new Category;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->group = $request->group;
            $category->save();
            return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findOrfail($id)
        $category = Category::find($id);
        return view('category.editar',[
                    'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrfail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->group = $request->group;
        $category->update();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        $category = Category::findOrfail($id);
        $category->state = ($category->state ? 0 : 1);
        $category->update();

        return redirect()->route('category.index');
    }

    public function searchCategory(Request $request){
        $categories = Category::orderby('category_id','DESC')
                ->where('name', 'like', "%$request->buscar%")
                ->paginate(5);
        return view('category.index',[
                    'categories'=>$categories,
                    'search'=>$request->buscar,
                ]
                );

    }


}

