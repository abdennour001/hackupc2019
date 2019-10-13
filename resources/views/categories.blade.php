@extends('layouts.app')

@section('content')
    <div class="container-fluid p-5">
        <div class="row text-center pb-4">
            <div class="col-12">
                <div class="row text-center">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <h1 class="display-4">Categories</h1>
                    </div>
                    <div class="col-4 text-right">
                        <a id="movetohome" href="#"><img src="assets/arrow.png" alt="arrow_img"></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <hr class="w-25" style="background: #F44463; opacity: 0.5;">
            </div>
        </div>
        <div class="row text-center mt-5" style="height: 80vh">
            {{--            row 1--}}
            <div class="col-4 pb-4">
                <div class="box animals" data-category="animals">
                    <div class="content">
                        <div class="title">
                            <h2>Animals</h2>
                        </div>
                        <div>
                            <i id="animals" class="fa fa-check checked-symbol not-display-i"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-4">
                <div class="box science" data-category="science">
                    <div class="content">
                        <div class="title">
                            <h2>Science</h2>
                        </div>
                        <div>
                            <i id="science" class="fa fa-check checked-symbol not-display-i"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-4">
                <div class="box sport" data-category="sport">
                    <div class="content">
                        <div class="title">
                            <h2>Sport</h2>
                        </div>
                        <div>
                            <i id="sport" class="fa fa-check checked-symbol not-display-i"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{--            row 2--}}
            <div class="col-4 pb-4">
                <div class="box history" data-category="history">
                    <div class="content">
                        <div class="title">
                            <h2>History</h2>
                        </div>
                        <div>
                            <i id="history" class="fa fa-check checked-symbol not-display-i"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-4">
                <div class="box gaming" data-category="gaming">
                    <div class="content">
                        <div class="title">
                            <h2>Gaming</h2>
                        </div>
                        <div>
                            <i id="gaming" class="fa fa-check checked-symbol not-display-i"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 pb-4">
                <div class="box ai" data-category="ai">
                    <div class="content">
                        <div class="title">
                            <h2>AI</h2>
                        </div>
                        <div>
                            <i id="ai" class="fa fa-check checked-symbol not-display-i"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let selectedCategories = [];

        $(document).ready(function() {
            $('body').css('position','relative').css('padding','100px');
            $('.box').on('click', function (e) {
                console.log(selectedCategories);


                let box = $( this );
                let category = box.attr("data-category");
                let checkMark = $('#'+category);
                if (!selectedCategories.includes(category)) {
                    selectedCategories.push(category);
                    box.addClass('checked');
                    checkMark.removeClass('not-display-i');
                    checkMark.addClass('display-i');
                } else {
                    selectedCategories.splice(selectedCategories.indexOf(category), 1);
                    box.removeClass('checked');
                    checkMark.removeClass('display-i');
                    checkMark.addClass('not-display-i');
                }
            });

            $('#movetohome').on('click',function(e){
                console.log('less than 0');
                if(selectedCategories.length > 0){
                    console.log('more than 0');
                    //e.preventDefault();
                    window.location.replace("http://localhost:8000/home");
                }
            });

        });
    </script>
@endsection
