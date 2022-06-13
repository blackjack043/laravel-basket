@extends('layouts.site')

@section('content')
<h1>Каталог товаров</h1>
@if (count($Products))
    <div class="row mt-5">
        @foreach($Products as $Product)
        <div class="col-8 shadow  p-3 mb-5  bg-light rounded ">
            <p>Товар: <span style="font-weight: bold;">{{ $Product->name }}</span> </p>
            <p>Цена: <span style="font-weight: bold;">{{ number_format($Product->price, 2, '.', '') }} </span> </p>
            
            <!-- Форма для добавления товара в корзину -->
            <form action="{{ route('basketadd', $Product->id) }}"
                method="post" class="form-inline">
                @csrf
                <label for="input-quantity">Количество</label>
                <input type="number" name="quantity" id="input-quantity" value="1"
                    class="form-control mx-2 w-25">
                <button type="submit" class="btn btn-success">Добавить в корзину</button>
            </form>
        </div>
        @endforeach
    </div>
@else
<p>Еще ни создано ни одного товара</p>
@endif
@endsection