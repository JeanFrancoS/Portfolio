const file = document.getElementById("imagen");
const img = document.getElementById("imgSinCargar");

const defaultFile = "./assets/img/GetImagenProyecto.jpg";

if (file != null) {
  file.addEventListener("change", (e) => {
    if (e.target.files[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
        img.src = e.target.result; //tambien puede ser reader.result
      };
      reader.readAsDataURL(e.target.files[0]);
    } else {
      img.src = defaultFile;
    }
  });
}

// levanto el a del link de whatssap
let a_msj_wsp = document.getElementById("WSP");
const MensajeWsp = () => {
  let nombre = document.getElementById("name");
  let mail = document.getElementById("exampleInputEmail1");
  let motivo = document.getElementById("exampleInputPassword1");
  let mensaje = document.getElementById("contenido");
  let mensaje_final;

  mensaje_final = "Hola!,%20Mi%20Nombre%20es:%20" + nombre.value + ",%20";
  mensaje_final = mensaje_final + "%20Mi%20Mail%20es:%20" + mail.value;
  mensaje_final =
    mensaje_final +
    ",%20El%20Motivo%20de%20mi%20contacto%20es%20" +
    motivo.value +
    ",%20";
  mensaje_final = mensaje_final + "%20mensaje%20:%20" + mensaje.value;
  mensaje =
    "https://api.whatsapp.com/send?phone=+5491136172154&text=" + mensaje_final;
  a_msj_wsp.href = mensaje;
};

// a_msj_wsp.addEventListener("click", MensajeWsp);
