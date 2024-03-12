console.log("Script lancé");
divproducts = document.getElementById("products");

fetch("http://20240312-ajax.test/")
    .then((response) => response.json())
    .then(data => {
        console.log(data);
        data.forEach(product => {
            const price = new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR' }).format(product.price / 100);
            divproducts.innerHTML += `
            <div class="product">
                <h2>${product.name}</h2>
                <p>${price}</p>
            </div>
            `;
        });
    });