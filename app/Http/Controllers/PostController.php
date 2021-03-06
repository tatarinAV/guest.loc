<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postsPerPage = 15;
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




    private function getPosts($postsPerPage = 15){
        $posts =  Post::paginate($postsPerPage); //todo: проверить сортировки в конце
        $data = [];
        if ($posts) {
            foreach ($posts->fragment('posts') as $post) {
                $author = Author::where('id',$post['author_id'])->first();
                $data['posts'][] = [
                    'title' => $post['title'],
                    'description' => $post['description'],
                    'author' => ['name' => $author->name, 'email' => $author->email, 'id' => $author->id],
                    'date_added' => $post['created_at']
                ];
            }
            $data['links'] = $posts->links();

        }
        return $data;
    }
    public function addPost(){

    }
    public function deletePost(){

    }
}
