@extends('artikeltemplate.artikelbase')

@section('content')
<div class="container">
  <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="card">
            <div class="card-body">
              	TENTANG KAMI
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

            </div>
          </div>
        </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">vitae</a></li>
                                        <li><a href="#!">amet</a></li>
                                        <li><a href="#!">sit</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">blandit</a></li>
                                        <li><a href="#!">amet</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>
      </div>
      </div>
  </div>

<!-- Stack the columns on mobile by making one full-width and the other half-width -->
@endsection
