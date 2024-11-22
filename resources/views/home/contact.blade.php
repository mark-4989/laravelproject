<div class="contact" id="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>
          </div>
          {{-- <div style="color: red; font-size:bold;">
          @if (session()->has('message'))
             {{ session()->get('message') }}
          @endif
          </div> --}}
          @if (session()->has('message'))
          <div class="alert alert-success">
           {{-- <button type="button" class="close" data-bs-dismiss="alert" >X</button> --}}
             {{ session()->get('message') }}
          </div>
          @endif
  
          @if ($errors)
  
          @foreach ($errors->all() as $errors )
  
          <li style="color: red;">
           {{ $errors }}
          </li>
             
          @endforeach
          @endif
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" action="{{url('contact')  }}" method="POST">
               @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name" type="type" name="name"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="email" name="email"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone Number" type="number" name="phone">                          
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" type="type" name="message">Message</textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn" type="submit">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>