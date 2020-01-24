<html>
<head>
<script src="jquery-2.1.4.js"></script>
<script lang="javascript" src="xlsx.full.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="navbar"><span>Red Stapler - SheetJS </span></div>
<div id="wrapper">
        
        <input type="file" id="input-excel" />
</div>
<script>
        $('#input-excel').change(function(e){
                var reader = new FileReader();
                reader.readAsArrayBuffer(e.target.files[0]);
                reader.onload = function(e) {
                        var data = new Uint8Array(reader.result);
                        var wb = XLSX.read(data,{type:'array'});
                        var htmlstr = XLSX.write(wb,{sheet:"sheet no1", type:'binary',bookType:'html'});
                        $('#wrapper')[0].innerHTML += htmlstr;
                }
        });
</script>
</body>
</html>