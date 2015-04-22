<div id="myFooter">
	<div class="container">
		<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-12" id = "form">
			<h3 class = "introdutoryText">Help Us Helping YOU</h3>

			
			<!-- Name Form Input -->
			<div class="form-group">
				<div class="col-sm-12">
					<input class="form-control" placeholder="Name" name="name" type="text" id="name">
				</div>

				<div class="col-sm-12">
				</div>
			</div>

			<!-- Email Form Input -->
			<div class="form-group">
				<div class="col-sm-12">
					<input class="form-control" placeholder="Email" name="email" type="email" id="email">
				</div>

				<div class="col-sm-12">
				</div>
			</div>

			<!-- Subject Form Input -->
			<div class="form-group">
				<div class="col-sm-12">
					<textarea class="form-control" rows="4" placeholder="Message" name="message" cols="50"></textarea>
				</div>

				<div class="col-sm-12">
				</div>
			</div>

			<div class = "form-group">
				<div class = "col-sm-12">
					<button type = "submit" class = "btn btn-default pull-right" id = "submitBtn">Send</button>
				</div>
			</div>

		</div>
	</div>
</div>
	</div>
</body>
<footer>

	<!-- JQuery -->
	<script src="{$BASE_URL}javascript/jquery-2.1.3.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="{$BASE_URL}javascript/bootstrap.min.js"></script>
	<!-- SCRIPT -->
	<script src="{$BASE_URL}javascript/script.js"></script>

	
	<script src="{$BASE_URL}javascript/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').slick({
				autoplay: true,
				autoplaySpeed: 2000,
				swipe: true,
				infinite: true,
				adaptiveHeight: true,
				dots: true
			});
		});
	</script>
</footer>
</html>