<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="instascan.min.js"></script>
    <script src="jquery.min.js"></script>
</head>
<body>

    <video autoplay="true" id="preview" width="300px" height="300px"></video>
    <form method="post" action="hasil.php"  id="proses">
    <br><input type="text" size="15px" name="hasil" id="hasil" autofocus>
    </form>
</body>
<script type="text/javascript">

//document.getElementById("hasil").autofocus = false;
//  document.getElementById("hasil").onchange = function() {
//     alert("ok");

 //};


// document.getElementById("hasil").onchange = function() {
//     document.getElementById("proses").submit();
//     alert('oke');

// };


let scanner = new Instascan.Scanner({video: document.getElementById('preview'),mirror: false});
scanner.addListener('scan',function(content){
    //alert(content);
    $("#hasil").val(content);
    document.getElementById("proses").submit();
});

Instascan.Camera.getCameras().then(function(Cameras){
    if (Cameras.length > 0){
        scanner.start(Cameras[1]);
    }else{
        console.error('no cameras found');
    }
}).catch(function(e){
    console.error(e);
});

</script>
</html>