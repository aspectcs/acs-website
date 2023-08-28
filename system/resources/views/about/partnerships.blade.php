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
        <div class="handshake-outer">
            <div class="handshake wow" data-wow-duration="1s" data-wow-delay="3s">
                <img src="@assets('images/elements/astronaut-handshake1.png')" data-wow-duration="3s"
                     data-wow-delay="0s" alt="" class="handshake1 wow">
                <img src="@assets('images/elements/astronaut-handshake2.png')" data-wow-duration="3s"
                     data-wow-delay="0s" alt="" class="handshake2 wow">
            </div>
        </div>
        <div class="container">

            <p class="h4 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


            <p class="h4 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>

    </section>
    <section>
        <div class="vh-100"></div>
        <div class="vh-100"></div>
    </section>
@endsection
@push('script')

@endpush
