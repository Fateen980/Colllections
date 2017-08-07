@extends('layouts.default')


@section('content')

                @include('layouts.navBar')
                @include('layouts.headerCaption',['mainTitle' => "It's Kinda Like Everything for Your Wedding!"])
                @include('layouts.pageTitle')
                <section class="is-small">
                    <div class="container">
                        <div class="container px-5-widescreen">
                            <div class="columns is-multiline">

                @include('subCategory.subCategory')

                            </div>
                        </div>
                    </div>
                </section>

@endsection