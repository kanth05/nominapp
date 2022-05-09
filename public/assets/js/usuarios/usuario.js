$(document).ready( function(){

    const inicio = () => {

        iniciarComponentes();
        eventos();

    }

    const editarComplementos = async ( url, data ) => {

        
        try {
            const res       = await fetch(url, {method: 'POST', body: data});
            const resultado = await res.json();

            if( resultado['msg'] ){
                return swal({
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
            let ipAPI = 'http://localhost/nominApp/UsuarioC/actualizaContrasena';
            let data = new FormData(myForm);
            swal.queue([{
                title: 'Actualizar la contraseña',
                confirmButtonText: 'Actualizar',
                text: '¿Estás seguro de realizar la operación?',
                type: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                preConfirm: function() {
                    
                    return editarComplementos(ipAPI, data);

                }
            }])
              
        });
    }

    const iniciarComponentes = () => {
    
        return null;

    }

    /*ARRANCA EL CODIGO*/ 
    inicio();

});
