function validarFormulario() {
    var nome = document.getElementById("fnome").value;
    var email = document.getElementById("fmail").value;

    if (nome === "" || email === "") {
        alert("Nome e E-mail são obrigatórios!");
        return false;  
    }

    return true; 
}

function calcularTotal() {
    // número de noites e de hóspedes
    var numeroNoites = document.getElementById("numero-noites").value;
    var numeroHospedes = document.getElementById("numero-hospedes").value;

    // preço por noite por hóspede
    var precoPorNoite = 150;


    var total = numeroNoites * numeroHospedes * precoPorNoite;

    // valor no campo total-estimado
    document.getElementById("total-estimado").value = total;
}
