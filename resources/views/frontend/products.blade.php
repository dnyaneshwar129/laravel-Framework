
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
          <h2>Our <strong>Products</strong></h2>
          <form action="" >
          <input type="search" class="col-8" name="search" placeholder= "Enter Keyword" value="{{$search}}"   /> 
          <button type="submit" class="Searchbtn">Search</button>
          <a href="{{url('/products/listing')}}">
          <button type="button" class="Searchbtn">Reset</button>
          </a>
          
          </form>  
          <br>
           <span><a href="/products/add"> 
          <button class = "float-right" >Add</button> 
            </a> </span>
          
          </div>
          <table class="table">
          
          <thead>
             

              <tr>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>image</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Acions</th>
              </tr>
            
            </thead>
          <tbody>
            @foreach ($product as $productvalue)
                    <tr>              
                   <td>{{ $productvalue->product_name}}</td>
                   <td>{{ $productvalue->description}}</td>
                   <td><img src="/admin/product/{{$productvalue->image}}" height="30px" width="30px" /> </td> 
                   <!-- //{{ $productvalue->image}} -->
                   <td>{{ $productvalue->price}}</td>
                   <td>{{ $productvalue->status}}</td>
                   <td><a href="{{route('products.delete', ['id' => $productvalue->product_id ]) }}">Trash</a>
                    
                    <a href="{{route('products.edit', ['id' => $productvalue->product_id ]) }}">
                       <button> Edit  </button>
                     </a>
                    </td>

           @endforeach
           </tbody>
      </table>
          <div>
            {{$product->links()}}
          </div>

      </div>
    </section><!-- End Our Team Section -->

    

    

  </main><!-- End #main -->
@endsection