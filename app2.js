var formulario = document.getElementById('formulario');
var rescan = document.getElementById('rescan');

formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    var datos = new FormData(formulario)
    console.log(datos.get('dni'))
    console.log(datos.get('opcion'))
    fetch('search.inc.php', {
        method: 'POST',
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            console.log(data)
            if(data === 'error'){
                rescan.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    No se encontró al usuario.
                </div>
                `
            }else if(data === 'eliminado'){
                rescan.innerHTML = `
                <div class="alert alert-primary" role="alert">
                    El usuario fué eliminado. Puede cargar los datos de nuevo.
                </div>
                `
            }else if(data === 'curado'){
                rescan.innerHTML = `
                <div class="alert alert-primary" role="alert">
                El usuario fué registrado como negativo para covid-19.
                </div>
                `
            }else{
                rescan.innerHTML = `
                <div class="alert alert-warning" role="alert">
                    El usuario ya está registrado como "no infectado".
                </div>
                `
            }
        } )
})