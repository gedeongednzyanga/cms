$(function() {

    dataProduction = [];
    dataCommande = [];

    function statProduction() {
        $.ajax({
            url: "models/requests/RequestCbase.php",
            type: "POST",
            data: { action: "chatProduction" },
            timeout: 3000,
            success: function(data) {
                var response = $.parseJSON(data);
                dataProduction = [response.m01, response.m02, response.m03, response.m04, response.m05, response.m06, response.m07, response.m08, response.m09, response.m10, response.m11, response.m12];
                dataCommande = [response.c01, response.c02, response.c03, response.c04, response.c05, response.c06, response.c07, response.c08, response.c09, response.c10, response.c11, response.c12];
                var a = {
                        labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Sept.", "Oct.", "Nov.", "Déc."],
                        datasets: [{
                            label: "Productions",
                            borderColor: 'rgba(52,152,219,1)',
                            backgroundColor: 'rgba(52,152,219,1)',
                            pointBackgroundColor: 'rgba(52,152,219,1)',
                            data: dataProduction
                        }, {
                            label: "Commandes",
                            backgroundColor: "#DADDE0",
                            borderColor: "#DADDE0",
                            data: dataCommande
                        }]
                    },
                    t = {
                        responsive: !0,
                        maintainAspectRatio: !1
                    },
                    e = document.getElementById("bar_chart").getContext("2d");
                new Chart(e, {
                    type: "line",
                    data: a,
                    options: t
                });
            },
            error: function() {
                alert("Echec de la requête sur le serveur.");
            }
        });
    }


    // statCommande();

    statProduction();




    // World Map
    var mapData = {
        "US": 7402,
        'RU': 5105,
        "AU": 4700,
        "CN": 4650,
        "FR": 3800,
        "DE": 3780,
        "GB": 2400,
        "SA": 2350,
        "BR": 2270,
        "IN": 1870,
    }
    $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: '#DADDE0',
            }
        },
        showTooltip: true,
        onRegionTipShowx: function(e, el, code) {
            el.html(el.html() + ' (Visits - ' + mapData[code] + ')');
        },
        markerStyle: {
            initial: {
                fill: '#3498db',
                stroke: '#333'
            }
        },
        markers: [{
                latLng: [1.3, 103.8],
                name: 'Singapore : 203'
            },
            {
                latLng: [38, -105],
                name: 'USA : 755',
            },
            {
                latLng: [58, -115],
                name: 'Canada : 700',
            },
            {
                latLng: [-25, 140],
                name: 'Australia : 304',
            },
            {
                latLng: [55.00, -3.50],
                name: 'UK : 202',
            },
            {
                latLng: [21, 78],
                name: 'India : 410',
            },
            {
                latLng: [25.00, 54.00],
                name: 'UAE : 180',
            }
        ]
    });


    var doughnutData = {
        labels: ["Desktop", "Tablet", "Mobile"],
        datasets: [{
            data: [47, 30, 23],
            backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
        }]
    };


    var doughnutOptions = {
        responsive: true,
        legend: {
            display: false
        },
    };


    var ctx4 = document.getElementById("doughnut_chart").getContext("2d");
    new Chart(ctx4, { type: 'doughnut', data: doughnutData, options: doughnutOptions });


});