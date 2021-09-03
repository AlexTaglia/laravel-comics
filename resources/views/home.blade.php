@extends('templates.base')

@section('title', 'HomePage')

@section('main')
    <!-- Jumbotron -->
    <div class="jumbotron"></div>

    <!-- Comics-section -->
    <div class="container comics-section">
            <div class="d-flex flex-wrap">
            @foreach($comics as $comicsItem)
                <div class="cover">
                    <a href="{{ route('fumetto', [ 'id' => $loop->iteration ]) }}">
                        <div class="">
                            <img src="{{ $comicsItem['thumb'] }}" />
                            <h3>{{ $comicsItem["series"] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Button Load more -->

    <div class="container button-container">
        <button class="btn"> LOAD MORE</button>
    </div>

    <!-- blue section -->
    <section class="section-blu">
    <div class="container">
      <div class="col">
        <img src="/images/buy-comics-digital-comics.png" alt="" />
        <span>DIGITAL COMICS</span>
      </div>
      <div class="col">
        <img src="/images/buy-comics-merchandise.png" alt="" />
        <span>DC MECHANDISE</span>
      </div>
      <div class="col">
        <img src="/images/buy-comics-subscriptions.png" alt="" />
        <span>SUBSCRIPTION</span>
      </div>
      <div class="col">
        <img src="/images/buy-comics-shop-locator.png" alt="" />
        <span>COMIC SHOP LOCATOR</span>
      </div>
      <div class="col">
        <img src="/images/buy-dc-power-visa.svg" alt="" />
        <span>CD POWER VISA</span>
      </div>
    </div>
  </section>



@endsection 