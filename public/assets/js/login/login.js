$(document).ready( function(){

    const inicio = () => {

        eventos();

    }

    const login = async ( url, data ) => {

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

        let myForm = document.getElementById('login');
        myForm.addEventListener('submit', (e) => {
            
            e.preventDefault();
            const ipAPI = 'home/iniciarSesion';
            let data = new FormData(myForm);
            
            login(ipAPI, data);
              
        });

    }

    /*ARRANCA EL CODIGO*/ 

    inicio();

});
