<main id="tienda"class="contenido-principal contenedor ">
        <h2 class="text-center">Nuestros Productos</h2>
        
        <div class="listado-productos">
            <div class="producto">
                <img src="img/producto1.png" alt="Imagen Producto" >

                <div class="texto-producto">
                    <h3>Producto 1</h3>
                    <p>Proin condimentum sodales risus ut aliquet. Nunc eu neque quis sapien feugiat posuere sed nec mauris.</p>
                    <p class="precio">$1,000,000.00</p>

                    <a class="btn" href="#">Agregar al Carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->

            <div class="producto">
                <img src="img/producto2.png" alt="Imagen Producto" >

                <div class="texto-producto">
                    <h3>Producto 2</h3>
                    <p>Proin condimentum sodales risus ut aliquet. Nunc eu neque quis sapien feugiat posuere sed nec mauris.</p>
                    <p class="precio">$1,000,000.00</p>

                    <a class="btn" href="#">Agregar al Carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->

            <div class="producto">
                <img src="img/producto3.png" alt="Imagen Producto" >

                <div class="texto-producto">
                    <h3>Producto 3</h3>
                    <p>Proin condimentum sodales risus ut aliquet. Nunc eu neque quis sapien feugiat posuere sed nec mauris.</p>
                    <p class="precio">$1,000,000.00</p>

                    <a class="btn" href="#">Agregar al Carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->

            <div class="producto">
                <img src="img/producto4.png" alt="Imagen Producto" >

                <div class="texto-producto">
                    <h3>Producto 4</h3>
                    <p>Proin condimentum sodales risus ut aliquet. Nunc eu neque quis sapien feugiat posuere sed nec mauris.</p>
                    <p class="precio">$1,000,000.00</p>

                    <a class="btn" href="#">Agregar al Carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->

            <div class="producto">
                <img src="img/producto5.png" alt="Imagen Producto" >

                <div class="texto-producto">
                    <h3>Producto 5</h3>
                    <p>Proin condimentum sodales risus ut aliquet. Nunc eu neque quis sapien feugiat posuere sed nec mauris.</p>
                    <p class="precio">$1,000,000.00</p>

                    <a class="btn" href="#">Agregar al Carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->

            <div class="producto">
                <img src="img/producto6.png" alt="Imagen Producto" >

                <div class="texto-producto">
                    <h3>Producto 6</h3>
                    <p>Proin condimentum sodales risus ut aliquet. Nunc eu neque quis sapien feugiat posuere sed nec mauris.</p>
                    <p class="precio">$1,000,000.00</p>

                    <a class="btn" href="#">Agregar al Carrito</a>
                </div> <!-- Info Producto -->
            </div> <!-- Producto -->

        </div> <!-- Fin de Listado de Productos -->

        <!-- Modal ----->
        <div class="modal-container">
            <div class="modal modal-close">
              <p class="close">X</p>
    <!--formulario---->
    <div id="contact-form">
              
              <form action="enviar.php" method="POST" class="formulario">
	<!--left--------------------------------------->
	<div class="contact-left">
	<h1 class="c-l-heading"><font style="border-bottom: 3px solid #63D9FF;">Contacto</font></h1>
	<!--name-------->
	<div class="f-name">
	<font >Nombre</font>
	<input type="text" name="name" placeholder="Nombre Completo"/>
	</div>
	<!--email-------->
	<div class="f-email">
	<font >Email</font>
	<input type="text" name="mail" placeholder="Ejemplo@gmail.com"/>
	</div>
	
    <!--Telefono-------->
	<div class="f-name">
	<font >Telefono</font>
	<input type="text" name="mail" placeholder="Ejemplo->951...."/>
	</div>
    <!-- Select------->
    
    <div class="select">
    
                <br><br><br>
                <select name="select" id="format" >
                    <option selected disabled>Select of Nationality</option>
                    <option value="value1">México</option>
                    <option value="value2">Estados Unidos</option>
                    <option value="value3">Colombia</option>

                </select>
            </div>
            <!--cHECKbOX-------->
            <br><br>
            <div class="radio">
                
                    <input type="radio" name="Sexo" id="Male">
                    <label for="Male">Cliente</label>
                    <input type="radio" name="Sexo" id="Female">
                    <label for="Female">Proveedor</label>
                
            </div>
            
            
    <!--Ultimodiv---->
	</div>
	<!--right------------------------------------------->
	<div class="contact-right">
	<!--message-------->
	<div class="message">
	<font >Menssage</font>
	<textarea name="message" rows="5" cols="20" placeholder="Escribe algo..."></textarea>
	</div>
    <!--messagecategorias-------->
	<div class="messcate">
	<font  >Categoria de interes</font><br>
	<textarea name="messageca" rows="5" cols="20" placeholder="Escribe algo..."></textarea>
	</div>
	<!--submit-btn------------>
	<button onclick="sun()" type="submit" name="submit">submit</button>
	</div>
		
	</form>
    </div>
            </div>
        </div>
        <script src="Modal.js"></script>
    </main>