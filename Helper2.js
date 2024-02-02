document.getElementById('formulario').addEventListener('submit', function(e){

    e.preventDefault();
    
    let formulario = new FormData(document.getElementById('formulario'));
    
    fetch('registrarUsuarios.php', {
    
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data =>{
        if(data == 'true'){
            document.getElementById('numeroTelefono').value = '';
            document.getElementById('contrasena').value = '';
            document.getElementById('direccion').value = '';
            document.getElementById('referencias').value = '';
            document.getElementById('nombre').value = '';
            document.getElementById('apellidos').value = '';
    
            alert('La operacion se realizo con exito');
        }else{
            console.log(data);
        }
    })
    
    });