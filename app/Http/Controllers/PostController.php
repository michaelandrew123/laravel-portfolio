<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    //
    public function addPost(){
        $post = new Post(); 
        $post->title = "My second post";
        $post->body = "Second post description";
        $post->save();
        return "Post has been created!";
    }

    public function addComment($id){
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is third comment.";
        $post->comments()->save($comment);
        return "Comment has been posted!";
    }


    public function getCommentsByPost($id){
        $comments = Post::find($id)->comments;
        return $comments;
    }
}
