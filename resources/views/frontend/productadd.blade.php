
@extends('frontend.layouts.main')
@section('main-container')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2> <strong>{{$title}}</strong></h2>
         

          <form action="#" method="post">
        @csrf
    


    <div class="container">
   
    <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{route('seller.create')}}" enctype="multipart/form-data"  method="post" role="form" class="">
              @csrf
              @if($title == "Update Product") 
              <div class="col-md-6 form-group">
                  <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter product name" required value = "{{$product->product_name}}">
                </div>
               <br>
                <div class="col-md-6 form-group">
                <div class="col-md-6 form-group">
                
                <input type="text" name="Description" class="form-control" id="Description" placeholder="Enter product Description" required value = "{{$product->description}}">
              </div>

                  <!-- {!!Form::text('Description', '',[
                    'id' => "Description",
                    'required' => "",
                    'placeholder' => "Enter Description",
                    'class' => "form-control",
                    'value' => '{{$product->product_name}}'

                    ]) !!}
                </div> -->
                <br>
                <div class="col-md-6 form-group">
                <div class="col-md-6 form-group">
                  <input type="number" name="price" class="form-control" id="price" placeholder="Enter product price" required  value = "{{$product->price}}">
                </div>
                </div>
                <br>
                <div class="col-md-6 form-group">
                        <label for=""> Upload product image</label>
                        <input type="file" name="pimage" class="form-control" id="pimage" placeholder="upload product image" required value = "{{$product->image}}" >
                    </div>    
                    <br>
                </div>
                
               
              <div class="text-left"><button type="submit">Update Product</button></div>
              @else
              <div class="col-md-6 form-group">
                  <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter product name" required>
                </div>
               <br>
                <div class="col-md-6 form-group">
                
                  <input type="text" name="Description" class="form-control" id="Description" placeholder="Enter product Description" required>
                </div>
                  <!-- {!!Form::text('Description', '',[
                    'id' => "Description",
                    'required' => "",
                    'placeholder' => "Enter Description",
                    'class' => "form-control", 
                    'value' => "yyyjjn"

                    ]) !!}
                </div> -->
                <br>
                <div class="col-md-6 form-group">
                <div class="col-md-6 form-group">
                  <input type="number" name="price" class="form-control" id="price" placeholder="Enter product price" required>
                </div>
                </div>
                <br>
                <div class="col-md-6 form-group">
                        <label for=""> Upload product image</label>
                        <input type="file" name="pimage" class="form-control" id="pimage" placeholder="upload product image" required>
                    </div>    
                    <br>
                </div>
                
                <select name="vehicle_type" class="form-control">
                    @foreach($cartype as $cartypes)   
                          <option value="{{ $cartypes}}">{{ $cartypes}}</option>
                    @endforeach
                </select>
              <div class="text-left"><button type="submit">Add Product</button></div>

              @endif

            </form>
          </div>

        </div>



      </div>
    </section><!-- End Our Team Section -->

    

    

  </main><!-- End #main -->
@endsection