//Ejecutar función en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//Declaramos variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");


var inicio = document.getElementById("inicio");
var user = document.getElementById("user");
var nota = document.getElementById("notas");
var cliente = document.getElementById("clientes");
var proveedores = document.getElementById("proveedores");
var config = document.getElementById("config");



var mainFrame = document.getElementById("mainFrame");

//Evento para mostrar y ocultar menú
    function open_close_menu(){
        body.classList.toggle("body_move");
        side_menu.classList.toggle("menu__side_move");
    }

//Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página

if (window.innerWidth < 760){

    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//Haciendo el menú responsive(adaptable)

window.addEventListener("resize", function(){

    if (window.innerWidth > 760){

        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if (window.innerWidth < 760){

        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

});


user.addEventListener("click",  function(){ 
    mainFrame.setAttribute("src","Frames/usuarios.html");
    
});

inicio.addEventListener("click",  function(){ 
    mainFrame.setAttribute("src","Frames/inicio.html");
});

nota.addEventListener("click",  function(){ 
    mainFrame.setAttribute("src","Frames/notaProveedor.html");
});

cliente.addEventListener("click",  function(){ 
    mainFrame.setAttribute("src","Frames/cliente.php");
});

proveedores.addEventListener("click",  function(){ 
    mainFrame.setAttribute("src","Frames/proveedores.html");
});

config.addEventListener("click",  function(){ 
    mainFrame.setAttribute("src","Frames/inicio.html");
});