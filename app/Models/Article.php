<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Article",
 *     type="object",
 *     required={"id","title","content"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="title", type="string", example="Titre de l'article"),
 *     @OA\Property(property="content", type="string", example="Contenu de l'article")
 * )
 */

class Article extends Model
{
    use HasFactory;
      protected $fillable = [
        'title','content', 
    ];
}