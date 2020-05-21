@extends('layouts.app2')

@section('content')
<div class="container">
  <section id="One" class="wrapper style3">
      <div class="inner">
          <header class="align-center">
              <h2>Contact Us</h2>
          </header>
      </div>
  </section>
  <p><img src="img/third.jpg" class="img-fluid" alt="Responsive image"></p>

  <div class="container">
      <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-8">
              <div class="row mb-5">
                  <div class="col-md-4 text-center py-4">
                      <div class="icon">
                      </div>
                  </div>
                  <p><span>Address:</span> KM 47, Lekki Epe Expressway Ogidan, Ajah, Lagos</p>
              </div>
              <div class="col-md-4 text-center border-height py-4">
                  <div class="icon">
                  </div>
                  <p><span>Phone:</span> <a href="">+2347067828916</a></p>
              </div>
              <div class="col-md-4 text-center py-4">
                  <div class="icon">
                  </div>
                  <p><span>Email:</span> <a href="">info@mooveet.com</a></p>
              </div>
          </div>
      </div>
  </div>
  <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
          <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
          <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
          </form>

      </div>
  </div>
</div>
@endsection