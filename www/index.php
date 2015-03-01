<?php

class Article
{// property declaration
    public $title;
    public $text;
 // Конструктор
    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }
 // method declaration
    public function view()
    {
        echo '<h3>' . $this->title . '</h3>';
        echo '<p>' . $this->text . '</p>';
    }
}
// Конструктор вызывается автоматически при создании объекта
$art = new Article('Заголовок', 'Текст');
// var_dump($art);
$art->view();

class NewsArticle extends Article  // «extends» - наследуется от Article
{
    public $source;
}
class RepostArticle extends Article  // «extends» - наследуется от Article
{
    public $source;
    public function __construct($title, $text, $source)
    {
        parent::__construct($title, $text); // «parent» - ссылка на родительский класс
        $this->sourse = $source;
    }
}
$art1 = new RepostArticle('Заголовок', 'Текст', 'source 1');
var_dump($art1);
