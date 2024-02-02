document.getElementById('formulario').addEventListener('submit', function(e){

e.preventDefault();

let formulario = new FormData(document.getElementById('formulario'));

fetch('registarEmpleados.php', {

    method: 'POST',
    body: formulario
})
.then(res => res.json())
.then(data =>{
    if(data == 'true'){
        document.getElementById('nombre').value = '';
        document.getElementById('telefono').value = '';
        document.getElementById('email').value = '';
        document.getElementById('edad').value = '';
        document.getElementById('seguroSocial').value = '';
        document.getElementById('rfc').value = '';

        alert('La operacion se realizo con exito');
    }else{
        console.log(data);
    }
})

});



