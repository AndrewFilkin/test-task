<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleShowController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(9);

        return view('index', compact('articles'));
    }

    public function oneArticleShow(Article $article, $slug)
    {

        $article = Article::where('slug', $slug)->firstOrFail();

        $comments = $article->comments;

        if (!$comments->isEmpty()) {
            return view('article', compact('article', 'comments'));
        }
        return view('article', compact('article'));
    }
}
