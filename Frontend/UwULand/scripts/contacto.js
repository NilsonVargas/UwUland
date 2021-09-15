var myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
myHeaders.append("Content-Type", "application/json");

let raw = {"primer_nombre": "",
"primer_apellido": "",
"correo_electronico": "",
"asunto": "",
"mensaje": ""}


let formulario = document.forms['solicitud'];

formulario.addEventListener('submit', function (e) {
    e.preventDefault();
    let primer_nombre = formulario.elements[0].value;
    let primer_apellido = formulario.elements[1].value;
    let correo_electronico = formulario.elements[2].value;
    let asunto = formulario.elements[3].value;
    let mensaje = formulario.elements[4].value;

    raw.primer_nombre = primer_nombre;
    raw.primer_apellido = primer_apellido;
    raw.correo_electronico = correo_electronico;
    raw.asunto = asunto;
    raw.mensaje = mensaje;

    let requestOptions = {
      method: 'POST',
      headers: myHeaders,
      body: JSON.stringify(raw),
      redirect: 'follow'
    };

    realizar_solicitud_contacto(requestOptions)

});

function realizar_solicitud_contacto(requestOptions)
{
    fetch("http://127.0.0.1:8000/api/contacto", requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
    alert("Intento de registro realizado");
}
