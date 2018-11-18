@extends('backend.master')
@section('content')
<div class="row page-tilte align-items-center">
  <div class="col-md-auto">
    <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
    <h1 class="weight-300 h3 title">Modals / Popups</h1>
    <p class="text-muted m-0 desc">Slides &amp; Modals examplaes</p>
  </div>
  <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
    <div class="controls d-flex justify-content-center justify-content-md-end">
    </div>
  </div>
</div>
<div class="content">
  <div class="row">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <div class="card ">
        <div class="card-header">Basic Modals</div>
        <div class="card-body">
          <div class="media align-items-center">
            <div class="media-body">Basic modal with animation</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#basicModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Basic modal with no animation</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#noAnimationModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Long content scrolling modal </div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#longModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Verticaly middle aligned modal </div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#middleModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Small size modal</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#smallModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Large size modal</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#largeModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Form embed in modal</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#formModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Image embed in modal</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#imgModal">View Demo</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card h-100">
        <div class="card-header">Slide Modals</div>
        <div class="card-body">
          <div class="media align-items-center">
            <div class="media-body">Slide modal from right</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideRightModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Slide modal from left</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideLeftModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Slide form modal from right</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideRightFormModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Slide small modal from right</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideRightSmallModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Slide large from right</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideRightLargeModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Slide small modal from left</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideLeftSmallModal">View Demo</button>
          </div>
          <hr>
          <div class="media align-items-center">
            <div class="media-body">Slide large modal from left</div>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#slideLeftLargeModal">View Demo</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection