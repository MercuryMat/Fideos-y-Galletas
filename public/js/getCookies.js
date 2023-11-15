const path1 = window.location.pathname;
const getCookies = async (query) => {
    const container = document.querySelector('.container-cookies');
    let req = await fetch('api/cookies/' + query);
    let res = await req.json();
    let text = '';

    res.forEach(e => {
        text += `
            <div class="card">
                <div class="card-item">
                    <div class="card-detail">
                        <div>NOMBRE: </div>
                        <div>${e.nombre}</div>
                    </div>
                    <div class="card-detail">
                        <div>SABOR: </div>
                        <div>${e.sabor}</div>
                    </div>
                    <div class="card-detail">
                        <div>MARCA: </div>
                        <div>${e.marca}</div>
                    </div>
                    <div class="card-detail">
                        <div>PRECIO: </div>
                        <div>$ ${e.precioPaquete}</div>
                    </div>
                    <div class="card-detail">
                        <div>PESO: </div>
                        <div>${e.pesoPaquete}</div>
                    </div>
                    <div class="card-detail">
                        <div>STOCK: </div>
                        <div>${e.cantidadPaquetesStock}</div>
                    </div>
                    <input id="id" value="${e.id}" class="hidden"/>
                    ${path1 == '/' ? '' : `
                    <button id="btn-update" onClick="updateCookie(${e.id})">EDITAR</button>
                    <button id="btn-delete" onClick="deleteCookie(${e.id})">ELIMINAR</button>
                    `}
                </div>
            </div>
        `;
    });  
    container.innerHTML = text;
}
