@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">
                        <div class="column is-12">
                            <div class="panel">
                                <a class="panel-block">
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                <form action="{{ route('foos.store') }}" method="POST">
                                                    @csrf
                                                    <strong>Name</strong><br/><input type="text" name="myname"
                                                                                     id="name"><br/>
                                                    @error('name')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <strong>Wombat</strong><br/><input type="text" name="wombat"
                                                                                       id="wombat"><br/>
                                                    @error('wombat')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <strong>Thud</strong><br/><input type="text" name="thud"
                                                                                     id="thud"><br/>
                                                    @error('thud')
                                                    <p>{{ $message }}</p>
                                                    @enderror
                                                    <button type="submit">Submit</button>
                                                </form>
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
