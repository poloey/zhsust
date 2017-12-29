<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function teacher()
  {
    return view('dashboard.teacher.index');
  }
  public function admin()
  {
    return view('dashboard.admin.index');
  }
  public function student()
  {
    return view('dashboard.student.index');
  }
}
