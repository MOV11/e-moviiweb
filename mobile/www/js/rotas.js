rotas = [
    {
        name:'home',
        path:'/',
        on: {
            pageInit: (e,page) => {
                
            }
        },
        
    },
    {
        name:'movimento',
        path:'/movimento/',
        url:'./pages/movimento.html',
        on: {
            pageInit: (e,page) => {

                    var pontos = [];

                    plugin.google.maps.environment.setEnv({
                        'API_KEY_FOR_BROWSER_RELEASE': '',
                        'API_KEY_FOR_BROWSER_DEBUG': ''
                    });
                    
                    var div = document.getElementById("map_canvas");

                    var map = plugin.google.maps.Map.getMap(div);

                    var lat_ant = null;
                    var lon_ant = null;
                    var total = 0;

                    function calcCrow(lat1, lon1, lat2, lon2){

                        if(lat2 == null || lon2 == null){
                            return 0;
                        }

                        var R = 6371; // km
                        var dLat = toRad(lat2-lat1);
                        var dLon = toRad(lon2-lon1);
                        var lat1 = toRad(lat1);
                        var lat2 = toRad(lat2);
                        
                        var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
                        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
                        var d = (R * c) * 1000;
                        
                        return parseInt(d);
                    }

                    function toRad(value) {
                          return value * Math.PI / 180;
                    }
                    function velocidade(speed){
                        var velocidade = (speed!=null? speed : 0) * 3.6;
                        velocidade = Number(velocidade -velocidade%1).toFixed(0);
                        return velocidade;
                    }
                    function watch_success(position) {
                        console.log( JSON.stringify(position.coords) );

                        setCurrentPosition(position);

                        console.log(`${position.coords.latitude} == ${position.coords.longitude} || ${lat_ant} == ${lon_ant}`);
                        var distancia = calcCrow(position.coords.latitude, position.coords.longitude, lat_ant, lon_ant);

                        $$('#tempo').html( (distancia * 0.02).toFixed(3) );

                    }

                    function watch_error(error) {
                        alert('code: '    + error.code    + '\n' +
                            'message: ' + error.message + '\n');
                    }
                
                    var watchID = navigator.geolocation.watchPosition(watch_success, watch_error, { maximumAge: 3000, timeout: 5000, enableHighAccuracy: true });

                    function setCurrentPosition(pos) {
                        pontos.push({lat: pos.coords.latitude, lng: pos.coords.longitude});
                        if(pontos.length == 1){
                            map.animateCamera({
                                target: {lat: pos.coords.latitude, lng: pos.coords.longitude},
                                zoom: 30,
                                tilt: 60,
                                bearing: 140,
                                duration: 3000
                            }, function() {
                                console.log("Ocorreu uma exceção na animação da camera");
                            });
                        }
                            
                        map.addPolyline({
                            'points': pontos,
                            'color' : '#EE1133',
                            'width': 6,
                            'geodesic': true
                        });

                        map.addMarker({
                            'position': new plugin.google.maps.LatLng(
                                                    pos.coords.latitude,
                                                    pos.coords.longitude
                                                ),
                        }, function(marker) {
                            currentPositionMarker = marker;
                        });

                        map.setCenter(new plugin.google.maps.LatLng(
                                                    pos.coords.latitude,
                                                    pos.coords.longitude
                                                ));
                        
                    function parar() {
                        navigator.geolocation.clearWatch(watchID);
                        page.router.back();
                    }

                    $$('.botao_parar').click(parar);
                }
                
            }
        }
    }
];