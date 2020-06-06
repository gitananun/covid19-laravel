@extends('layouts.main')

@section('content')

    @include('inc.hero')
    <!-- END hero -->

    @include('inc.booking')
    <!-- END booking -->

    <div class="container mb-5" id="armenia" style="margin-top: 100px">
        <div class="row">
            <br/>
            <div class="col text-center">
                <h2><span class="text-danger">#COVID</span><span class="text-info">19</span> <span class="text-warning">ARMENIA</span></h2>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col">
                <div class="counter">
                    <img src="{{ asset('images/armicons/arm4.png') }}" width="150" alt="">
                    <h1 class="timer count-title count-number text-primary font-weight-bolder" data-to="{{ $armenia['todayCases'] }}" data-speed="1500"></h1>
                    <p class="count-text text-uppercase">Today Cases</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <img src="{{ asset('images/armicons/arm3.png') }}" width="150" alt="">
                    <h1 class="timer count-title count-number text-danger font-weight-bolder" data-to="{{ $armenia['todayDeaths'] }}" data-speed="1500"></h1>
                    <p class="count-text text-uppercase">Today Deaths</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <img src="{{ asset('images/armicons/arm1.png') }}" width="150" alt="">
                    <h1 class="timer count-title count-number text-success font-weight-bolder" data-to="{{ $armenia['cases'] }}" data-speed="1500"></h1>
                    <p class="count-text text-uppercase">Overall Cases</p>
                </div></div>
            <div class="col">
                <div class="counter">
                    <img src="{{ asset('images/armicons/arm2.png') }}" width="150" alt="">
                    <h1 class="timer count-title count-number text-dark font-weight-bolder" data-to="{{ $armenia['deaths'] }}" data-speed="1500"></h1>
                    <p class="count-text text-uppercase">Overall Deaths</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('countries.all') }}"><button class="btn btn-lg btn-info mt-5">SEE ALL COUNTRIES</button></a>
        </div>
    </div>

    @include('inc.team')
    <!-- END team -->

    @include('inc.about')
    <!-- END about -->

    @include('inc.gallery')
    <!-- END gallery -->

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-chiropractic mr-2"></span> Spinal Manupulation</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-electrotherapy mr-2"></span> Electrotherapy</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-lymph-nodes mr-2"></span> Manual Lympahtic</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-acupuncture mr-2"></span> Medical Acupuncture</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-examination mr-2"></span> Therapeutic Exercise</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-bone mr-2"></span> Joint Mobilization</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(images/work-2.jpg);"></div>
						  	<h3><a href="#">Spinal Manupulation</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/work-3.jpg);"></div>
						  	<h3><a href="#">Electrotherapy</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/work-4.jpg);"></div>
						  	<h3><a href="#">Manual Lymphatic</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(images/work-5.jpg);"></div>
						  	<h3><a href="#">Medical Acupuncture</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(images/work-6.jpg);"></div>
						  	<h3><a href="#">Therapeutic Exercise</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/work-1.jpg);"></div>
						  	<h3><a href="#">Joint Mobilization</a></h3>
						  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						  </div>
						</div>
					</div>
				</div>
    	</div>
    </section>


@endsection

@section('scripts')
    <script>

        // Armenia Results Counter
        (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};

                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from:            $(this).data('from'),
                        to:              $(this).data('to'),
                        speed:           $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals:        $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>

@endsection





