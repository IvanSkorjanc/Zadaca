<?php

class ProizvodacController extends UlogaOperater
{

    private $viewGreska="";
    private $id=0;


    public function index()
    {  
        $this->view->render("privatno/proizvodaci/index",
            ["proizvodaci"=>Proizvodac::getProizvodaci()]);
    }



    public function pripremaNovi()
    {
        $this->view->render("privatno/proizvodaci/novi");
    }




    public function novi()
    {  
       $this->viewGreska="privatno/proizvodaci/novi";

      if(!$this->kontrole()){
          return;
      }

        Proizvodac::novi();
        $this->index();
    }



    public function pripremaPromjeni($id)
    {
      App::setParams(Proizvodac::read($id));
      $this->view->render("privatno/proizvodaci/promjeni", ['id'=>$id]);
    }


    public function promjeni($id)
    {
        $this->viewGreska="privatno/proizvodaci/promjeni";
        $this->id=$id;

        if(!$this->kontrole()){
            return;
        }
  
        Proizvodac::promjeni($id);
         $this->index();
    }


    public function brisanje($id)
    {  

        
        Proizvodac::brisi($id);
       $this->index();
    }


    private function kontrole()
    {
    return true;
    }

    private function greska($polje,$poruka)
    {
        $this->view->render($this->viewGreska,
            ['greska'=>
                ['polje'=>$polje,
                 'poruka'=>$poruka],
             'id'=>$this->id
            ]);
    }


}