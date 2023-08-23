const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
{
    if (document.form1.correo.value=="@")
    formulario.reset();

const campos = {
	cedula: false,
	apellidos: false,
	nombres: false,
	edad: false,
    correo: false,
    contraseña:false,
    dirección:false,
	teléfono: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "cedula":
			validarCampo(expresiones.cedula, e.target, 'cedula');
		break;
		case "apellidos":
			validarCampo(expresiones.apellidos, e.target, 'apellidos');
		break;
		case "nombres":
			validarCampo(expresiones.nombres, e.target, 'nombres');
		break;
		case "edad":
			validarCampo(expresiones.edad, e.target, 'edad');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
        case "contraseña":
			validarCampo(expresiones.contraseña, e.target, 'contraseña');
		break;
        case "direccion":
			validarCampo(expresiones.dirección, e.target, 'dirección');
		break;
        case "telefono":
			validarCampo(expresiones.teléfono, e.target, 'teléfono');
		break;
	}
  }
}
