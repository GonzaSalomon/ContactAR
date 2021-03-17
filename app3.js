var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');


formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    var datos = new FormData(formulario)
    console.log(datos.get('dni'))
    fetch('busqueda.php', {
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    No se encontró un usuario con ese dni.
                </div>
                `
            }else{
                respuesta.innerHTML = `
                <div class="alert alert-primary" role="alert">
                    
                </div>
                `
            }
        } )
})