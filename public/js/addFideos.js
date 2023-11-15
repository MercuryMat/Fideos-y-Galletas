const form = document.getElementById('form-fideos');
const submit = document.getElementById('btn-submit');
let edit = false;
form.addEventListener('submit', async e => {
    e.preventDefault();
    const tipo = document.getElementById('tipo').value;
    const marca = document.getElementById('marca').value;
    const precioPaquete = document.getElementById('precio').value;
    const pesoPaquete = document.getElementById('peso').value;
    const cantidadPaquetesStock = document.getElementById('stock').value;
    const formData = new FormData();
    formData.append('tipo', tipo);
    formData.append('marca', marca);
    formData.append('precioPaquete', precioPaquete);
    formData.append('pesoPaquete', pesoPaquete);
    formData.append('cantidadPaquetesStock', cantidadPaquetesStock);
    if (!edit) {
        const res = await fetch('api/fideos', {
            method: 'POST',
            body: formData
        });
        const data = await res.json();
        if (data.marca) {
            alert('Creacion exitosa');
            location.reload();
        } else alert('Compruebe la informacion introducida');
    } else if (edit) {
        const id = document.getElementById('idEdit').value;
        formData.append('id', id);
        const res = await fetch('api/fideos/update', {
            method: 'POST',
            body: formData
        });
        const data = await res.json();
        if (data.marca) {
            alert('Edición exitosa');
            location.reload();
        } else alert('Compruebe la informacion introducida');
    }
})