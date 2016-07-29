<?php

namespace laravel\Http\Controllers;

class AdminController extends Controller {
  public function Index() {
    return view('admin.index');
    Dotenv::load(__DIR__ . '/../', '.env.testing');

  }
  public function Events() {
    return view('admin.events');
  }
  public function Speakers() {
    return view('admin.speakers');
  }
  public function CreateEvent(){
    return view('admin.createEvent');
  }
}
