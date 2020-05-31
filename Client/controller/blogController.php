<?php 

require_once('../view/website/blog.php');
require_once('../model/blogModel.php');

class blog_controller{
    public function afficherBlog()
    {
        
        
      
   

        $v= new blog_view();
        $v-> blog();
     
       
        
    }
    public function get_blog_controller (){
        $mtf= new blog_model();
        $r=$mtf->get_blog();
        return $r;
    }

}