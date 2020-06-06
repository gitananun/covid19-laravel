@extends('layouts.main')

@section('content')

    @include('inc.hero')
    <!-- END hero -->

    @include('inc.booking')
    <!-- END booking -->

    <div class="container mb-5" style="margin-top: 100px">
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

    @include('inc.services')
    <!-- END services -->

    @include('inc.team')
    <!-- END team -->

    @include('inc.about')
    <!-- END about -->

    @include('inc.testimonials')
    <!-- END testimonials -->

    @include('inc.gallery')
    <!-- END gallery -->

    @include('inc.blog')
    <!-- END blog -->

@endsection

@section('scripts')
    <script>
        // Table filter
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

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





