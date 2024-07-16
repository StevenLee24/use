<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // DB::table('posts')->get();
        // DB::table('posts')->first();
        // DB::table('posts')->find(7);
        // DB::table('posts')->pluck('title','id');
        // DB::table('posts')->where('id' , '=' ,10)->where('id' , '<' ,20)->get();
        // DB::table('posts')->insert([
        //    [
        //     'title' => 'This is',
        //     'description' => 'asd',
        //     'status' => 1,
        //     'publish_date' => date('Y/m/d'),
        //     'user_id' => 1
        //    ],
        //    [
        //     'title' => 'This is',
        //     'description' => 'asd',
        //     'status' => 1,
        //     'publish_date' => date('Y/m/d'),
        //     'user_id' => 1
        //    ]
        // ]);
        // DB::table('posts')->where('id' ,52)->update([
        //     'title' => 'dead'
        // ]);
        // DB::table('posts')->where('id' ,52)->delete();
        // DB::table('posts')->delete(52);
        // DB::table('posts')->join('categories','posts.category_id' , 'categories.id')->select('posts.*')->get();
        // DB::table('posts')->count();
        // DB::table('posts')->sum('views');
        // $posts = Post::all();
        // foreach($posts as $post){
        //     echo $post->title;
        // }
        // $posts = Post::findOrFail(61);
        // Post::where('views' , '>' , 100)->get();
        // Post::where('views' , '>' , 100)->orWhere('id' , '=' , 1)->get(); elseif('id')
        // $post = new Post();
        // $post->title = '4';
        // $post->save();
        // $post = Post::findOrFail(61);
        // $post->title = 'd';
        // $post->save();
        // $post = Post::where('id' , 61)->first();
        // $post->title = 'd';
        // $post->save(); 不能用get()
        // Post::findOrFail(61)->delete();
        // $post = Post::create([
        //     'title' => 'This is',
        //     'description' => 'asd'
        // ]);
        // $post = Post::findOrFail(61)->update([]);
        // Post::onlyTrashed()->get();
        // Post::withTrashed()->find(3)->restore();
        // Post::withTrashed()->find(2)->forceDelete();
        dd('success');
        // return view('home',compact);
    }
}
