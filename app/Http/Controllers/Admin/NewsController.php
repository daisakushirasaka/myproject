<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //この内容をアクションとして追加
    public function add()
  {
      return view('admin.news.create');
  }
}
