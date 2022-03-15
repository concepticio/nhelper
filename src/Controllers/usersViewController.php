<?php

namespace Concepticio\Nhelper\Controllers;

use Concepticio\Nhelper\Models\help_module;
use Concepticio\Nhelper\Models\help_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Result;

class usersViewController extends Controller
{
    // public function next($idmodul, $idpost)
    // {
    //     $idmodul=intval($idmodul);
    //     $posts = DB::table('help_posts')
    //             ->where('help_posts.help_module_id','=',$idmodul)
    //             ->select('help_posts.id','help_posts.help_module_id')
    //             ->get();

    //             $verif = 0;
    //             $nombre = count($posts);
    //             foreach ($posts as $key => $post)
    //             { $verif +=1;
    //                 dd($post->id);
    //                 if ($post->id != $idpost) {
    //                 //    return redirect()->route('view.oneshow',[$post->id]);
    //                 }
    //             }
    // }


    public function showone($id)
    {
        $lists=DB::table('help_posts')
                ->join('help_modules','help_posts.help_module_id','=','help_modules.id')
                ->Orwhere('help_posts.id','=',$id)
                ->where('etat','=',1)
                ->select('help_posts.id','help_posts.titre','help_posts.help_module_id','help_posts.description','help_modules.name','help_posts.updated_at')
                ->paginate(01);


        $modules =help_module::all();
        $posts =help_post::all();
        $modules =help_module::all();
        $module = help_module::find($id);


            return view('nhelper::usersviews.showone')->with(

                    [
                        'module'=>$module,
                        'lists'=>$lists,
                        'modules'=>$modules,
                        'posts'=>$posts,

                    ]);

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


    protected function elimine( $searchs)
    {
        $elimines=["un","une","le","la","les","des","de","du",
                    "au","aux","que","mon","ton","tes","mes",
                    "ce","ces","se","ses","son","quel","quels",
                    "quelle","quelles","qu'il","qu'ils","quelque",
                    "quelques"
                ];
                foreach ($elimines as $key=>$elimine ) {
                   foreach ($searchs as $ke=>$search ) {
                       if ($elimine == $search) {
                           dd($search);
                       }
                   }
                }
    }


    public function search(Request $request)
    {
        try {

            $search = $request->searchInput;
            $retour = $request->searchInput;
            if ($search == null) {
               return redirect()->route('nhelper.index');
            }

            $searchExp= explode(' ',$search);


            $elimines=["un","une","le","la","les","des","de","du","au","aux","que","mon","ton","tes","mes","ce",
            "ces","se","ses","son","quel","quels","quelle","quelles","qu'il","qu'ils","quelque","quelques"];
                foreach ($elimines as $key=>$elimine ) {
                   foreach ($searchExp as $ke=>$search ) {
                       if ($elimine == $search) {
                           unset($searchExp[$ke]);
                       }
                   }
                }



                $results = DB::table('help_posts')
                      ->join('help_modules','help_posts.help_module_id','=','help_modules.id')
                      ->Where('help_posts.etat','=',1)
                      ->where('help_modules.name','LIKE','%'.$search.'%')
                      ->orWhere('help_posts.titre','LIKE','%'.$search.'%')
                      ->orWhere('help_posts.description','LIKE','%'.$search.'%')
                      ->orWhere('help_modules.breve_description','LIKE','%'.$search.'%')
                      ->select('help_modules.id as modul','help_modules.name','help_posts.titre','help_posts.description','help_posts.id','help_posts.help_module_id',)
                      ->get();
                      //$test = $results
            foreach ($results as $key => $result) {
                $results[$key]->description = strip_tags(strtolower($results[$key]->description));
            }
            foreach ($searchExp as $explo)
            {
               foreach ($results as $key => $result)
               {
                // $test2 = substr(strstr($results[$key]->description,$explo,true),0,120)." ... ".strstr($results[$key]->description,$explo)." ...";
                $results[$key]->titre = str_replace(strtolower($explo),'<strong>'.$explo.'</strong>',strtolower($results[$key]->titre));
                $results[$key]->description = str_replace(strtolower($explo),'<strong>'.$explo.'</strong>',$results[$key]->description);
                // dd($results[$key]->description);
               }
            }
            // dd($search);
            return view('nhelper::usersviews.info')->with(['results'=>$results,'search'=>$retour]);

        } catch (\Throwable $th) {
            return back()->withError($th->getMessage());
        }


    }


    public function show($id)
    {
        $listes = DB::table('help_posts')
                ->join('help_modules','help_posts.help_module_id','=','help_modules.id')
                ->where('help_posts.help_module_id','=',$id)
                ->where('etat','=',1)
                ->select('help_posts.id','help_posts.titre','help_posts.description','help_modules.name','help_modules.breve_description','help_posts.updated_at')
                ->paginate(1);

        $modules =help_module::all();
        $posts =help_post::all();
        $modules =help_module::all();
        $module = help_module::find($id);
        return view('nhelper::usersviews.show')->with(
            [
                'module'=>$module,
                'listes'=>$listes,
                'modules'=>$modules,
                'posts'=>$posts,

            ]);
    }


}
