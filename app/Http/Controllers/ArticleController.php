<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //


    public function articles()
    {
        $articles = Article::with(['section', 'author'])->get(); // Cargar relaciones si es necesario
        // Retornar los artículos en formato JSON
        return response()->json($articles);
    }

    public function articles_detail($id)
    {
        // Obtener el artículo por ID
        $article = Article::with(['section', 'author'])->find($id);

        // Verificar si el artículo existe
        if (!$article) {
            return response()->json(['message' => 'Artículo no encontrado'], 404);
        }

        // Retornar el artículo en formato JSON
        return response()->json($article);
    }
}
