<html>
<body oncontextmenu="return false;">

</body>
<script>
    document.onkeydown=function(e){
        if(event.keyCode = 123){
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charcodeAt(0)){
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charcodeAt(0)){
            return false;
        }
    }
</script>
</html>