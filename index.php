<?php $page_title = "عضو هيئة التدريس" ?>
<?php include 'assets/header.php' ?>

    <!-- Form View -->
    <div id="indexView">
      <div class="form cf">
        <div class="row">
          <h1>تقديم طلب شهادة</h1>
          <form class="col s12" id="myform">
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" 
                    data-validation="required"
                    data-validation-error-msg="برجاء ادخال الإسم"
                >
                <label for="first_name">الإسم</label>
              </div>
              <div class="input-field col s5 left">
                <select>
                  <option value="" disabled selected>أختر المحافظة</option>
                  <option>محافظة 1</option>
                  <option>محافظة 2</option>
                  <option>محافظة 3</option>
                  <option>محافظة 4</option>
                  <option>محافظة 5</option>
                  <option>محافظة 6</option>
                  <option>محافظة 7</option>
                  <option>محافظة 8</option>
                  <option>محافظة 9</option>
                  <option>محافظة 10</option>
                </select>
                <label>أختر المحافظة</label>
              </div>

              <div class="input-field col s6">
                <input id="email" type="email" 
                    data-validation="email" 
                    data-validation-error-msg="يرجي إدخال الإيميل">
                <label for="email">البريد الإلكتروني</label>
              </div>
              <div class="input-field col s5 left">
                <input id="phone_number" type="text" 
                    onkeyup="numbersOnly(this, 1)"
                    data-validation="number"
                    data-validation-error-msg="يرجي إدخال رقم الهاتف"
                >
                <label for="phone_number">رقم الهاتف</label>
                <span class="notice"></span>
              </div>
              <div class="input-field col s8">
                <input id="id_number" type="text" 
                    onkeyup="numbersOnly(this, 0)" 
                    data-validation="number"
                    data-validation-error-msg="يرجي ادخال الالرقم القومي"
                >
                <label for="order_title">الرقم القومي</label>
              </div>
              <br><br>
              <div class="input-field col s8">
                <label class="right files-label">الشهادات</label>
                <div class="file-field">
                  <div class="btn">
                    <span>إختر ملف</span>
                    <input type="file" accept="image/*">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </div>
              <div class="cf"></div>
              <br><br>
              <div class="submit left-align col s12">
                <div id="postData" class="btn waves-effect waves-light">إرسال
                  <i class="material-icons left">send</i>
                </div>
              </div>
            </div>
          </form>
        </div>

        
        <!-- Popups -->
        <span id="formSaved" class="notice-label z-depth-2">
          <i class="material-icons">done</i>
          تم إرسال الطلب
        </span>
        <!-- Form has NOT been submited -->
        <span id="formNotSaved" class="notice-label z-depth-2">
          <i class="material-icons">highlight_off</i>
          الرجاء التأكد من البيانات المدخلة
        </span>
      </div>
    </div><!--/#indexView-->



<?php include 'assets/footer.php' ?>
