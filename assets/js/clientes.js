const tableLista = document.querySelector('#tableListaProductos tbody');
const tblPendientes = document.querySelector('#tblPendientes');
let productosjson = [];
document.addEventListener('DOMContentLoaded', function () {
    if (tableLista) {
        getListaProductos();
    }
    //cargar datos pendientes con DataTables
    $('#tblPendientes').DataTable( {
        ajax: {
            url: base_url + 'clientes/listarPendientes',
            dataSrc: ''
        },
        columns: [
            { data: 'id_transaccion' },
            { data: 'monto' },
            { data: 'fecha' },
            {data: 'accion'}
        ],
        language,
        dom,
        buttons
    } );
});

function getListaProductos() {
    let html = '';
    const url = base_url + 'principal/listaProductos'; 
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            if (res.totalPaypal > 0) {
                res.productos.forEach(producto => {
                    html += `<tr>
                                    <td>
                                    <img class="img-thumbnail rounded-circle" src="${producto.imagen}" alt="" width="100">
                                    </td>
                                    <td>${producto.nombre}</td>
                                    <td><span class="badge bg-warning">${res.moneda + ' ' + producto.precio}</span></td>
                                    <td><span class="badge bg-primary">${producto.cantidad}</span></td>
                                    <td>${producto.subTotal}</td>
                             </tr>`;
                             //agregar productos para paypal
                             let json = {
                                "name": producto.nombre, /* Shows within upper-right dropdown during payment approval */
                                "unit_amount": {
                                    "currency_code": res.moneda,
                                    "value": producto.precio
                                },
                                "quantity": producto.cantidad
                            }
                            productosjson.push(json);
                });
                console.log(res.totalPaypal);
                tableLista.innerHTML = html;
                document.querySelector('#totalProducto').textContent = 'TOTAL A PAGAR: ' + res.moneda + ' ' + res.total;
                botonPaypal(res.totalPaypal, res.moneda);
            }else{
                tableLista.innerHTML = `
                <tr>
                    <td colspan="5" class="text-center">CARRITO VACIO</td>
                </tr>
                `;
            }
            
        }
    }
  }
  //link boton
  //https://developer.paypal.com/docs/checkout/

  //https://developer.paypal.com/api/rest/reference/currency-codes/

  function botonPaypal(total, moneda) {
    paypal.Buttons({

        // sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create ({
                "purchase_units": [{
                    "amount": {
                        "currency_code": moneda,
                        "value": total,
                        "breakdown": {
                            "item_total": {/* required when including the  `items` array */
                                "currency_code": moneda,
                                "value": total
                            }
                        }
                    },
                    "items": productosjson
                }]
            });
        },
        //finalize th transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                registrarPedido(orderData)
            });
          }
        }).render('#paypal-button-container');
  }

  function registrarPedido(datos) {
    const url = base_url + 'clientes/registrarPedido'; 
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify({
        pedidos: datos,
        productos: listaCarrito
    }));
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            Swal.fire({
                title: "Aviso",
                text: res.msg,
                icon: res.icono,
              });
            if (res.icono == 'success') {
                localStorage.removeItem('listaCarrito');
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            }
        }
    }
  }

  function verPedido(idPedido) {
    const mPedido = new bootstrap.Modal(document.getElementById('modalPedido'));
    const url = base_url + 'clientes/verPedido/' + idPedido; 
  const http = new XMLHttpRequest();
  http.open('GET', url, true);
  http.send();
  http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          let html = '';
          res.productos.forEach(row => {
            let subTotal = parseFloat(row.precio) * parseInt(row.cantidad);
              html += `<tr>
                        <td>${row.producto}</td>
                         <td><span class="badge bg-warning">${res.moneda + ' ' + row.precio}</span></td>
                         <td><span class="badge bg-primary">${row.cantidad}</span></td>
                         <td>${subTotal.toFixed(2)}</td>
                 </tr>`;
          });
          document.querySelector('#tablePedidos tbody').innerHTML = html;
          mPedido.show();
        }
    }
    
  }

  //correo paypal: sb-h547lf32855586@personal.example.com
  //contra: 7pAVK_c3