var SessionTimeout=function() {
    var e=function() {
        $.sessionTimeout( {
            title:"Notificación de sesión", 
            message:"La aplicación se encuentra inactiva por mucho tiempo, se procederá a cerrar sesión.", 
            logoutButton: "Finalizar sesión",
            keepAliveButton: "Extender sesión",
            keepAliveUrl:"/", 
            redirUrl:"/nominApp/destruirSesion", 
            logoutUrl:"/nominApp/destruirSesion",
            warnAfter:900e3, 
            redirAfter:920e3, 
            ignoreUserActivity:0, 
            keepAlive: !0
        }
        )
    };
    return {
        init:function() {
            e()
        }
    }
}

();
jQuery(document).ready(function() {
    SessionTimeout.init()
}
);