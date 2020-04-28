<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();


        //dd($categories);

        return view('categories.index',['categories'=>$categories,'lien'=>'category']);
        ///return view('categories.index',compact('categories',$categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        //dd($request->except('_token'));
        // $errors=$request->validate([
        //             'libelle'=>'required|min:4|max:100',
        //             'icon'=>'required'
        //     ]);


        // $category=new Category();
        // $category->libelle=$request->input('libelle');
        // $category->icon=$request->input('icon');

        // $category->save();


        //$category=Category::create($request->only(['libelle','icon']));

        ///$category=Category::create($request->except('_token'));

        $data=$request->only(['libelle','icon']);

        $category=Category::create($data);

        session()->flash('status', 'cette categorie bien enregistré !!!!');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
            $categorie=Category::findOrFail($category->id);
            return View('categories.show',['categorie'=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        //dd($category);
        return view('categories.edit',['categorie'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $errors=$request->validate([
                    'libelle'=>'required|min:4|max:100',
                    'icon'=>'required'
            ]);

            //dd($request->except(['libelle']));

        $categorie=Category::findOrFail($id);


        // $categorie->libelle=$request->libelle;
        // $categorie->icon=$request->icon;

        // $categorie->save();

        $categorie->update([
            'libelle' => $request->libelle,
            'icon'  => $request->icon
        ]); 
        

        session()->flash('status', 'cette categorie bien modifié !!!!');

        return redirect()->route('categories.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        // $categorie=Category::findOrFail($id);

        // $categorie->delete();


        Category::destroy($id);

        session()->flash('status', 'cette categorie bien supprimé !!!!');

        return redirect()->route('categories.index'); 

    }
}
