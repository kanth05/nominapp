$(document).ready( function(){

    const inicio = () => {

        eventos();

    }

    const editarComplementos = async ( url, data ) => {

        try {
            const res       = await fetch(url, {method: 'POST', body: data});
            const resultado = await res.json();

            if(resultado['msg']){
                return swal.insertQueueStep({
                    type: 'success',
                    title: resultado.msg,
                    preConfirm: function() {
                    
                        return window.location.reload();
    
                    }
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

        let myForm = document.getElementById('cargo');
        let crear  = document.getElementById('nuevo');

        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            let ipAPI = 'http://localhost/nominApp/cargoC/editarCargo';
            let data = new FormData(myForm);
            swal.queue([{
                title: 'Edición de descripción',
                confirmButtonText: 'Registrar',
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

        crear.addEventListener('click', (e) => {

            let ipAPI = 'http://localhost/nominApp/cargoC/nuevoCargo';
            let nuevoCargo;
            swal.queue([{
                title: 'Crear cargo',
                confirmButtonText: 'Crear',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                html: '<p>Ingrese la descripción del nuevo cargo</p><input  class="form-control mb-4" type="text" id="nuevoCargo" name="nuevoCargo" value="" pattern="^[a-zA-Z]+">',
                preConfirm: async function() {
                    
                    nuevoCargo = new FormData();
                    nuevoCargo.append('descripcion', $('#nuevoCargo').val());
                    return await editarComplementos(ipAPI, nuevoCargo);
                      
                }
            }])


        })

    }

    /*ARRANCA EL CODIGO*/ 

    inicio();

});
