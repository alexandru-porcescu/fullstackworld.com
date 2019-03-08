@extends('frontend.layouts.default')

@section('content')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="{{ asset('js/moment.js') }}"></script>

    <div class="columns is-centered">

        <div class="column is-12">

            <div class="content">
                <div class="columns is-centered">
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <p class="title">{{$stats['postCount']}}</p>
                                <p class="subtitle">
                                    Total Posts
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <p class="title">{{$stats['gaCurrentMonth']['3']}}
                                </p>
                                <p class="subtitle">
                                    Visitors <small>(This month)</small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <p class="title">{{$stats['gaCurrentMonth']['2']}}
                                </p>
                                <p class="subtitle">
                                    Page views <small>(This month)</small>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="content">
                <div id="ga_last_30_days"></div>
            </div>

            <div class="content">
                <div id="ga_stats"></div>
            </div>

            <div class="content">
                <h2 class="title text-center">Top Pages</h2>
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Page Views</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stats['gaMostVisitedPages'] as $gaPage)
                        <tr>
                            <td>
                                <code>{{$gaPage['url']}}</code>
                            </td>
                            <td>{{$gaPage['pageViews']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="content">
                <h2 class="title text-center">Top References</h2>
                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>URL</th>
                        <th>Page Views</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stats['gaTopReferences'] as $reference)
                        <tr>
                            <td>
                                <code>{{$reference['url']}}</code>
                            </td>
                            <td>{{$reference['pageViews']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <script>
        let rawAnalytics = {!! json_encode($stats['analytics']) !!}

        let gaUsers = [], gaSessions = [], gaPageViews = []

        rawAnalytics.forEach(function(element) {
            let date = element[0]
            date = date.slice(0, -2) +"-"+date.slice(-2)+"-01";
            gaUsers.push([moment(date).valueOf(), parseInt(element[1])])
            gaPageViews.push([moment(date).valueOf(), parseInt(element[2])])
            gaSessions.push([moment(date).valueOf(), parseInt(element[3])])
        });

        Highcharts.chart('ga_stats', {

            title: {
                text: 'Google analytics(Last 12 month)'
            },

            yAxis: {
                title: {
                    text: 'Website Visitors'
                }
            },

            xAxis: {
                type: 'datetime'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                }
            },

            series: [{
                name: 'Page Views',
                type: 'area',
                data: gaPageViews
            },{
                name: 'Users',
                data: gaUsers
            },{
                name: 'Session',
                data: gaSessions
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });


        rawAnalytics = {!! json_encode($stats['gaLastOneMonth']) !!}
        gaPageViews = [], gaUsers = []
        rawAnalytics.forEach(function(element) {
            gaPageViews.push([moment(element.date.date.split(" ")[0]).valueOf(), parseInt(element.pageViews)])
            gaUsers.push([moment(element.date.date.split(" ")[0]).valueOf(), parseInt(element.visitors)])
        });

        Highcharts.chart('ga_last_30_days', {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Google analytics(Last 30 days)'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Website Visitors'
                }
            },
            legend: {
                enabled: false
            },

            series: [{
                type: 'area',
                name: 'Page Views',
                data: gaPageViews
            },{
                name: 'Visitors',
                data: gaUsers
            }]
        });
    </script>

@endsection