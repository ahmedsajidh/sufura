<?php

namespace App;


class Cart
{
   public $posts = null;
   public $totalQty = 0;

   public function __construct($oldCart)
   {
       if ($oldCart){
           $this->posts = $oldCart->posts;
       }else{
           $this->posts = null;
       }
   }

   public function add($post, $id){
       $storedPost = ['qty'=> 0,'post' => $post];
       if ($this->posts){
           if (array_key_exists($id, $this->posts)){
               $storedPost = $this->posts[$id];
           }
       }
       $storedPost['qty']++;
       $this->posts[$id] = $storedPost;
       $this->totalQty++;
   }
}