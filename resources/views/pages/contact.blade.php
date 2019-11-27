@extends('homemaster')
@section('page-title')
Avishranta Aryal|Web Developer from Nepal
@endsection
@section('content')
<section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Contact Me</h2>
            <div class="line-dec"></div>
            <span>
                Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
              efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.
            </span>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h2>Contact:</h2>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;<b>Dakshinkali 07, Kathmandu</b></p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<b>(+977) 9860128654</b></p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;<b>aryalavishranta@gmail.com</b></p>
            </div>
            <div class="col-md-6">
              <h2>Get In Touch</h2>
             <form action="">
               <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Full Name">
                 </div>
                 <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder="E-mail Address">
                </div>
                <div class="form-group">
                <input class="form-control" type="number" name="phone" placeholder="Phone">  
                </div>
                
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Message"></textarea>         
                </div>
                <button type="submit" class="btn btn-info">&nbsp;&nbsp;SEND&nbsp;&nbsp;</button>
        
             </form>
              
            </div>
            <div class="col-md-12" style="padding-top: 50px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1767.7460418379026!2d85.26893259132257!3d27.6092724418817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDM2JzMzLjQiTiA4NcKwMTYnMTIuMiJF!5e0!3m2!1sne!2snp!4v1574752060646!5m2!1sne!2snp" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            

          </div>

          
          </div>
          
      </section>
      @endsection