<?php

namespace controllers;

use core\Controller;
use core\Core;
use core\Template;

class CourseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function viewAction(){
        return $this->render();
}
public function indexAction(){
    return $this->render(null , [
        'title'=>'Список курсів',
        'text' =>'Просто текст'
    ]);
}
}

http://Course//course/view
