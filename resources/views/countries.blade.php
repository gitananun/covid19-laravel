@extends('layouts.main')

@section('content')


    @if(count($countries) > 0)
        <div class="mt-5 container">
            <input type="text" id="myInput" class="p-2 rounded border border-info mb-3 form-control" onkeyup="myFunction()" placeholder="Search for Country..." title="Type in a name">
        <table id="myTable" class="table table-hover table-bordered table-responsive-lg">
            <thead>
            <tr>
                <th class="text-warning"><i class="fa fa-bar-chart-o"></i>&nbsp; ID</th>
                <th class="text-primary"><i class="fa fa-map"></i>&nbsp; Country</th>
                <th class="text-dark"><i class="fa fa-calendar"></i>&nbsp; Today Cases</th>
                <th class="text-danger"><i class="fa fa-heartbeat"></i>&nbsp; Today Deaths</th>
                <th class="text-dark"><i class="fa fa-history"></i>&nbsp; Overall Cases</th>
                <th class="text-danger"><i class="fa fa-heartbeat"></i>&nbsp; Overall Deaths</th>
                <th class="text-success"><i class="fa fa-heart"></i>&nbsp; Recovered</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 0 ?>
            @foreach($countries as $country)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{  $country['country'] }}</td>
                <td>{{ $country['todayCases'] }}</td>
                <td>{{ $country['todayDeaths'] }}</td>
                <td>{{ $country['cases'] }}</td>
                <td>{{ $country['deaths'] }}</td>
                <td>{{ $country['recovered'] }}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
        </div>

        @endif

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
    </script>

@endsection
