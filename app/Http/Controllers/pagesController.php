<?php

namespace laravel\Http\Controllers;

class PagesController extends Controller {
  public function Index() {
    return 'index';
  }
  public function About() {
    return 'about';
  }
  public function Events() {
    return 'events';
  }
  public function Speakers() {
    return 'speakers';
  }
  public function Contact() {
    return 'contact';
  }
}
