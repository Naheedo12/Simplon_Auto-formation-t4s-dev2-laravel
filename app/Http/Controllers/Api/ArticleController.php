<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;


/**
 * @OA\Info(
 *     title="hello world",
 *     version="1.0",
 *     description="Documentation du CRUD avec Swagger"
 * )
 *
 * @OA\Tag(
 *     name="article",
 *     description=" hana kaynin articles "
 * )
 */

class ArticleController extends Controller
{
/**
 * @OA\Get(
 *     path="/api/articles",
 *     tags={"Articles"},
 *     summary="Liste des articles",
 *     @OA\Response(
 *         response=200,
 *         description="Succès",
 *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Article"))
 *     )
 * )
 */
    public function index() {
    return response()->json(Article::all());

}

/**
 * @OA\Post(
 *     path="/api/articles",
 *     tags={"Articles"},
 *     summary="Ajout un article",
 *     
 *        
 *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"title","content"},
     *             @OA\Property(property="title", type="string", example="Cenderilla"),
     *             @OA\Property(property="content", type="string", example="histoire imaginaire et magique")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Produit créé")
     * 
 * )
 */
   public function store(Request $request){
    $article = new Article() ;
    $article->title= $request->title ;
    $article->content= $request->content ;
    $article->save() ;

    return response()->json(["message"=>"seccuss","Article"=>$article]) ;
   }
}