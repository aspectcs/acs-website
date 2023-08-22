@extends('layout.app')
@section('content')
    <section class="core-values">
        <div class="core-values-container">
        <div class="top-left">
                <img src="https://picsum.photos/seed/das/640/360"  alt="">
            <div class="position-absolute">
                <span class="h3">Value 1</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            </div>
            <div class="top-right">
                <img src="https://picsum.photos/seed/as/640/360" alt="">
                <div class="position-absolute">
                    <span class="h3">Value 1</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="center d-flex align-items-center justify-content-center">
                <span class="h1 stroke-text w-auto text-center">Core values</span>
{{--                <img src="https://dummyimage.com/640x360/fff/000" alt="">--}}
            </div>
            <div class="bottom-left">
                <img src="https://picsum.photos/seed/dsdas/640/360"  alt="">
                <div class="position-absolute">
                    <span class="h3">Value 1</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="bottom-right">
                <img src="https://picsum.photos/seed/ds/640/360"  alt="">
                <div class="position-absolute">
                    <span class="h3">Value 1</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
