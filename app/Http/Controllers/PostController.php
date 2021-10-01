<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postsPerPage = 25;
    //
    public function index()
    {
        $data =  $this->getPosts($this->postsPerPage);
        return view('home', [
            'posts' => $data['posts'],
            'links' => $data['links'],
            'form' => array(), //todo:Данные для формы
        ]);
    }




    private function getPosts($postsPerPage = 25){
        $posts =  Post::paginate($postsPerPage);
        $data = [];
        if ($posts) {
            foreach ($posts->fragment('posts') as $post) {
                $author = Author::where('id',$post['author_id'])->first();
                $data['posts'][] = [
                    'title' => $post['title'],
                    'description' => $post['description'],
                    'author' => ['name' => $author->name, 'email' => $author->email],
                    'date_added' => $post['created_at']
                ];
            }
            $data['links'] = $posts->links();

        }
        return $data;
    }
    private function addPost(){

    }
    private function deletePost(){

    }
}
