
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}}</p>
            <p>
            {{--            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">--}}
            <form action="{{route('basket-add',$product)}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>

                {{--                {{$product->category->name}}--}}
{{--                <a href="{{ route('product',[--}}
{{--                    'category' => $product->category_code,--}}
{{--                    'product' => $product->code--}}
{{--                    ]) }}"--}}
{{--                   class="btn btn-default"--}}
{{--                   role="button">Подробнее</a>--}}

                @csrf
{{--                <input type="hidden" name="_token" value="Rsr31MfPwq8AGZxawPkKzVxKbYW4yVPuraiipFQv">--}}
            </form>
            </p>
        </div>
    </div>
</div>
