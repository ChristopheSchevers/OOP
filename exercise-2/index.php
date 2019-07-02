<?php
include 'html.php';

$page = new Html();
echo $page->begin();
echo $page->meta('author','Christophe Schevers');
echo $page->title('Html builder class');
echo $page->mid();
echo $page->img('https://img.static-rmg.be/a/view/q75/w720/h/2170223/lat-png.png');
echo $page->link('https://lmgtfy.com/?q=google','Google');
echo $page->script('test.js');
echo $page->end();