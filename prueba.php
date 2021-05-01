<?php
            $a_productos = json_decode(file_get_contents('carrito.json'), true);

            foreach ($a_productos as $a_producto) {
                    $pr_id_categoria = $a_producto['id_categoria'];
                    $pr_nombre = $a_producto['nombre_producto'];
                    $pr_id_marca = $a_producto['id_marca'];
                    $pr_id = $a_producto['id_producto'];
                    $pr_im = 'imagenes//' . $pr_id_marca . '//' . $pr_id_categoria . '//' . $pr_id . '.jpg';
                    $pr_precio = $a_producto['precio'];
            ?>

                    <div class="col-12 col-lg-4 col-md-6">
                        <a href="productos.php?id_producto=<?php echo $pr_id ?>"> <img class="img-fluid" src="<?php echo $pr_im ?>"></a>

                        <a href="productos.php?id_producto=<?php echo $pr_id ?>"></a>
                        <p class="text-uppercase"> <?php echo $pr_nombre ?></p>
                        <p><?php echo '$', $pr_precio ?></p>
                        <a href="detalle.php?id_producto=<?php echo $pr_id ?>" class="btn-comprar pb-2">COMPRAR</a>

                    </div>

            <?php
                
            } ?>