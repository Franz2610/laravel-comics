@extends('layout.app')

@section('content')
    <main>

        <div class="container">
            <div class="row ">
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3  d-flex p-3 mb-4 mt-4">
                        <a class="card" href="{{ route('show', ['id' => $loop->index]) }}">
                            <div class="card-img-top">
                                <img class="img-fluid h-100" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card-body">
                                <h4 class="p-4 mb-4 text-primary">{{ $comic['title'] }}</h4>
                            </div>
                        </a>


                    </div>
                @endforeach
            </div>

        </div>

    </main>
@endsection

