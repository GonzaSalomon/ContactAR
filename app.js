var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    var datos = new FormData(formulario)
    console.log(datos.get('nombre'))
    console.log(datos.get('apellido'))
    console.log(datos.get('dni'))
    console.log(datos.get('phone'))
    console.log(datos.get('adress'))
    console.log(datos.get('ciudad'))
    console.log(datos.get('provincia'))
    console.log(datos.get('email'))
    console.log(datos.get('uid'))
    fetch('enviar2.php', {
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Los datos no se pudieron cargar
                </div>
                `
            }else{
                respuesta.innerHTML = `
                <div class="alert alert-primary" role="alert">
                    Los datos se cargaron correctamente
                </div>
                `
            }
        } )
})