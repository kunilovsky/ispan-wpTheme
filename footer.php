<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spain
 */

?>
<?php global $redux_demo; ?>
<a class="sticky-bottom wa-link" href="">WhatsApp <i class="bi bi-whatsapp"></i></a>
<footer>
	<div class="container footer">
		<div class="row align-items-center">
			<div class="col-lg-4 footer__logo p-3 text-lg-start text-center">
				<img src="<?php echo $redux_demo["logo"]['url']; ?>" alt="logo">
				<div class="pt-3">
					Reservados todos los derechos © 2022
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<button class="btn footer__btn" data-bs-toggle="modal" data-bs-target="#callBack">
					Escríbenos
				</button>
			</div>
			<div class="col-lg-4 text-lg-end text-center footer__link p-3">
				<a href="tel:+34 918 85 64 87" class="footer__contact">+34 918 85 64 87</a>
				<a href="mailto:example@example.com" class="footer__contact">example@example.com</a>
				<a href="#" class="footer__contact text-decoration-underline">Política de privacidad</a>
			</div>
		</div>
		<div class="row text-center">
			<a class="autor" href="https://kunilovsky.ru"><i class="bi bi-code-slash"></i> Developer Kunilovsky VA</a>
		</div>
	</div>
</footer>
<div class="modal fade" id="callBack" tabindex="-1" aria-labelledby="callBack" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h1 class="modal-title fs-5 w-100" id="callBack">
					Envíe su solicitud
				</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="">
					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Su nombre</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">número de contacto</label>
					</div>
					<div class="form-floating mb-3">
						<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
						<label for="floatingTextarea2">Comentario</label>
					</div>
					<div style="font-size: 10px;" class="form-floating mb-3"> Al hacer clic en "Enviar", aceptas la
						política de privacidad </div>
					<button type="submit" class="btn btn-primary w-100">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>