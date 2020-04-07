<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use TCG\Voyager\Models\Post;
use App\Banner;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // 首頁
    public function home()
    {
        return view('home')
            ->with('banners', Banner::all())
            ->with('posts', Post::take(9)->get());
    }
}
