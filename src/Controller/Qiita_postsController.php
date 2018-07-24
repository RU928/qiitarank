<?php

// /posts/index
// /posts
// /(controller)/(action)/(options)

namespace App\Controller;

class Qiita_postsController extends AppController
{
  public function index()
  {
    $posts = $this->Qiita_posts->find('all');
    // $this->set('posts', $posts);
    $this->set(compact('posts'));
  }
}