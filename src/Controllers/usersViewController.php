<?php

namespace Concepticio\Nhelper\Controllers;

use Concepticio\Nhelper\Models\help_module;
use Concepticio\Nhelper\Models\help_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class usersViewController extends Controller
{
    public function Next($idmodul, $idpost)
    {  $Posts = help_post::all();
        foreach ($Posts as $post) {
            # code...
        }
    }

    public function showone($id)
    {
        $lists=DB::table('help_posts')
                ->join('help_modules','help_posts.help_module_id','=','help_modules.id')
                ->where('help_posts.id','=',$id)
                ->where('etat','=',1)
                ->select('help_posts.id','help_posts.titre','help_posts.description','help_modules.name','help_posts.updated_at')
                ->first();


        $modules =help_module::all();
        $posts =help_post::all();
        $modules =help_module::all();
        $module = help_module::find($id);
        $idnext=1;
        $idprevious=1;
        $last=(DB::table('help_posts')->latest('id')->first());
        if ($id <=  $last->id) {
            $idnext= $id+1;
            do {
                  $test =help_post::find($idnext);
                  if(($test == null)&&($idnext<$last->id)){
                      $idnext=$idnext+1;
                      if ($idnext==$last->id) {
                        $idnext=$last->id;
                      }
                  }
            } while (($test == null)&&($idnext<$last->id));

        }
        if(($test == null)&&($idnext>$last->id)){
                  $idnext=$id;
        }


        if ($id > 1 ) {
          $idprevious= $id-1;
          if ($lists == null) {
            $idprevious= $idnext-2;
          }
        }

        if ($lists != null){

            return view('nhelper::usersviews.showone')->with(

                    [
                        'module'=>$module,
                        'lists'=>$lists,
                        'modules'=>$modules,
                        'posts'=>$posts,
                        'idnext'=> $idnext,
                        'idprevious'=> $idprevious,
                        'limit'=>$last->id
                    ]);
         }else{
            // alert("Impossible de charger cette page.");
            return back()->withError("Impossible de charger cette page.");
         }


    }
    public function index()
    {
            $PostSearch= DB::table('help_posts')
                        ->select('help_posts.id','help_posts.titre')
                        ->get();


            // dd($PostSearch);
            $modules = help_module::all();
            return view('nhelper::usersviews.index')->with(['modules'=>$modules,'PostSearch'=>$PostSearch]);
    }

    public function search(Request $request)
    {
        try {
            $search = $request->searchInput;

            $results = DB::table('help_posts')
                      ->join('help_modules','help_posts.help_module_id','=','help_modules.id')
                      ->where('help_modules.name','LIKE',$search.'%')
                      ->orWhere('help_posts.titre','LIKE',$search.'%')
                      ->orWhere('help_posts.description','LIKE',$search.'%')
                      ->select('help_modules.id as modul','help_modules.name','help_posts.titre','help_posts.id','help_posts.help_module_id',)
                    //   ->groupBy('help_posts.titre')
                      ->get();
            //   dd($results);
            return view('nhelper::usersviews.info')->with(['results'=>$results]);

        } catch (\Throwable $th) {
            return back()->withError($th->getMessage());
        }


    }

    public function show($id)
    {
        $lists = DB::table('help_posts')
                ->join('help_modules','help_posts.help_module_id','=','help_modules.id')
                ->where('help_posts.help_module_id','=',$id)

                ->where('etat','=',1)
                ->select('help_posts.id','help_posts.titre','help_posts.description','help_modules.name','help_modules.breve_description','help_posts.updated_at')
                ->first();

                $idnext=1; $idprevious=1;
        $last_post=(DB::table('help_posts')->latest('id')->first());
        if($lists->id !=1)
        {$idprevious=$lists->id-1;}
        if ($last_post->id > $lists->id ) {
            $idnext= $lists->id+1;
        }


        $modules =help_module::all();
        $posts =help_post::all();
        $modules =help_module::all();
        $module = help_module::find($id);
        return view('nhelper::usersviews.show')->with(
            [
                'module'=>$module,
                'lists'=>$lists,
                'modules'=>$modules,
                'posts'=>$posts,
                'idprevious'=>$idprevious,
                'idnext'=>$idnext,
                'limit'=>$last_post->id
            ]);
    }


}
