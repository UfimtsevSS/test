<?php

class SimpleClass
{  // property declaration
    public $var = 'A default value';
   // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$simpl = new SimpleClass;
// $simpl->var = 'A default value';
$simpl->displayVar();

class Article
{
    public $title;
    public $text;
    public function view() {
        echo '<h2>' . $this->title . '</h2>';
        echo '<h3>' . $this->text . '</h3>';
	}
}

$art = new Article;
$art->title = 'The best news!';
$art->text = 'The bad news?'; 
$art->view(); 
