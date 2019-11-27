@extends('homemaster')
@section('page-title')
Avishranta Aryal|Web Developer from Nepal
@endsection
@section('content')

<section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>I'M Avishranta Aryal</h2>
            <div class="line-dec"></div>
            
          </div>
          <div class="left-image-post">
            <div class="row">
              
              <div class="col-md-8">
                <div class="right-text">
                  <h3>"Failure Teaches Me"</h3>
                  
                  <p align="justify">
                    Before college, I never really had a specific career goal; funnily I just wanted to be the next creator of cool things. But as time went by, I started exploring co-curricular activities. I started to learn differeent  Programming languages and my interest in the field of IT increased day by day. I researched and explore many projects and try to make my own. Then my vision was cleared. I made a goal to be IT specialist.
                  </p>
                  
                </div>
              </div>
              <div class="col-md-4 ">
                
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>About Me</h4>
                  <p align="justify">
                   He solves design problems and implement their technical solutions.He loves to learn new things about technologies.
                  </p>
                  <div class="white-button">
                      <button type="button" class="btn-primary" data-toggle="modal" data-target="#example">
                          Read More
                        </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="{{url('public/frontend/assets/images/right-image.jpg')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
                <!--Modal-->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               ........................
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 ........................
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
    @endsection  