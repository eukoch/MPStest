<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
     /**
     * Выводим главную страницу
     */
    public function index()
    {
        $data = [
                'title' => 'Тестовое задание для mechanical-pie.com',
                'description' => 'Реализация теста для mechanical-pie.com',
        ];

        return view ('pages.home.index', $data);
    }
}
