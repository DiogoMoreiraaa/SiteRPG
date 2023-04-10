function obrigado() {
    let mandar = document.getElementById ('mandar')
    let nome = document.getElementById ('inome')
    let email = document.getElementById ('iemail')

    if (obri.value.length == 0 || nome.value.length == 0 || email.value.length == 0 ) {
        window.alert ('Obrigado por mandar, logo responderemos')
    }
}