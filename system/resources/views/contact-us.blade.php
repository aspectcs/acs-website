@extends('layout.app')
@section('content')
    <section class="container" id="contact-us">
        <div class="heading" aria-hidden="true">
            <img src="@assets('images/elements/space-doodle4.png')" class="space-doodle6 floating-element" alt="">
            <img src="@assets('images/elements/astronaut-with-laptop.png')" class="astronaut-with-laptop floating-element" alt="">
            <p class="headline">Contact us</p>
            <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
        </div>
       <div class="container">
           <form action="">
               <div class="row">
                   <div class="col-12 col-md-6">
                       <div class="form-group">
                           <label for="name">Your Name</label>
                           <input type="text" name="name" id="name" class="form-control"/>
                       </div>
                   </div>
                   <div class="col-12 col-md-6">
                       <div class="form-group">
                           <label for="organisation">Your Organisation name</label>
                           <input type="text" name="organisation" id="organisation" class="form-control"/>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12 col-md-6">
                       <div class="form-group">
                           <label for="email">Your Email</label>
                           <input type="text" name="email" id="email" class="form-control"/>
                       </div>
                   </div>
                   <div class="col-12 col-md-6">
                       <div class="form-group">
                           <label for="name">Your Number</label>
                           <input type="text" name="phone" id="email" class="form-control"/>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12 col-md-12">
                       <div class="form-group">
                           <label for="website-social">Website/Social media link</label>
                           <textarea name="website-social" id="website-social" class="form-control"></textarea>
                       </div>
                   </div>
               </div>
               <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg flat-button">Submit</button>

           </form>
       </div>
    </section>
@endsection
