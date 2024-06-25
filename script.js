
function graficar(newLabel,datos){

    console.log(datos);

   const ctx = document.getElementById('Estadistica');

            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: newLabel,
                datasets: [{
                  label: 'Cantidad de medicamentos ',
                  data: datos,
                  backgroundColor: '#A2A2C6',
                  borderWidth: 0,
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
}

function add(){
    const contenido= `<form action='' method="post">
        
        Nombre:
        <p>
        <input type="text" name="nom"  class="swal2-input" required>
        <p>
        Cantidad:
        <p>
        <input type="number" name="cant"  class="swal2-input" required>
        <p>
        <p>
        <button type="submit" class="button">Ingresar</button>
        </form>
        <p style="margin-top:10px;">`;
    Swal.fire({//MUESTRA UNA VENTANA EMERGENTE PARA INGRESAR NOMBRE
        title: "Agregar medicamento",
        html: contenido,
        allowOutsideClick: true,
        showConfirmButton: false,
        footer:"",
    });//MUESTRA UNA VENTANA EMERGENTE PARA INGRESAR NOMBRE
    
}
function response(){
    const med = document.getElementById("sel");
    const contenido= `<form action='?med=${med.value}' method="post">
        
        A nombre de:
        <p>
        <input type="text" name="nom"  class="swal2-input" required>
        <p>
        <button type="submit" class="button">Ingresar</button>
        </form>
        <p style="margin-top:10px;">`;
    Swal.fire({//MUESTRA UNA VENTANA EMERGENTE PARA INGRESAR NOMBRE
        title: "Responsable",
        html: contenido,
        allowOutsideClick: true,
        showConfirmButton: false,
        footer:"",
    });//MUESTRA UNA VENTANA EMERGENTE PARA INGRESAR NOMBRE
    
}
