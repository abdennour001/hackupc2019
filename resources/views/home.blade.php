@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 p-5">
        <div class="row text-center">
            <div class="col-12 mb-5">
                <img style="width: 20%" src="https://miro.medium.com/max/6580/1*m7y8V4eoihnIcGm-ZL-z0A.png" alt="logo goes here...">
            </div>
            <div class="col-12 mb-5">
                <h1 class="display-4">Our HackUPC 2019 nice App</h1>
            </div>
            <div class="col-12 mb-5">
                <p class="lead" style="font-size: 1.3rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="link-container">
                        <a href="#" class="custom-link" data-toggle="modal" data-target="#modalYT"><i class="fa fa-rocket"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal: modalYT-->
        <div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center">
                        <span class="mr-4" style="font-size: 1.2rem">This is poppup window, You can wait here...</span>
                    </div>

                    <!--Body-->
                    <div class="modal-body mb-0 p-0">
                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                    allowfullscreen></iframe>
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-column flex-md-row">
                        <span class="mr-4">Spread the word!</span>
                        <div>
                            <a type="button" class="btn-floating btn-sm btn-fb">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-sm btn-tw">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-sm btn-gplus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <!--Linkedin-->
                            <a type="button" class="btn-floating btn-sm btn-ins">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                data-dismiss="modal">Close</button>


                    </div>

                </div>
                <!--/.Content-->

            </div>
        </div>
        <!--Modal: modalYT-->
    </div>
@endsection
