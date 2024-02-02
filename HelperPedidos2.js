document.getElementById('formulario1').addEventListener('submit', function(e){

    e.preventDefault();
    
    let formulario = new FormData(document.getElementById('formulario1'));
    
    fetch('pedido2.php', {
    
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data =>{
        if(data == 'true'){

            valorLechuga = document.getElementById('lechuga');

            alert('Los datos son: '+valorLechuga.value);



            document.getElementById('tipo').value = '';
            document.getElementById('numero').value = '';
            document.getElementById('lechuga').value = '';
            document.getElementById('jitomate').value = '';
            document.getElementById('cebolla').value = '';
            document.getElementById('picante').value = '';
    
            alert('La operacion se realizo con exito');
        }else{
            console.log(data);
        }
    })
    
    });
    document.getElementById('formulario2').addEventListener('submit', function(e){

        e.preventDefault();
        
        let formulario = new FormData(document.getElementById('formulario2'));
        
        fetch('pedido2.php', {
        
            method: 'POST',
            body: formulario
        })
        .then(res => res.json())
        .then(data =>{
            if(data == 'true'){
                document.getElementById('tipo').value = '';
                document.getElementById('numero').value = '';
                document.getElementById('lechuga').value = '';
                document.getElementById('jitomate').value = '';
                document.getElementById('cebolla').value = '';
                document.getElementById('picante').value = '';
        
                alert('La operacion se realizo con exito');
            }else{
                console.log(data);
            }
        })
        
        });
