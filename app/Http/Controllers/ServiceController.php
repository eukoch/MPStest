<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Service;

class ServiceController extends Controller {

    protected $services;

    public function __construct(Service $services) {
        $this->services = $services;
    }

    /**
     * Выводим главную страницу раздела "Услуги" /services
     */
    public function index() {
        //Коллекция моделей services
        //первые 4 модели
        $services = $this->services->all()->forPage(1, 4);

        $data = [
            'total' => $this->services->all()->count(), // номер последнего отправленого
            'current' => 2, // номер присвоенной страницы
            'title' => 'Услуги компании ВЕДА',
            'description' => 'Список услуг юридической фирмы ВЕДА',
            'services' => $services,
        ];

        return view('pages.services.index', $data);
    }

    /**
     * Формируем данные и выводим страницу выбранной услуги /services/{slug}
     */
    public function show($slug) {
        //Элемент из коллекции services, где slag == $slug
        $service = $this->services->where('slug', $slug)->first();

        if (!isset($service)) { //нет такого слага
            abort(404);
        }

        $data = [
            'title' => $service->name,
            'description' => $service->description,
            'service' => $service,
        ];
        return view('pages.services.show', $data);
    }

    public function ajax(Request $request) {
        
        $new_pg = $request->current + 1; //следующая стрница
        $services = $this->services->all()->forPage($new_pg, 2); //новый набор
        
        if ( $services->count() >0 ) {

            $data = [
                'success' => true,
                'new_current' => $new_pg, // номер новой страницы
                'services' => $services,
            ];
            return response()->json($data);
        } else {
            //все вывели
            $data = [
                'success' => false,
            ];
            return response()->json($data);
        }
    }

}
