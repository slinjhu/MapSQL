<!DOCTYPE html>
<html>
<head>
    <title>MapSQL</title>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,100' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://d3js.org/topojson.v1.min.js"></script>
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
    To look up: <input type="text" id="lookup">
</p>

<p>
    <input type="checkbox" id="range01" checked onchange="update();">
    Range from 0 to 1
</p>
    <div id="map" class="map"></div>

    <script type="text/javascript">
    update();
    function update(){
        var lookup = $("#lookup").html();
        if($("#range01").is(':checked')){
            mapdraw("#map", lookup, lookup, 0, 1);
        }else{
            mapdraw("#map", lookup, lookup);
        }

    }

    </script>

</body>

</html>

