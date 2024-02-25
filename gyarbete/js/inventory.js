fetch('https://dummyjson.com/products')
.then(response => response.json())
.then(data =>{
    console.log(data);
    for(let i = 0; i < data.products.length; i++){
        let product = data.products[i];
        add_Products(product);
    }
})

function add_Products(product){
    let div = document.createElement("div");
    let img = document.createElement("img");
    let h2 = document.createElement("h2");
    let h4 = document.createElement("h4");
    let p = document.createElement("p");

    img.src = product.images[0];
    div.appendChild(img);

    h2.innerHTML = product.title;
    div.appendChild(h2);

    h4.innerHTML = product.price + "kr";
    div.appendChild(h4);

    p.innerHTML = product.stock + "st";
    div.appendChild(p);
    
    document.body.appendChild(div);
}