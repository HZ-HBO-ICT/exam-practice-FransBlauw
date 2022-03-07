@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">News</p>
                <p class="subtitle is-3">The latest news on the HZ</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="{{route('foos.create')}}" class="button is-primary">Add a new foo...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($foos as $foo)
                                <div class="panel" style="background-color: {{$foo->wombat ? '#1aa1ff' : 'white'}}">
                                    <a class="panel-block" href="{{ route('foos.show', $foo) }}">
                                        <article class="media">
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $foo->name }}</strong>
                                                        <small>{{ $foo->updated_at }}</small>
                                                        <br>
                                                        <strong>Wombat - </strong>{{ $foo->wombat }}<br/>
                                                        <strong>Thud - </strong>{{ $foo->thud }}<br/>
                                                        <strong>Kazaam - </strong>{{ $foo->kazaam }}
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                            {{$foos->links()}}
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
