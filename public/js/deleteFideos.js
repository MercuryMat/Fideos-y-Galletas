const dlt = document.getElementById('btn-delete');

const deleteCookie = async (id) => {
    const res = await fetch('api/fideos/' + id, {
        method: 'delete'
    });
    const data = await res.json();
    if(data.marca) {
        alert('Eliminacion exitosa');
        location.reload();
    } else alert('Error interno');
} 