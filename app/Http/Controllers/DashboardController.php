<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
      return view('dashboard.index');
    }
    public function about_us(){
      return view('dashboard.acerca_hobby');
    }
    public function cars(){
      return view('dashboard.automoviles');
    }
    public function planes(){
      return view('dashboard.aviones');
    }
    public function boats(){
      return view('dashboard.barcos');
    }
    public function diecast(){
      return view('dashboard.diecast');
    }
    public function helicopters(){
      return view('dashboard.helicopteros');
    }
    public function enginery(){
      return view('dashboard.maquinaria');
    }
    public function metal(){
      return view('dashboard.metal');
    }
    public function mission(){
      return view('dashboard.mision');
    }
    public function modelism(){
      return view('dashboard.modelismo');
    }
    public function offers(){
      return view('dashboard.ofertas');
    }
    public function we_offer(){
      return view('dashboard.ofrecemos');
    }
    public function about(){
      return view('dashboard.quienes_somos');
    }
    public function tanks(){
      return view('dashboard.tanques');
    }
    public function vintage(){
      return view('dashboard.vintage');
    }
    public function sight(){
      return view('dashboard.vision');
    }
}
