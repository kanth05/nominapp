$(document).ready( function(){

    const inicio = () => {

        eventos();

    }

    const guardarEmpleado = async ( url, data ) => {

        try {
            const res       = await fetch(url, {method: 'POST', body: data});
            const resultado = await res.json();

            if(resultado['msg']){
                return swal.insertQueueStep({
                    type: 'success',
                    title: resultado.msg
                });
            }else{

                $(`label[for=${resultado['campo']}]`).append(`<div class="alert alert-warning" role="alert">${resultado.err}</div>`);

                $('#'+resultado['campo']).on('blur', () => {
                    $('.alert').remove();
                });

                return swal.insertQueueStep({
                    type: 'error',
                    title: resultado.err
                });
            }
        } catch (error) {
            return swal.insertQueueStep({
                type: 'error',
                title: error.err
            });
        }
        

    }

    const eventos = () => {

        let myForm = document.getElementById('general-info');
        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            const cedulaUrl = $('#cedulaBD').val();
            let endpoint = ( cedulaUrl.length === 0 ) ? 'empleado/guardar' : 'empleado/editar';
            let ipAPI = 'http://localhost/nominApp/'+endpoint;
            let data = new FormData(myForm);
            data.append('cedulaDB', cedulaUrl);
            swal.queue([{
                title: 'Registrar un nuevo empleado',
                confirmButtonText: 'Registrar',
                text: '¿Estás seguro de realizar la operación?',
                type: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                preConfirm: function() {
                    
                    return guardarEmpleado(ipAPI, data);

                }
            }])
              
        });

    }

    /*ARRANCA EL CODIGO*/ 

    inicio();

});
