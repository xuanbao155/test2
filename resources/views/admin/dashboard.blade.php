@extends('admin_layout')
@section('admin_content')
    <!-- <b>Bosxshop</b> -->
    <div class="chart_agile">
        <div class="col-md-6 floatcharts_w3layouts_left">
            <div class="floatcharts_w3layouts_top">
                <div class="floatcharts_w3layouts_bottom">
                    <div id="graph7"></div>
                    <script>
                    // This crosses a DST boundary in the UK.
                    Morris.Area({
                        element: 'graph7',
                        data: [
                        {x: '2013-03-30 22:00:00', y: 2, z: 3},
                        {x: '2013-03-31 00:00:00', y: 2, z: 1},
                        {x: '2013-03-31 02:00:00', y: 1, z: 2},
                        {x: '2013-03-31 04:00:00', y: 4, z: 3}
                        ],
                        xkey: 'x',
                        ykeys: ['y', 'z'],
                        labels: ['Y', 'Z']
                    });
                    </script>

                </div>
            </div>
        </div>
        <div class="col-md-6 floatcharts_w3layouts_left">
            <div class="floatcharts_w3layouts_top">
                <div class="floatcharts_w3layouts_bottom">
                    <div id="graph8"></div>
                    <script>
                    /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                    var day_data = [
                        {"period": "2012-10-01", "licensed": 3107, "sorned": 690},
                        {"period": "2012-09-30", "licensed": 2351, "sorned": 629},
                        {"period": "2012-09-29", "licensed": 3269, "sorned": 718},
                        {"period": "2012-09-20", "licensed": 3946, "sorned": 661},
                        {"period": "2012-09-19", "licensed": 2257, "sorned": 737},
                        {"period": "2012-09-18", "licensed": 2648, "sorned": 697},
                        {"period": "2012-09-17", "licensed": 2171, "sorned": 660},
                        {"period": "2012-09-16", "licensed": 3071, "sorned": 656},
                        {"period": "2012-09-15", "licensed": 2701, "sorned": 716},
                        {"period": "2012-09-10", "licensed": 3215, "sorned": 672}
                    ];
                    Morris.Bar({
                        element: 'graph8',
                        data: day_data,
                        xkey: 'period',
                        ykeys: ['licensed', 'sorned'],
                        labels: ['Licensed', 'SORN'],
                        xLabelAngle: 60
                    });
                    </script>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
 @endsection