@extends('frontend.layouts.default')

@section('content')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

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
                                <p class="title">120
                                </p>
                                <p class="subtitle">
                                    Visitors Last (Past 30 days)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="column is-4">
                        <div class="card">
                            <div class="card-content">
                                <p class="title">1200
                                </p>
                                <p class="subtitle">
                                    Page views (Past 30 days)
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="content">
                <div id="ga_total_visitors" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>

            <div class="content">

                <div id="ga_total_pageviews" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            </div>

            <div class="content">

                <div id="total_blogpost" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            </div>
        </div>

    </div>

    <script>

        var data = [
            [
                1167609600000,
                0.7537
            ],
            [
                1167696000000,
                0.7537
            ],
            [
                1167782400000,
                0.7559
            ],
            [
                1167868800000,
                0.7631
            ]
        ];



        Highcharts.chart('ga_total_visitors', {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'USD to EUR exchange rate over time'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Exchange rate'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'USD to EUR',
                data: data
            }]
        });

        Highcharts.chart('ga_total_pageviews', {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'USD to EUR exchange rate over time'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Exchange rate'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'USD to EUR',
                data: data
            }]
        });

        Highcharts.chart('total_blogpost', {
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'USD to EUR exchange rate over time'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                    'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Exchange rate'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'USD to EUR',
                data: data
            }]
        });
    </script>

@endsection