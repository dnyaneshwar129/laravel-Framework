@extends('frontend.layouts.main')
@section('main-container')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Register</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Login  Section ======= -->
  
    <section id="contact" class="contact">
      <div class="container">
  

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{route('seller.create')}}" enctype="multipart/form-data"  method="post" role="form" class="php-email-form">
              @csrf
            <div> <h3 Class ="" >Seller Registration</h3></div>

              
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <!-- <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div> -->

                <div class="col-md-6 form-group">
                  <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Enter your email" required> -->
                  {!!Form::text('email', '',[
                    'id' => "email",
                    'required' => "",
                    'placeholder' => "Enter your email",
                    'class' => "form-control"

                    ]) !!}
                </div>
                <div class="col-md-6 form-group">
                  <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Enter your email" required> -->
                  {!!Form::text('businessname', '',[
                    'id' => "shopname",
                    'required' => "",
                    'placeholder' => "Enter your business name",
                    'class' => "form-control"

                    ]) !!}
                </div>


                <div class="col-md-6 form-group">
                  <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Enter your email" required> -->
                  {!!
                    Form::select
                    (
                    'country',[
                      "1" => "India",
                      "2" => "America",
                      "3" => "England",
                      ],
                      "3",
                      [
                       'id' => "country", 
                       'required' => "", 
                       'placeholder' => "Select your county",
                        'class' => "form-control"
                        ]
                    

                    ) 
                    !!}
                </div>
                
                    <div class="col-md-6 form-group">
                        <label for=""> Upload Profile image</label>
                        <input type="file" name="avatar" class="form-control" id="avatar" placeholder="upload image" required>
                    </div>    

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="passwrord" placeholder="Enter your password" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm your passowrd" required>
                </div>
             
             

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Registrtion successful, Plaase check email </div>
              </div>
              
              <div class="text-left"><button type="submit">Register</button></div>
              <p class="message">alredy registered? <a href="/login">Login here</a></p>
            </form>
          </div>

        </div>

      </div>
    </section>  <!-- End Contact Section -->


  </main><!-- End #main -->
@endsection