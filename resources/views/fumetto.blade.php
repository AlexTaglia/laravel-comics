@extends('templates.base')

@section('title', 'Product')

@section('main')
    <div class="jumbotron"></div>

    <div class="container d-flex comics-info">
        <div class="left">
            <h1>{{$comics[$arrayIndex]['title']}}</h1>
            <div class="purchase-section d-flex space-btw">
                <div class="price">
                    U.S. Price:{{$comics[$arrayIndex]['price']}}
                </div>
                <div>
                    AVAILABLE
                </div>
                <div>
                    Check Availability
                </div>
            </div>
            <div class="description">
                <p>{{$comics[$arrayIndex]['description']}}</p>

            </div>
        </div>
        <div class="ads">
            <img src="/images/pubblicità.jpg" alt="">
        </div>
    </div>


@endsection 