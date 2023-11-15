const generateG = (canva, labels, data1, data2) => {
  // Obtener el elemento canvas y su context

  // Datos para el gráfico (puedes personalizar estos valores)
  const datos = {
    labels,
    datasets: [
      {
        label: "Productos",
        data: data1, // Datos de ventas
        backgroundColor: "rgba(75, 192, 192, 0.2)",
        borderColor: "rgba(75, 192, 192, 1)",
        borderWidth: 1,
      },
      {
        label: "Stock",
        data: data2, // Datos de stock
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
      },
    ],
  };

  // Opciones de configuración del gráfico
  const opciones = {
    responsive: true,
  };

  // Crear el gráfico
  const miGrafico = new Chart(canva, {
    type: "bar", // Tipo de gráfico (puedes cambiarlo a "line", "pie", etc.)
    data: datos,
    options: opciones,
  });

}

(async function cookiesG() {
  const canvas = document.getElementById("container-cookies").getContext("2d");
  const labels = ['colombina', 'festival', 'ducales', 'tosh', 'cookies']
  let req = await fetch('api/cookies/');
  let res = await req.json();
  let colombina = 0, festival = 0, ducales = 0, tosh = 0, cookies = 0;
  let colombinaS = 0, festivalS = 0, ducalesS = 0, toshS = 0, cookiesS = 0;
  res.forEach(e => {
    switch (e.marca) {
      case 'colombina': {
        colombina++;
        colombinaS += e.cantidadPaquetesStock;
      }
        break;
      case 'festival': {
        festival++;
        festivalS += e.cantidadPaquetesStock;
      }
        break;
      case 'ducales': {
        ducales++;
        ducalesS += e.cantidadPaquetesStock;
      }
        break;
      case 'tosh': {
        tosh++;
        toshS += e.cantidadPaquetesStock;
      }
        break;
      case 'cookies': {
        cookies++;
        cookiesS += e.cantidadPaquetesStock;
      }
        break;
    }
  });
  let products = [colombina, festival, ducales, tosh, cookies];
  let stock = [colombinaS, festivalS, ducalesS, toshS, cookiesS];
  generateG(canvas, labels, products, stock);
})();

(async function fideosG() {
  const canvas = document.getElementById("container-fideos").getContext("2d");
  const labels = ['doria', 'pastas sas', 'ricota', 'fideos', 'cookies']
  let req = await fetch('api/fideos/');
  let res = await req.json();
  let doria = 0, pastas = 0, ricota = 0, fideos = 0, ramen = 0;
  let doriaS = 0, pastasS = 0, ricotaS = 0, fideosS = 0, ramenS = 0;
  res.forEach(e => {
    switch (e.marca) {
      case 'doria': {
        doria++;
        doriaS += e.cantidadPaquetesStock;
      }
        break;
      case 'pastas sas': {
        pastas++;
        pastasS += e.cantidadPaquetesStock;
      }
        break;
      case 'ricota': {
        ricota++;
        ricotaS += e.cantidadPaquetesStock;
      }
        break;
      case 'fideos': {
        fideos++;
        fideosS += e.cantidadPaquetesStock;
      }
        break;
      case 'ramen': {
        ramen++;
        ramenS += e.cantidadPaquetesStock;
      }
        break;
    }
  });
  let products = [doria, pastas, ricota, fideos, ramen];
  let stock = [doriaS, pastasS, ricotaS, fideosS, ramenS];
  generateG(canvas, labels, products, stock);
})();