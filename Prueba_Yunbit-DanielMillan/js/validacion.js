function validar() {
    var name=document.getElementById("name").value;
    var address=document.getElementById("address").value;
    var descripcion=document.getElementById("descripcion").value;
    var telf=document.getElementById("telf").value;
    var type=document.getElementById("type").value;

    if (name!="" && address!="" && descripcion!="" && telf!="" && type!="") {
        
        var tel = new RegExp(/^[0-9]{9}$/);
        var tipo = new RegExp(/^(n|p){1}$/);
        if (!tel.test(telf)) {
            alert("Numero no valido");
        }

        if (!tipo.test(type)) {
            alert("Valor no valido introduzca p o n");
        }

    }else{
        alert("Campos vacios");
    }
}

