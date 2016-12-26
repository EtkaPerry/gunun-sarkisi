<?php

class q2a_quote {

    function allow_template($template) {
        $allow = false;

        switch ($template) {
            case 'account':
            case'activity':
            case'admin':
            case'ask' :
            case'categories' :
            case'custom' :
            case'favorites':
            case'feedback' :
            case'hot' :
            case'ip' :
            case'login':
            case'message':
            case'qa' :
            case'question':
            case'questions':
            case'register' :
            case'search' :
            case'tag' :
            case'tags' :
            case'unanswered':
            case'updates' :
            case'user' :
            case'users' :
                $allow = true;
                break;
        }

        return $allow;
    }

    function allow_region($region) {
        return true;
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content) {
        $sarki = "XjwZAa2EjKA";
        $themeobject->output('<div align="left">');
        echo 'Gunun Videosu: </br> <iframe width="215" height="190" src="https://www.youtube.com/embed/'.$sarki.'">
</iframe>';
        $themeobject->output('</div>');
    }
}
