<?php

namespace Concepticio\Nhelper\Controllers;

use Concepticio\Nhelper\Models\help_module;
use Concepticio\Nhelper\Models\help_post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class help_moduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $help_modules = help_module::simplepaginate(4);
        return view("nhelper::Module.index")->with(['help_modules'=>$help_modules])
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
        try {
                $request->validate(
                [
                    'name.require'=>'Veuillez le nom du module',
                    'flatte_icon.require'=>"Veuillez saisir une brève description"
                ]
            );
            $help_module = new help_module();
            $help_module->name = strtoupper($request->name);
            $help_module->flatte_icon = $request->flatte_icon;
            $help_module->breve_description = $request->breve_description;
            $help_module->parent =$request->parent;
            $help_module->save();
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
        try {
            
            $help_module = help_module::find($id);
            $help_module->name = strtoupper($request->name);
            $help_module->flatte_icon = $request->flatte_icon;
            $help_module->breve_description = $request->breve_description;
            $help_module->parent =$request->parent;
            $help_module->update();
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
        try {
           
        $help_module =  help_module::find($id);       
        $help_module->delete();
        return back()->with('success','Suppression réalisé avec succès');
    } catch (\Throwable $th) {
        return back()->withError($th->getMessage());
    }
    }
}
