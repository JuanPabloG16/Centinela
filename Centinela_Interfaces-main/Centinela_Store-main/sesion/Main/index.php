<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Centinela Store</title>
		<link rel="stylesheet" href="index.css" />
	</head>
	<body>
		<header>
			<h1>Centinela Store</h1>
			<a href="../Inventario/server-side-php-main/index.php" target="_blank"><h5>inventario</h5></a>
			<a href="../proveedor/index.php" target="_blank"><h5>Proveedores</h5></a>
			<a href="../CerrarSesion.php" class="btn btn-danger">Cerrar Sesion</a>


			<div class="container-icon">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="1.5"
					stroke="currentColor"
					class="icon-cart"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
					/>
				</svg>
				

				<div class="container-cart-products hidden-cart">
					<div class="cart-product">
						<div class="info-cart-product">
							<h4>PRODUCTOS AGREGADOS</h4>
						</div>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="icon-close"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M6 18L18 6M6 6l12 12"
							/>
						</svg>
					</div>
					<div class="cart-total">
						<ul class="productos-agregados"></ul>
						<h3>Total:&nbsp;&nbsp;<span class="total-pagar">No tiene productos agregados</span></h3>
						
						
					</div>
					<script>
						let total = 0; // Variable para almacenar el total de la compra
						let carrito = {}; // Objeto para almacenar la información de los productos en el carrito
						
						function agregarProducto(nombre, precio) {
							// Verifica si el producto ya está en el carrito
							if (carrito[nombre]) {
								carrito[nombre].cantidad++; // Incrementa la cantidad del producto en el carrito
							} else {
								carrito[nombre] = { precio: precio, cantidad: 1 }; // Agrega el producto al carrito
							}
							
							total += precio; // Añade el precio del producto al total
							document.querySelector(".total-pagar").textContent = `$${total}`; // Actualiza el valor del total en el HTML
							
							// Actualiza la lista de productos agregados en el HTML
							let listaProductos = "";
							for (let nombreProducto in carrito) {
								listaProductos += `<li>${nombreProducto} x ${carrito[nombreProducto].cantidad} - $${carrito[nombreProducto].precio * carrito[nombreProducto].cantidad}</li>`;
							}
							document.querySelector(".productos-agregados").innerHTML = listaProductos;
						}
					</script>
				</div>
			</div>
			</div>
		</header>
		<div class="container-items">
			<div class="item">
				<figure>
					<img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71LQ8hA8roL.jpg" alt="producto"/>
				</figure>
				<div class="info-product">
					<h2>Mascarilla facial</h2>
					<p class="price">$4.500</p>
					<button onclick="agregarProducto('Mascarilla facial', 4500)">Añadir al carrito</button>
				</div>  
			</div>
			<div class="item">
				<figure>
					<img src="https://media.glamour.mx/photos/61907572a6e030d6480f9e2f/master/w_1600%2Cc_limit/221311.jpg" alt="producto"/>
				</figure>
				<div class="info-product">
					<h2>Crema rejuvenecedora</h2>
					<p class="price">$25.000</p>
					<button onclick="agregarProducto('Crema rejuvenecedora', 25000)">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="https://www.isdin.com/blog/wp-content/uploads/2018/01/051-2-protector-facial-solar.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Protector Solar</h2>
					<p class="price">$85.000</p>
					<button onclick="agregarProducto('Protector Solar', 85000)">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="https://olimpica.vtexassets.com/arquivos/ids/865741/650240032677_2.jpg?v=637908511792030000"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Crema humectante</h2>
					<p class="price">$8.000</p>
					<button onclick="agregarProducto('Crema humectante', 8000)">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="https://m.media-amazon.com/images/I/51KUBMmswfL.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Mascarilla para los puntos negros</h2>
					<p class="price">$10.000</p>
					<button onclick="agregarProducto('Marcarilla para los puntos negros', 10000)">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="https://laopinion.com/wp-content/uploads/sites/3/2020/09/2-producto-aclaradora.jpg?quality=75&strip=all&w=1000"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Crema aclaradora</h2>
					<p class="price">$12.000</p>
					<button onclick="agregarProducto('Crema aclaradora', 12000)">Añadir al carrito</button>
				</div>
			</div>
		</div>

        <script src="index.js"></script>
	</body>
</html>