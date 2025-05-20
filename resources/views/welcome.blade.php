@extends('layouts.app')

@section('content')
                <section id="main">
                    <div class="container">

                          @foreach ($postagens as $value)
                          <article class="box post">
                            <header>
                               <h2>{{ $value->titulo }}</h2>
                               <p>Categoria: {{ $value->categoria->nome}}</p>
                            </header>
                            <p>{!! $value->descricao !!}</p>
                            </article>
                          @endforeach


                    </div>
                </section>
                {{ $postagens->links() }}

@endsection
