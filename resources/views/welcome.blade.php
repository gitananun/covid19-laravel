@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="">
@endsection

@section('content')

    @include('inc.hero')
    <!-- END hero -->

    @include('inc.booking')
    <!-- END booking -->

    @include('inc.symptoms')
    <!-- END Symptoms -->

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
            <a href="{{ route('countries.all') }}"><button class="btn btn-lg btn-info mt-4 mb-5">SEE ALL COUNTRIES</button></a>
        </div>
    </div>

    @include('inc.team')
    <!-- END team -->

    @include('inc.about')
    <!-- END about -->

    @include('inc.gallery')
    <!-- END gallery -->

    <section class="ftco-section" id="protect">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Coronavirus Disease 2019 (COVID-19)</span>
            <h2 class="mb-4">How to Protect Yourself & Others</h2>
            <p>Older adults and people who have severe underlying medical conditions like heart or lung disease or diabetes seem to be at higher risk for developing serious complications from COVID-19 illness. </p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">
                                <span class="mr-2">
                                    <img src="{{ asset("fonts/flaticon/img/hand-wash.png") }}" alt="" width="50">
                                </span>
                                Wash your hands often
                            </a>
						  </li>
						  <li class="nav-item text-left">
                              <a class="nav-link py-4" data-toggle="tab" href="#services-2">
                                <span class="mr-2">
                                    <img src="{{ asset("fonts/flaticon/img/covid.png") }}" alt="" width="50">
                                </span>
                                  Avoid close contact
                              </a>
						  </li>
						  <li class="nav-item text-left">
                              <a class="nav-link py-4" data-toggle="tab" href="#services-3">
                                <span class="mr-2">
                                    <img src="{{ asset("fonts/flaticon/img/mask.png") }}" alt="" width="50">
                                </span>
                                  Cover Your mouth and nose
                              </a>
						  </li>
						  <li class="nav-item text-left">
                              <a class="nav-link py-4" data-toggle="tab" href="#services-4">
                                <span class="mr-2">
                                    <img src="{{ asset("fonts/flaticon/img/cough.png") }}" alt="" width="50">
                                </span>
                                  Cover coughs and sneezes
                              </a>
						  </li>
						  <li class="nav-item text-left">
                              <a class="nav-link py-4" data-toggle="tab" href="#services-5">
                                <span class="mr-2">
                                    <img src="{{ asset("fonts/flaticon/img/clean.png") }}" alt="" width="50">
                                </span>
                                  Clean and Disinfect
                              </a>
                          </li>
						  <li class="nav-item text-left">
                              <a class="nav-link py-4" data-toggle="tab" href="#services-6">
                                <span class="mr-2">
                                    <img src="{{ asset("fonts/flaticon/img/monitoring.png") }}" alt="" width="50">
                                </span>
                                  Monitor Your Health
                              </a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url({{ asset('images/protect/hands.jpeg') }});"></div>
						  	<h3><a href="https://www.cdc.gov/handwashing/when-how-handwashing.html">Wash your hands often</a></h3>
						  	<p>Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.
                                If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of your hands and rub them together until they feel dry.
                                Avoid touching your eyes, nose, and mouth with unwashed hands.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url({{ asset('images/protect/distance.jpg') }});"></div>
						  	<h3>Avoid Close Contact</h3>
						  	<p>Avoid close contact with people who are sick, even inside your home. If possible, maintain 6 feet between the person who is sick and other household members.
                                Put distance between yourself and other people outside of your home.
                                Remember that some people without symptoms may be able to spread virus.
                                Stay at least 6 feet (about 2 arms’ length) from other people.
                                Do not gather in groups.
                                Stay out of crowded places and avoid mass gatherings.
                                Keeping distance from others is especially important for people who are at higher risk of getting very sick.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url({{ asset('images/protect/mask.jpg') }});"></div>
						  	<h3>Cover your mouth and nose with a cloth face cover when around others</h3>
						  	<p>You could spread COVID-19 to others even if you do not feel sick.
                                Everyone should wear a cloth face cover when they have to go out in public, for example to the grocery store or to pick up other necessities.
                                Cloth face coverings should not be placed on young children under age 2, anyone who has trouble breathing, or is unconscious, incapacitated or otherwise unable to remove the mask without assistance.
                                The cloth face cover is meant to protect other people in case you are infected.
                                Do NOT use a facemask meant for a healthcare worker.
                                Continue to keep about 6 feet between yourself and others. The cloth face cover is not a substitute for social distancing.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url({{ asset('images/protect/cough.jpg') }});"></div>
						  	<h3>Cover coughs and sneezes</h3>
						  	<p>If you are in a private setting and do not have on your cloth face covering, remember to always cover your mouth and nose with a tissue when you cough or sneeze or use the inside of your elbow.
                                Throw used tissues in the trash.
                                Immediately wash your hands with soap and water for at least 20 seconds. If soap and water are not readily available, clean your hands with a hand sanitizer that contains at least 60% alcohol.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url({{ asset('images/protect/disinfect.jpg') }});"></div>
						  	<h3>Clean and Disinfect</h3>
						  	<p>Clean AND disinfect frequently touched surfaces daily. This includes tables, doorknobs, light switches, countertops, handles, desks, phones, keyboards, toilets, faucets, and sinks.
                                If surfaces are dirty, clean them. Use detergent or soap and water prior to disinfection.
                                Then, use a household disinfectant. Most common EPA-registered household disinfectantsexternal icon will work.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url({{ asset('images/protect/monitor.jpg') }});"></div>
						  	<h3>Be alert for symptoms</h3>
						  	<p>Watch for fever, cough, shortness of breath, or other symptoms of COVID-19.
                                Especially important if you are running essential errands, going into the office or workplace, and in settings where it may be difficult to keep a physical distance of 6 feet.
                                Take your temperature if symptoms develop.
                                Don’t take your temperature within 30 minutes of exercising or after taking medications that could lower your temperature, like acetaminophen.
                                Follow CDC guidance if symptoms develop.</p>
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





