function buscar(){
    var pattern = document.getElementById('area').value;
    var solicitud = new XMLHttpRequest();
    var data  = new FormData();
    var url = 'process/infoCategoria.php';

    data.append("pattern", pattern);
    solicitud.open('POST',url, true);
    solicitud.send(data);

    solicitud.addEventListener('load', function(e){

        var cajadatos = document.getElementById('datos');
        cajadatos.innerHTML = e.target.responseText;
        
    }, false);
}

window.addEventListener('load', function(){
    document.getElementById('area').addEventListener('input', buscar, true);
}, false);
