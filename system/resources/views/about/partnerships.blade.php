@extends('layout.app')
@section('content')
    <section class="partnerships">
        <div class="container">
            <div class="heading" aria-hidden="true">
                <img src="@assets('images/elements/space-doodle8.png')" class="space-doodle8 floating-element" alt="">
                <p class="headline">Our Partnership</p>
                <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
            </div>
        </div>
        {{--<div id="body" class="grey lighten-2 valign-wrapper">
            <div id="opty_hands" class="valign">
                <div id="left-arm">
                    <div class="left-hand"><span>...</span></div>
                    <div class="left-shake"><span>_<br>_<br>_</span></div>
                </div>
                <div id="right-arm">
                    <div class="right-hand"><span>...</span></div>
                    <div class="right-shake"></div>
                </div>
            </div>
        </div>--}}
        <div class="handshake">
            <img src="@assets('images/elements/astronaut-handshake1.png')" alt="" class="handshake1">
            <div class="shine-effect"></div>
            <img src="@assets('images/elements/astronaut-handshake2.png')" alt="" class="handshake2">
        </div>
    </section>
    <section>
        <div class="vh-100"></div>
        <div class="vh-100"></div>
    </section>
@endsection
@push('script')

@endpush
