const updateCookie = async id => {
    edit = true;
    document.getElementById('idEdit').value = id;
    const nombre = document.getElementById('nombre');
    const sabor = document.getElementById('sabor');
    const marca = document.getElementById('marca');
    const precioPaquete = document.getElementById('precio');
    const pesoPaquete = document.getElementById('peso');
    const cantidadPaquetesStock = document.getElementById('stock');
    const pid = document.querySelector(`input[value="${id}"]`);
    const divs = pid.parentElement.querySelectorAll('.card-detail');
    nombre.value = divs[0].children[1].innerText;
    sabor.value = divs[1].children[1].innerText;
    marca.value = divs[2].children[1].innerText;
    precioPaquete.value = divs[3].children[1].innerText.substring(2);
    pesoPaquete.value = divs[4].children[1].innerText;
    cantidadPaquetesStock.value = divs[5].children[1].innerText;
    submit.value = 'Editar';
    showForm();
}
