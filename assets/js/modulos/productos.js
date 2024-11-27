const frm = document.querySelector("#frmRegistro");
const btnAccion = document.querySelector("#btnAccion");
let tblProductos;

var firstTabEl = document.querySelector('#myTab li:last-child button')
var firstTab = new bootstrap.Tab(firstTabEl);

const modalGaleria = new bootstrap.Modal(document.getElementById('modalGaleria'))

// let desc; PARA LA PARTE DE DESCRIPCION DE PRODUCTOS

document.addEventListener("DOMContentLoaded", function () {

    tblProductos = $("#tblProductos").DataTable({
    ajax: {
      url: base_url + "productos/listar",
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "nombre" },
      { data: "precio" },
      { data: "cantidad" },
      { data: "imagen" },
      { data: "accion" }
    ],
    language,
    dom,
    buttons,
  });

  //submit productos
  frm.addEventListener("submit", function (e) {
    e.preventDefault();
    let data = new FormData(this);
    const url = base_url + "productos/registrar";
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(data);
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        if (res.icono == "success") {
          frm.reset();
          tblProductos.ajax.reload();
          document.querySelector('#imagen').value = '';
        }
        Swal.fire({
          title: "Aviso",
          text: res.msg.toUpperCase(),
          icon: res.icono,
        });
      }
    };
  });

  //galeria de imagenes
  let myDropzone = new Dropzone('.dropzone', {
    dictDefaultMessage: 'Arrastrar y soltar imagenes', 
    acceptedFiles: '.png, .jpg, .jpeg',
    maxFiles: 10
  });
  myDropzone.on("complete", function(file) {
    myDropzone.removeFile(file);
  });
});

function eliminarPro(idPro) {
  Swal.fire({
    title: "AVISO",
    text: "¿Esta seguro de eliminar este registro?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "si, Eliminar!",
  }).then((result) => {
    if (result.isConfirmed) {
      const url = base_url + "productos/delete/" + idPro;
      const http = new XMLHttpRequest();
      http.open("GET", url, true);
      http.send();
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          if (res.icono == "success") {
            tblProductos.ajax.reload();
          }
          Swal.fire({
            title: "Aviso",
            text: res.msg.toUpperCase(),
            icon: res.icono,
          });
        }
      }
    }
  });
}

function editPro(idPro) {
  const url = base_url + "productos/edit/" + idPro;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        const res = JSON.parse(this.responseText);
        document.querySelector('#id').value = res.id;
        document.querySelector('#nombre').value = res.nombre;
        document.querySelector('#precio').value = res.precio;
        document.querySelector('#cantidad').value = res.cantidad;
        document.querySelector('#categoria').value = res.id_categoria;
        document.querySelector('#descripcion').value = res.descripcion;
        document.querySelector('#imagen_actual').value = res.imagen;
        btnAccion.textContent = 'Actualizar';
        firstTab.show();
      }
    }
}

function agregarImagenes(idPro) {
  document.querySelector('#idProducto').value = idPro;
  modalGaleria.show();

}