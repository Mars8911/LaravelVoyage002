<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Banner;
use App\Acquisition;
use App\About;
use App\Content;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 首頁
    public function home()
    {
        return view('home')
            ->with('banners', Banner::all())
            ->with('categorys', Category::all())
            ->with('posts', Post::take(9)->orderBy('created_at', 'desc')->get());
    }

    // 二手書收購
    public function acquisition()
    {

        return view('acquisition')
            ->with('categorys', Category::all())
            ->with('posts', Post::take(9)->get())
            ->with('acquisitions', Acquisition::take(1)->get());
    }


    // 關於我們
    public function about()
    {
        return view('about')
            ->with('categorys', Category::all())
            ->with('abouts', About::take(1)->get());
    }



    // 最新消息
    public function news()
    {
        return view('news')
            ->with('banners', Banner::all())
            ->with('categorys', Category::all())
            ->with('posts', Post::orderBy('created_at', 'desc')->paginate(5))
            ->with('categorys', Category::all());
    }

    //單一商品控制
    public function slugpost($id)
    {
        //
        //   $product = Product::where('slug',$slug)->first();
        $postslug = Post::find($id);
        return view('slug')
            ->with('posts', $postslug)
            ->with('postslug', $postslug)
            ->with('categorys', Category::all())
            ->with('categoryname', Category::first()->name);
    }

    //分類頁面
    public function category($id)
    {
        //
        $category = Category::find($id);

        return view('category')->with('category', $category)

            ->with('name', $category->name)
            ->with('categorys', Category::all());
    }


    // 聯繫我們
    public function content()
    {
        return view('content')
            ->with('categorys', Category::all())
            ->with('contents', Content::take(1)->get());
    }
}
