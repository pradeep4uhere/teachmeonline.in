<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Page Controller
     * Auther: Pradeep Kumar
     * Website: www.pradeeptechnical.com
     * @param slug of Topic Name
     */
    public function TopicPage(Request $request,$slug){
        if($slug==strtolower('html')){
            $title= "About HTML (HyperText Markup Language)";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('css')){
            $title= "About CSS (Cascading Style Sheets)";
            $page='TopicContent.CSS';
        }else if($slug==strtolower('design')){
            $title= "About Web Design (Designing Website)";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('php')){
            $title= "About PHP (Hypertext Preprocessor)";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('javascript')){
            $title= "About Javascript";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('ruby')){
            $title= "About Ruby Programming Language";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('Android')){
            $title= "About Android Mobile Developement";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('webdevelopment')){
            $title= "About Web Developement";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('railsdevelopment')){
            $title= "About Rails Developement";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('phpdevelopment')){
            $title= "About PHP Developement";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('androiddevelopment')){
            $title= "About Android Mobile Developement";
            $page='TopicContent.HTML';
        }else if($slug==strtolower('reactdevelopment')){
            $title= "About React JS Developement";
            $page='TopicContent.HTML';
        }else{
            $title= "About HTML (HyperText Markup Language)";
            $page='TopicContent.HTML';
        }
        return view('Pages.TopicPage',array('page'=>'Pages.'.$page,'title'=>$title));

    }
}
