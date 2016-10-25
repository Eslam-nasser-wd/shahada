<?php include 'assets/header.php' ?>
<div id="DevAgency">
	<div class="cards-warpper cf">
      <div class="row">
		<?php for ($i=0; $i < 10; $i++) { ?>
        <div class="col s12 card inActive">
			<div class="col s12 card-head">
				<div class="col m2 s6">
					<p>هيثم آمين</p>
					<p class="job-title">الإسكندرية</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">الرقم القومي</p>
					<p>1234567890</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">رقم الهاتف</p>
					<p>011111111111</p>
				</div>
				<div class="col m2 s6">
					<p class="info-title">الايميل الإلكتروني</p>
					<p>mail@mail.com</p>
				</div>
				<div class="col s3 image-thump-warpper">
					<div class="image hide-on-small-only">
						<img src="assets/img/1.png" alt="Image name">
					</div>
					<div class="text">
						<p class="info-title">المرفقات :</p>
						<p><a target="_blank" href="assets/img/1.png">صورة كاملة</a></p>
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


<?php include 'assets/footer.php' ?>
