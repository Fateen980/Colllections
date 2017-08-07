@extends('layouts.default')


@section('content')

             @include('layouts.navBar')
             @include('layouts.headerCaption',['mainTitle' => "It's Kinda Like Everything for Your Wedding!"])

            <div class="columns is-multiline">
                @include('items.items')
            </div>


@endsection