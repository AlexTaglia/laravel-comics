@extends('templates.base')

@section('title', 'Product')

@section('main')
    <div class="jumbotron"></div>

    <div class="container d-flex">
        <div class="comics-info">
            <h1>{{$comics[$arrayIndex]['title']}}</h1>
            <div class="purchase-section d-flex">
                <div class="price">
                    U.S. Price:{{$comics[$arrayIndex]['title']}}
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

        </div>
    </div>


@endsection 