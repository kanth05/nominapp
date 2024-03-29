$(document).ready( function(){

    const inicio = () => {

        componentes();
        eventos();

    }

    const componentes = () =>{

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
            "pageLength": 7 
        });
    }

    const eventos = () =>{


        $('#nuevaBtn').on('click',  () => {

            return consultaBD();

        });

    }

    const  consultaBD = async () =>{

        url = 'http://localhost/nominApp/nomina/validaNominas';

        let data = new FormData();
        let fec = $('#fecha').val();
        let arrfec = fec.split('-').reverse();
        data.append('dia', arrfec[0]);
        data.append('mes', arrfec[1]);
        data.append('ano', arrfec[2]);

        if( $('#fecha').val().length == 0 ){
            return swal({
                type: 'error',
                title: 'El campo de fecha de prueba no puede estar vacío.'
            });;
        }

        try {
            const res       = await fetch(url, {method: 'POST', body: data});
            const resultado = await res.json();

            if(resultado['msg']){
                 window.location.replace(`http://localhost/nominApp/nominaNueva?dia=${arrfec[0]}&mes=${arrfec[1]}&ano=${arrfec[2]}`);
            }else{

                swal({
                    type: 'error',
                    title: resultado.err
                });
            }
        } catch (error) {
             swal.insertQueueStep({
                type: 'error',
                title: error.err
            });
        }

    }

    inicio();

});