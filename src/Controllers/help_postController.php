<?php

namespace Concepticio\Nhelp\Controllers;

use Concepticio\Nhelp\Models\help_module;
use Concepticio\Nhelp\Models\help_post;
use Concepticio\Nhelp\Models\Module;
use Concepticio\Nhelp\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Controller;

class help_postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $help_posts = help_post::simplepaginate(4);
        $help_modules = help_module::all();
    
        return view('nhelp::Post.index')->with(
            [
              'help_posts' => $help_posts,
              'help_modules'=> $help_modules
            ]
        )
        ->with('i',($request->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
                $request->validate(
                [
                    'titre.require'=>"Veuillez saisir le nom de votre post",
                    'description.require'=>"Veuillez saisir une description",
                    'help_modules_id.require'=>"veuillez selectionner une catégorie"
                ]);
            $help_post = new help_post();
            $help_post->titre =strtoupper($request->titre);
            $help_post->description = $request->description;
            $help_post->help_module_id = $request->help_module_id;
            $help_post->etat = false;
            $help_post->save();
            return back()->with('success','Enregistrement réalisé avec succès');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage());
        }  
        

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
        //
        $help_post = help_post::find($id);
        if ($help_post->etat == 1){
            $help_post->etat = 0;
            $help_post->save();
        }else{
            $help_post->etat = 1;
            $help_post->save();
        }
        return redirect()->route('posts.index');
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
        //
        try {
            $help_post = help_post::find($id);
            $help_post->titre = strtoupper($request->titre);
            $help_post->description = $request->description;
            $help_post->help_module_id = $request->help_module_id;
            $help_post->etat = false;
            $help_post->update();
            return back()->with('success','Modification réalisé avec succès');
            
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage());
        }
       
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $help_post = help_post::find($id);
            $help_post->delete();
            return back()->with('success','Suppression réalisé avec succès');
        } catch (\Throwable $th) {
            return back()->withError($th->getMessage());
        }
        
    }
}
