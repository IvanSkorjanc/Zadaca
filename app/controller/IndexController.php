<?php

class IndexController
{

    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function era()
    {
        $this->view->render("era");
    }

    public function index()
    {
        $this->view->render("index");
    }

    public function onama()
    {
        $this->view->render("onama");
    }

    public function kontakt()
    {
        $this->view->render("kontakt");
    }

    public function login()
    {
        $this->view->render("login");
    }

    public function autoriziraj()
    {
        if(App::param("email")=="" && App::param("password")==""){
            $this->view->render("login",["greska"=>"Obavezno unos email i lozinka"]);
            return;
        }
        $db = DB::getInstance();
        $izraz=$db->prepare("select * from 
        operater where email=:email");
        $izraz->execute(["email"=>App::param("email")]);
        if($izraz->rowCount()==0){
            $this->view->render("login",["greska"=>"Ne postojeći korisnik"]);
            return;
        }
        $red = $izraz->fetch();
        if(!password_verify(App::param("password"),$red->lozinka)){
            $this->view->render("login",["greska"=>"Netočna lozinka"]);
            return;
        }
        $korisnik = new stdClass();
        $korisnik->email=$red->email;
        $korisnik->imePrezime=$red->ime . " " . $red->prezime;
        $korisnik->uloga=$red->uloga;
        $_SESSION["autoriziran"]=$korisnik;
        $this->view->render("privatno/nadzornaPloca");

    }

    public function logout()
    {
        unset($_SESSION["autoriziran"]);
        session_destroy();
        $this->view->render("login");
    }

    public function nadzornaPloca(){
        if(!isset($_SESSION["autoriziran"])){
            $this->view->render("login");
            exit;
        }
        $this->view->render("privatno/nadzornaPloca");
    }
}