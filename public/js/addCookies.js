const form = document.getElementById('form-galletas');
const submit = document.getElementById('btn-submit');
let edit = false;
form.addEventListener('submit', async e => {
    e.preventDefault();
    const nombre = document.getElementById('nombre').value;
    const sabor = document.getElementById('sabor').value;
    const marca = document.getElementById('marca').value;
    const precioPaquete = document.getElementById('precio').value;
    const pesoPaquete = document.getElementById('peso').value;
    const cantidadPaquetesStock = document.getElementById('stock').value;
    const formData = new FormData();
    formData.append('nombre', nombre);
    formData.append('sabor', sabor);
    formData.append('marca', marca);
    formData.append('precioPaquete', precioPaquete);
    formData.append('pesoPaquete', pesoPaquete);
    formData.append('cantidadPaquetesStock', cantidadPaquetesStock);
    if (!edit) {
        const res = await fetch('api/cookies', {
            method: 'POST',
            body: formData
        });
        const data = await res.json();
        if (data.nombre) {
            alert('Creacion exitosa');
            location.reload();
        } else alert('Compruebe la informacion introducida');
    } else if (edit) {
        const id = document.getElementById('idEdit').value;
        formData.append('id', id);
        const res = await fetch('api/cookies/update', {
            method: 'POST',
            body: formData
        });
        const data = await res.json();
        if (data.nombre) {
            alert('Edición exitosa');
            location.reload();
        } else alert('Compruebe la informacion introducida');
    }
})