<!DOCTYPE html>
<html>
<head>
    <title>MapSQL</title>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,100' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://d3js.org/d3.v3.min.js"></script>
    <script src="https://d3js.org/topojson.v1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/queue-async/1.0.7/queue.min.js"></script>
    <script src="mapdraw.js"></script>
    <style type="text/css">
    .map{
        border: 1px solid green;
        max-width: 1000px;
        min-width: 1000px;
        margin: 0px;
        padding: 10px;
    }
    </style>
</head>
<body>
<p>
    To look up: <input type="text" id="lookup" onchange="update();" value='1.5*m56 + 3.5*m55'>
</p>

<p>
    <input type="checkbox" id="range01" onchange="update();">
    Range from 0 to 1
</p>
    <div id="map" class="map"></div>

    <script type="text/javascript">
    update();
    function update(){
        var lookup = $("#lookup").val();
        var lookup_url = lookup.replace('+','%2B')
        if($("#range01").is(':checked')){
            mapdraw("#map", lookup_url, lookup, 0, 1);
        }else{
            mapdraw("#map", lookup_url, lookup);
        }

    }

    </script>

</body>

</html>

