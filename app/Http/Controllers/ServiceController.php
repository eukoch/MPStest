<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ServiceController extends Controller {

    /**
     * Выводим главную страницу раздела "Услуги" /services
     */
    public function index() {
        $data = [
            'title' => 'Услуги компании ВЕДА',
            'description' => 'Список услуг юридической фирмы ВЕДА',
        ];

        return view('pages.services.index', $data);
    }

    /**
     * Формируем данные и выводим страницу выбранной услуги /services/{id}
     *
     * @param  int  $id
     */
    public function show($id) {
        dd($id);
    }

}
