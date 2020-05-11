<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//PHP/Laravel 18 テキスト↓
use App\News;
//PHP/Laravel 18 テキスト↑

class NewsController extends Controller
{
    //PHP/Laravel 18 テキスト↓
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
    //PHP/Laravel 18 テキスト↑
}
