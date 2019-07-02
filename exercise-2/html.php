<?php
class Html{
    public $begin = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge">';
    public $mid = '</head><body>';
    public $end = '</body></html>';

    public function __construct()
    {
        //
    }

    public function begin()
    {
        return $this->begin;
    }

    public function meta($name,$content)
    {
        return '<meta name="'.$name.'" content="'.$content.'">';
    }

    public function title($title)
    {
        return '<title>'.$title.'</title>';
    }

    public function mid()
    {
        return $this->mid;
    }

    public function img($url)
    {
        return '<img src="'.$url.'">';
    }

    public function link($url,$text)
    {
        return '<a href="'.$url.'">'.$text.'</a>';
    }

    public function script($url)
    {
        return '<script src="'.$url.'"></script>';
    }

    public function end()
    {
        return $this->end;
    }
}