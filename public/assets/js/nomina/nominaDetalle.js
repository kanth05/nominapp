$(document).ready( function(){

    const inicio = () => {

        componentes();
        eventos();

    }

    const componentes = () => {

        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'excel', className: 'btn btn-success' },
                    { extend: 'print', className: 'btn btn-success' }
                ]
            },
            "oLanguage": {
                "oPaginate": { 
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Pagina _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Buscar...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 500
        } );

    }

    const eventos = () => {

        let ipAPI = 'http://localhost/nominApp/nomina/crearNuevaNomina';

        $('.warning.confirm').on('click', function () {
            swal.queue([{
                title: 'Generar una nueva nómina',
                confirmButtonText: 'Generar',
                text: '¿Ya revisó la información mostrada en el cuadro?',
                type: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                padding: '2em',
                preConfirm: async function() {
                    
                    await crearNomina(ipAPI);
                    setTimeout( () => { window.location.replace("http://localhost/nominApp/nominas"); }, 1500); 

                }
            }])
        })

    }

    const crearNomina = async ( url ) => {

        let data = new FormData();
        let dia = $('#dia').val();
        let mes = $('#mes').val();
        let ano = $('#ano').val();
        data.append('dia', dia);
        data.append('mes', mes);
        data.append('ano', ano);

        try {
            const res       = await fetch(url, {method: 'POST', body: data });
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

    /*ARRANCA EL CODIGO*/ 

    inicio();

});
