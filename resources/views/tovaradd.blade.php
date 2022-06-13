@extends('layouts.site')

@section('content')

<div class="col-8  shadow  p-3 mb-5 mt-5 bg-light rounded">

    <h2>Создать новый товар </h2>
    <!-- Форма для добавления товара в корзину -->
    
       @if($errors->any())
              @foreach ($errors->all() as $error)
                     <div class="text-success">{{ $error }}</div>
              @endforeach
       @endif
    <form action="{{ route('createtovar') }}"
          method="post" >
        @csrf
        <label for="input-quantity">Наименование</label>
        <input type="text" name="name" id="input-quantity" value="Товар"
               class="form-control mx-2 w-50">
        <label for="input-quantity">Цена</label>
        <br>
        <input type="text" name="price" id="input-quantity" value="1"
               class="form-control mx-2 w-50">
               <br>
        <button type="submit" class="btn btn-success">Создать товар</button>
    </form>
</div>
 
@endsection