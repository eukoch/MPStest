@extends('index')

@section('content')

@include('_header')

<div class="container">

    {{-- Блок _Наши услуги_ --}}
    <div class="row description">
        <div class="col-6 mr-auto text-left">
            <h1>{{ $service->name }}</h1>
            <hr>
            <p>
                {{ $service->description }}
            </p>
        </div>
    </div>

    <div style="min-height: 500px;"></div>



    {{-- Блок _Задать вопрос_ --}}
    <div class="row ask_question border-top border-secondary my-5">
        <div class="col-8 text-left mb-3">
            <h2>Не знаете к какой услуге относится ваш вопрос?</h2>
            <p>Спросите нас. Мы проконсультируем вас бесплатно по телефону или email.</p>
        </div>
        <div class="col-4 text-right pt-4">
            <a class="btn btn-secondary" href="#" role="button">Задать вопрос</a>
        </div>
    </div>   


</div>

@include('_footer')

@endsection