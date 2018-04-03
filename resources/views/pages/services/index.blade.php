@extends('index')

@section('content')

@include('_header')

<div class="container">

    {{-- Блок _Наши услуги_ --}}
    <div class="row description mb-5">
        <div class="col-6 mr-auto text-left">
            <h1>Наши услуги</h1>
            <hr>
            <p>
                Наша деятельность охватывает широкий набор юридических услуг по
                созданию, ведению и защите бизнеса в России. Для более подробного ознакомления
                с услугами фирмы, пожалуйста, выберите интересующее Вас направление.
            </p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6 ml-auto text-right">
            <a id="show-more" class="btn btn-secondary" href="#" role="button">показать еще</a>
        </div>
    </div>

    <div class="services_container">
        @foreach ($services->chunk(2) as $chunk)
        <div class="row mb-4">
            @foreach ($chunk as $service)
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->name }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                        <a href="{{ route('services.index').'/'.$service->slug }}" class="card-link">Подробнее >></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>

    {{-- Блок _Клиенты о нас_ --}}
    <div class="row description">
        <div class="col-6 ml-auto text-right">
            <h1>Клиенты о нас</h1>
            <hr class='ml-auto'>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis, nulla nec pellentesque cursus, ex ipsum dapibus libero, at viverra velit mauris ac diam. Suspendisse id efficitur metus.
            </p>
        </div>
    </div>      

    {{-- Блок слайдера --}}
    <div class="row my-5">
        <div class="col-1 text-left pt-5">
            <a href='#'><img src="/img/arr_left.png" width="16" height="31"/></a>
        </div>
        <div class="col-6 m-auto text-left">
            <a class="testimonials_header" href='#'>Это было круто! Такого судебного процесса я еще не видел.</a>
            <div class="text-right">
                <strong class="d-block p-0 m-0 mt-2 mb-1">Сергей Коваленко</strong>
                <small>заместитель генерального директора<BR/> НИИ ТЯЖМАШ</small>
            </div>
        </div>
        <div class="col-1 text-right pt-5">
            <a href='#'><img src="/img/arr_right.png" width="16" height="31"/></a>
        </div>
    </div>   
    <div class="row my-5">
        <div class="col-12 text-right mb-5">
            <a class="testimonials_link" href="#">ПОСМОТРЕТЬ ВСЕ ОТЗЫВЫ</a>
        </div>
    </div>

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

@section('script')
<script>
var current = {{ $current }};

jQuery(document).ready(function($) {
    
    // подфункция вывода 
    function showItem(parent, item) { //выводит элемент из коллекции item в parent

    var html = '\
                <div class="col-6">\
                    <div class="card">\
                        <div class="card-body">\
                            <h5 class="card-title">' + item.name + '</h5>\
                            <p class="card-text">' + item.description + '</p>\
                            <a href="/services/' + item.slug + '" class="card-link">Подробнее >></a>\
                        </div>\
                    </div>\
                </div>';
    //создаем экземпляр первым в коллекции							  
    $(parent).prepend(html);
    }; // function showItem

    $(document).on('click', '#show-more', function (e) {
    e.preventDefault();
    //showItem ('.services_container', myNewObject);

    var token = "{{ csrf_token() }}";
    //var data_json = '{ "_token": "'+token+'", curent": "4", "url": "1" }';
    var data_json = '_token=' + token + '&current=' + current;
    $.ajax({
            url: "{{ route('services.get-two') }}",
            type: "post",
            data: data_json,
            headers: { 'X-CSRF-TOKEN': token},
            success: function(json_data) {
                if (json_data.success) {
                    //выводи полученные данные
                   st = '<div class="row mb-4" id="row'+json_data.new_current+'"></div>';
                   $('.services_container').prepend(st);
                   
                   $.each(json_data.services, function(service){
                      console.log(json_data.services[service]);
                      showItem ('#row'+json_data.new_current, json_data.services[service]);
                   });
                   
                    current = json_data.new_current;
                } else {
                    $('#show-more').addClass("disabled"); //блокируем кнопку
                }
                
            },
            error: function(data){
                console.log (data);
            },
        });
    });
});
</script>
@endsection