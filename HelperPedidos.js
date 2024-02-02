
        document.getElementById('formulario3').addEventListener('submit', function(e){

            e.preventDefault();
            
            let formulario = new FormData(document.getElementById('formulario3'));
            
            fetch('pedido.php', {
            
                method: 'POST',
                body: formulario
            })
            .then(res => res.json())
            .then(data =>{
                if(data == 'true'){
                    document.getElementById('tipo').value = '';
                    document.getElementById('numero').value = '';
            
                    alert('La operacion se realizo con exito');
                }else{
                    console.log(data);
                }
            })
            
            });

            document.getElementById('formulario4').addEventListener('submit', function(e){

                e.preventDefault();
                
                let formulario = new FormData(document.getElementById('formulario4'));
                
                fetch('pedido.php', {
                
                    method: 'POST',
                    body: formulario
                })
                .then(res => res.json())
                .then(data =>{
                    if(data == 'true'){
                        document.getElementById('tipo').value = '';
                        document.getElementById('numero').value = '';
                        alert('La operacion se realizo con exito');
                    }else{
                        console.log(data);
                    }
                })
                
                });
    