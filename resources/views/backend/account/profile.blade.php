@extends('backend.master')

@push('styles')
    {{-- <link rel="stylesheet" href="backend/css/ekko-lightbox/ekko-lightbox.css"> --}}
@endpush

@push('scripts')
	 {{-- <script src="backend/js/ekko-lightbox/ekko-lightbox.js"></script> --}}
@endpush

@section('content')
<div class="row page-tilte align-items-center">
  <div class="col-md-auto">
    <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
    <h1 class="weight-300 h3 title">Profile Page</h1>
    <p class="text-muted m-0 desc">Tell about your self here</p>
  </div>
  <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
    <div class="controls d-flex justify-content-center justify-content-md-end">
    </div>
  </div>
</div>
<div class="content">
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="mx-5 my-4 px-4">
            <img src="backend/images/akshay.jpg" class="img-thumbnail img-fluid rounded-circle">
          </div>
          <div class="text-center">
            <h5 class="weight-400">Hello, Akshay Kumar</h5>
            <p class=" text-muted">UI/UX Developer</p>
            <button class="btn btn-info px-4 rounded mx-1">Follow</button>
            <button class="btn btn-danger px-4 rounded mx-1">Message</button>
          </div>
          <hr class="my-4 dashed">
          <p><span class="weight-400">Mobile : </span><span class="text-muted">+91 9990 826 292</span></p>
          <p><span class="weight-400">Email Address : </span><span class="text-muted">akshay.azaste@gmail.com</span></p>
          <p><span class="weight-400">Website : </span><span class="text-muted">http://freakpixels.com</span></p>
          <p><span class="weight-400">Location : </span><span class="text-muted">Delhi, India</span></p>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-header p-0">
          <ul class="nav nav-tabs active-thik nav-primary border-0" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link px-4 py-3 active rounded-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-3 rounded-0" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="true">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-3 rounded-0" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="true">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-3 rounded-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h5 class="weight-400">Summary</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id pulvinar dolor, vel porta nisi. Vestibulum id libero pretium, semper neque eget, consectetur nisl. Fusce sodales condimentum placerat. Quisque sed fringilla elit, ut sollicitudin tellus. Sed non condimentum dui, a pulvinar lorem. Nulla eu tortor ante.</p>
              <p>Sed eget risus eget lorem dictum pretium. Cras interdum eu ex vel ultricies. Vestibulum ut arcu sagittis lectus tincidunt viverra quis non sapien. Curabitur pellentesque tortor vel justo lacinia, non lacinia sem aliquet. Ut elementum, magna vel porttitor gravida, nunc enim viverra est, eu congue lectus massa eget nisi. Pellentesque id dui turpis. Vestibulum tincidunt, eros at suscipit molestie, mauris odio iaculis nisl, eu dapibus velit mauris vitae orci. Cras vel velit lobortis, venenatis dui in, bibendum massa. Nulla aliquam elementum semper. Aenean non velit velit. Etiam ullamcorper auctor turpis, id varius diam molestie ac. </p>
              <p>Nulla mattis pharetra enim, at sodales augue facilisis et. Maecenas vehicula vehicula est sed elementum. Sed sed mi vitae mi molestie commodo. Phasellus in leo ut leo ultricies mattis sit amet sed arcu. Vivamus vehicula dignissim lorem sit amet vulputate. Aenean in elit odio. Aliquam erat volutpat. Maecenas vel ultrices arcu.</p>
              <h5 class="weight-400 mt-5">Basic Info</h5>
              <p>Ut ultricies libero lorem, vitae pretium lacus ultrices at. Maecenas et eros vel ipsum laoreet mollis. Proin posuere ex nunc, vel aliquam risus cursus et. Mauris tincidunt lorem sit amet commodo blandit. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Pellentesque sit amet lectus leo.</p>
              <p>Sed vehicula elit massa, quis ultrices arcu gravida pretium. Nam eu quam lobortis, rutrum arcu eu, rutrum leo. Donec sodales diam sit amet ex ornare tristique. Nulla venenatis dui luctus metus placerat mollis ut at lacus. Nulla interdum urna quis libero laoreet vestibulum.</p>
            </div>
            <div class="tab-pane fade " id="messages" role="tabpanel" aria-labelledby="messages-tab">
              <ul class="messgaes mb-4">
                <li class="media">
                  <div class="mr-4"><img src="backend/images/avtar4.png" class="user-thumb"></div>
                  <div class="media-body messgae-bubble bg-warning-light25 ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</small>
                  </div>
                </li>
                <li class="media flex-row-reverse">
                  <div class="ml-4"><img src="backend/images/avtar3.png" class="user-thumb"></div>
                  <div class="media-body from-you messgae-bubble bg-light ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300">Fusce condimentum nunc ac nisi vulputate fringilla.</small>
                  </div>
                </li>
                <li class="media">
                  <div class="mr-4"><img src="backend/images/avtar1.png" class="user-thumb"></div>
                  <div class="media-body messgae-bubble bg-warning-light25 ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300"> Sure. and Thanks !</small>
                  </div>
                </li>
                <li class="media">
                  <div class="mr-4"><img src="backend/images/avtar4.png" class="user-thumb"></div>
                  <div class="media-body messgae-bubble bg-warning-light25 ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                  </div>
                </li>
                <li class="media flex-row-reverse">
                  <div class="ml-4"><img src="backend/images/avtar3.png" class="user-thumb"></div>
                  <div class="media-body from-you messgae-bubble bg-light ">
                    <h6 class="mt-0 weight-400">kevin Dossey</h6>
                    <small class="text-muted weight-300">Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</small>
                  </div>
                </li>
              </ul>
              <div class="media">
                <div class="media-body">
                  <input type="text" class="form-control" placeholder="Type Message here...">
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="photos" role="tabpanel" aria-labelledby="photos-tab">
              <div class="row flex-lg-column" style="max-height: 1530px;">
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/500?image=1" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/500?image=1" class="img-thumbnail bg-white img-fluid mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=2" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/900?image=2" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"  data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/1024?image=4" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/600?image=19" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/600?image=19" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=18" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/550?image=18" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/950?image=11" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=7" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/400?image=7" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/600?image=22" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=6" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/1024?image=6" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=13" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/800?image=13" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=17" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/600?image=17" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/450?image=5" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/900?image=14" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/800?image=27" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/600?image=3" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
                <div class="col-md-6 col-lg-4">
                  <a href="https://picsum.photos/700/900?image=6" data-gallery="example-gallery" data-toggle="lightbox" >
                  <img src="https://picsum.photos/700/700?image=6" class="img-thumbnail img-fluid bg-white mb-4">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <p class="mb-4">Nulla mattis pharetra enim, at sodales augue facilisis et. Maecenas vehicula vehicula est sed elementum. Sed sed mi vitae mi molestie commodo. Phasellus in leo ut leo ultricies mattis sit amet sed arcu. Vivamus vehicula dignissim lorem sit amet vulputate. Aenean in elit odio. Aliquam erat volutpat. </p>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="First name">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" >
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
              <button class="btn btn-success text-white mt-4">Send Message</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection