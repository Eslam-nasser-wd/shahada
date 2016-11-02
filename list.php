<?php include 'assets/header.php' ?>
<div id="DevAgency">
	<div class="cards-warpper cf">
      <div class="row">


		<form action="#" class="search-form">
			<div class="input-field">
				<a class="waves-effect waves-light btn col s2">
					<i class="material-icons right">search</i> بحث
				</a>
				<input type="text" class="col s10" placeholder="أبحث">
			</div>
		</form>
		

		<!-- Simple search -->
	    <!-- <form class="col s12 search-input">
	        <div class="input-field col s12">
				<i class="material-icons prefix">search</i>
				<input id="icon_telephone" type="tel" class="validate">
				<label for="icon_telephone">بحث</label>
	        </div>
	    </form> -->

		<?php for ($i=0; $i < 10; $i++) { ?>
        <div class="col s12 card inActive">
			<div class="col s12 card-head">
				<div class="col m2 s6">
					<p>هيثم آمين</p>
					<p class="job-title">الإسكندرية</p>
				</div>
				<div class="col m2 s6">
					<p>أسم الشهادة:</p>
					<p class="job-title">أسم الشهادة</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">تاريخ الشهادة:</p>
					<p>20/10/2016</p>
				</div>
				<div class="col s3 left image-thump-warpper">
					<div class="image hide-on-small-only">
						<img src="assets/img/1.png" alt="Image name">
					</div>
					<div class="text">
						<p class="info-title">المرفقات :</p>
						<p><a target="_blank" href="assets/img/1.png">أسم الشهادة</a></p>
					</div>
				</div>
			</div>
			<div class="col s12 card-footer">
				<button onclick="actionAccept('`+item._id+`', this)" class="btn waves-effect waves-light" name="action">موافقة
				</button>
				<button onclick="actionReject('`+item._id+`', this)" class="btn waves-effect waves-light red" name="action">رفض
				</button>
			</div>
        </div><!--/single-card-->
        <?php } ?>




      </div><!--/row-->
  </div><!--/cards-warpper-->
</div><!--/#indexView-->

<div class="logos-warpper">
  <?php for ($i=0; $i < 4; $i++) { ?>
    <div class="single-logo">
      <img src="assets/img/logo.png" alt="LOGO">
    </div>
  <?php } ?>
</div>

<?php include 'assets/footer.php' ?>
