@extends('frontend.layouts.main')
@section('main-container')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Login</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  <!-- ======= Login  Section ======= -->
  
  <section id="contact" class="contact">
      <div class="container">
  

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
            {!! Form::open([
             'url' => url('login'),
             'method' =>'post',
             'id' => 'login',
             'role' => 'form',
             'class' => 'php-email-form',
             'enctype' => 'multipaart/form-data'
            ]) !!}
            <!-- @csrf -->
            <div> <h3 Class ="" >User Login</h3></div>

              
                <div class="col-md-6 form-group">
                  <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Enter your email" required> -->
                  {!!Form::text('email', '',[
                    'id' => "email",
                    'required' => "",
                    'placeholder' => "Enter your email",
                    'class' => "form-control"

                    ]) !!}
                </div>
               

          

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="passwrord" placeholder="Enter your password" required>
                </div>
                
             
             

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-left"><button type="submit">Login</button></div>
              <p class="message">Not registered? <a href="{{route('seller.create')}}">Create an account</a></p>
            <!-- </form> -->
            {{-- nkkk --}}
            {!! Form::close() !!}
          </div>

        </div>

      </div>
    </section>  <!-- End Contact Section -->
   

  </main><!-- End #main -->
@endsection