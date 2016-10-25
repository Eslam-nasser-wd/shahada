<?php include 'assets/header.php' ?>
<div id="DevAgency">
	<div class="cards-warpper cf">
      <div class="row">

		<form class="col s12 search-input">
	        <div class="input-field col s12">
				<i class="material-icons prefix">search</i>
				<input id="icon_telephone" type="tel" class="validate">
				<label for="icon_telephone">Search</label>
	        </div>
	    </form>

		<?php for ($i=0; $i < 10; $i++) { ?>
        <div class="col s12 card inActive">
			<div class="col s12 card-head">
				<div class="col m2 s6">
					<p>Haitham Amin</p>
					<p class="job-title">Alax</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">National ID</p>
					<p>1234567890</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">Phone Number</p>
					<p>011111111111</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">Email</p>
					<p>mail@mail.com</p>
				</div>
				<div class="col m3 s6 image-thump-warpper">
					<div class="image hide-on-small-only">
						<img src="assets/img/1.png" alt="Image name">
					</div>
					<div class="text">
						<p class="info-title">Attachments :</p>
						<p><a target="_blank" href="assets/img/1.png">Full Image</a></p>
					</div>
				</div>
			</div>
			<div class="col s12 card-footer">
				<button class="btn waves-effect waves-light" name="action">accept
				</button>
				<button class="btn waves-effect waves-light red" name="action">Refusal
				</button>
			</div>
        </div><!--/single-card-->
        <?php } ?>




      </div><!--/row-->
  </div><!--/cards-warpper-->
</div><!--/#indexView-->


<?php include 'assets/footer.php' ?>
