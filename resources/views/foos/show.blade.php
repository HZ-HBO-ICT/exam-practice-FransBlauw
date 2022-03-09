@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">
                        <div class="column is-12">
                            <div class="panel" style="background-color: {{$foo->wombat ? '#1aa1ff' : 'white'}}">
                                <a class="panel-block">
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>{{ $foo->name }}</strong>
                                                    <small>{{ $foo->updated_at }}</small>
                                                    <br>
                                                    <strong>Wombat: </strong>{{ $foo->wombat }}<br/>
                                                    <strong>Thud: </strong>{{ $foo->thud }}<br/>
                                                    <strong>Kazaam: </strong>{{ $foo->kazaam }}
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
