<?php

declare(strict_types=1);

namespace App\Controller ;

class LearningController extends AppController
{

    public function first(){

       // die('nel metodo first di LearningController');
       //$this->autoRender=false;
       // $this->render('mydifferentview');

   //       $this->viewBuilder()->setLayout('learningLayout');
        $colors = ['pink','yellow'];

         $this->set('colors', $colors);

    }



}