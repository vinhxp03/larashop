@extends('backend.master')
@section('content')
<div class="row page-tilte align-items-center">
    <div class="col-md-auto">
      <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
      <h1 class="weight-300 h3 title">Theme Settings</h1>
      <p class="text-muted m-0 desc">Customize your template from here.</p>
    </div>
    <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
      <div class="controls d-flex justify-content-center justify-content-md-end">
      </div>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" id="default" primary-color="primary" sidebar-bg="dark" logo-bg="primary" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-primary"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="primary" sidebar-bg="light" logo-bg="primary" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-primary"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="primary" sidebar-bg="light" logo-bg="dark" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-dark"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="primary" sidebar-bg="light" logo-bg="primary" header-bg="primary">
              <div class="left-bar bg-white">
                <div class="top-bar bg-primary"></div>
              </div>
              <div class="top-bar bg-primary"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="primary" sidebar-bg="dark" logo-bg="primary" header-bg="primary">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-primary"></div>
              </div>
              <div class="top-bar bg-primary"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="primary" sidebar-bg="dark" logo-bg="primary" header-bg="dark">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-primary"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <h5 class="weight-400">Primary Color (blue)</h5>
        <p class="text-muted">Blue is one of the three primary colours of pigments in painting and traditional colour theory, as well as in the RGB colour model. It lies between violet and green on the spectrum of visible light. </p>
      </div>
    </div>
    <hr class="mb-5 mt-4">
    <div class="row">
      <div class="col-lg">
        <div class="row swatch">
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="danger" sidebar-bg="dark" logo-bg="danger" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-danger"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="danger" sidebar-bg="light" logo-bg="danger" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-danger"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="danger" sidebar-bg="light" logo-bg="dark" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-dark"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="danger" sidebar-bg="light" logo-bg="danger" header-bg="danger">
              <div class="left-bar bg-white">
                <div class="top-bar bg-danger"></div>
              </div>
              <div class="top-bar bg-danger"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="danger" sidebar-bg="dark" logo-bg="danger" header-bg="danger">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-danger"></div>
              </div>
              <div class="top-bar bg-danger"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="danger" sidebar-bg="dark" logo-bg="danger" header-bg="dark">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-danger"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <h5 class="weight-400">Danger Color (red)</h5>
        <p class="text-muted">Since red is the color of blood, it has historically been associated with sacrifice, danger and courage. Modern surveys in Europe and the United States show red is also the color most commonly associated with heat, activity, passion, sexuality, anger, love and joy. In China, India and many other Asian countries it is the color of symbolizing happiness and good fortune.[5]</p>
      </div>
    </div>
    <hr class="mb-5 mt-4">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="success" sidebar-bg="dark" logo-bg="success" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-success"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="success" sidebar-bg="light" logo-bg="success" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-success"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="success" sidebar-bg="light" logo-bg="dark" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-dark"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="success" sidebar-bg="light" logo-bg="success" header-bg="success">
              <div class="left-bar bg-white">
                <div class="top-bar bg-success"></div>
              </div>
              <div class="top-bar bg-success"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="success" sidebar-bg="dark" logo-bg="success" header-bg="success">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-success"></div>
              </div>
              <div class="top-bar bg-success"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="success" sidebar-bg="dark" logo-bg="success" header-bg="dark">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-success"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <h5 class="weight-400">Success Color (green)</h5>
        <p class="text-muted">In surveys made in American, European, and Islamic countries, green is the color most commonly associated with nature, life, health, youth, spring, hope and envy.[3] In the European Union and the United States, green is also sometimes associated with toxicity and poor health,[4] but in China and most of Asia, its associations are very positive, as the symbol of fertility and happiness.</p>
      </div>
    </div>
    <hr class="mb-5 mt-4">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="warning" sidebar-bg="dark" logo-bg="warning" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-warning"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="warning" sidebar-bg="light" logo-bg="warning" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-warning"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="warning" sidebar-bg="light" logo-bg="dark" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-dark"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="warning" sidebar-bg="light" logo-bg="warning" header-bg="warning">
              <div class="left-bar bg-white">
                <div class="top-bar bg-warning"></div>
              </div>
              <div class="top-bar bg-warning"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="warning" sidebar-bg="dark" logo-bg="warning" header-bg="warning">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-warning"></div>
              </div>
              <div class="top-bar bg-warning"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="warning" sidebar-bg="dark" logo-bg="warning" header-bg="dark">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-warning"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <h5 class="weight-400">Warning Color (yellow)</h5>
        <p class="text-muted">According to surveys in Europe, Canada, and the United States, yellow is the color people most often associate with amusement, gentleness, humor, and spontaneity, but also with duplicity, envy, jealousy, avarice, and, in the U.S., with cowardice.</p>
      </div>
    </div>
    <hr class="mb-5 mt-4">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="info" sidebar-bg="dark" logo-bg="info" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-info"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="info" sidebar-bg="light" logo-bg="info" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-info"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="info" sidebar-bg="light" logo-bg="dark" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-dark"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="info" sidebar-bg="light" logo-bg="info" header-bg="info">
              <div class="left-bar bg-white">
                <div class="top-bar bg-info"></div>
              </div>
              <div class="top-bar bg-info"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="info" sidebar-bg="dark" logo-bg="info" header-bg="info">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-info"></div>
              </div>
              <div class="top-bar bg-info"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="info" sidebar-bg="dark" logo-bg="info" header-bg="dark">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-info"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <h5 class="weight-400">Info Color (teal)</h5>
        <p class="text-muted">Teal is a medium blue-green (primarily blue) color, similar to cyan. Its name comes from that of a bird—the common teal (Anas crecca)—which presents a similarly colored stripe on its head.</p>
      </div>
    </div>
    <hr class="mb-5 mt-4">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="white" sidebar-bg="dark" logo-bg="white" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-white"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="white" sidebar-bg="light" logo-bg="white" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-white"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="white" sidebar-bg="light" logo-bg="dark" header-bg="dark">
              <div class="left-bar bg-white">
                <div class="top-bar bg-dark"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="white" sidebar-bg="light" logo-bg="white" header-bg="white">
              <div class="left-bar bg-white">
                <div class="top-bar bg-white"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="white" sidebar-bg="dark" logo-bg="white" header-bg="white">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-white"></div>
              </div>
              <div class="top-bar bg-white"></div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="color-swatch theme-changer" primary-color="white" sidebar-bg="dark" logo-bg="white" header-bg="dark">
              <div class="left-bar bg-dark">
                <div class="top-bar bg-white"></div>
              </div>
              <div class="top-bar bg-dark"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <h5 class="weight-400">White Color (white)</h5>
        <p class="text-muted">According to surveys in Europe and the United States, white is the color most often associated with perfection, the good, honesty, cleanliness, the beginning, the new, neutrality, and exactitude.[1] White is an important color for almost all world religions.</p>
      </div>
    </div>
  </div>
@endsection