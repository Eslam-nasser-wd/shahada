<?php $page_title = "" ?>
<?php include 'assets/header.php' ?>

    <!-- Form View -->
    <div id="indexView">
      <div class="form cf">
        <div class="row">
          <h1>Submit a certificate request</h1>
          <form class="col s12" id="myform">
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name" type="text" 
                    data-validation="required"
                    data-validation-error-msg="Please enter your name"
                >
                <label for="first_name">Name</label>
              </div>
              <div class="input-field col m5 s12 left">
                <select>
                  <option value="" disabled selected>Select City</option>
                  <option>City 1</option>
                  <option>City 2</option>
                  <option>City 3</option>
                  <option>City 4</option>
                  <option>City 5</option>
                  <option>City 6</option>
                  <option>City 7</option>
                  <option>City 8</option>
                  <option>City 9</option>
                  <option>City 10</option>
                </select>
                <label>Select City</label>
              </div>

              <div class="input-field col m6 s12">
                <input id="email" type="email" 
                    data-validation="email" 
                    data-validation-error-msg="Please enter e-mail.">
                <label for="email">E-mail</label>
              </div>
              <div class="input-field col m5 s12 left">
                <input id="phone_number" type="text" 
                    onkeyup="numbersOnly(this, 1)"
                    data-validation="number"
                    data-validation-error-msg="Please enter a phone number"
                >
                <label for="phone_number">Phone Number</label>
                <span class="notice"></span>
              </div>
              <div class="input-field col m8 s12">
                <input id="id_number" type="text" 
                    onkeyup="numbersOnly(this, 0)" 
                    data-validation="number"
                    data-validation-error-msg="Please enter the national number"
                >
                <label for="order_title">National Number</label>
              </div>
              <br><br>
              <div class="input-field col m8 s12">
                <label class="right files-label"> Certificates </label>
                <div class="file-field">
                  <div class="btn">
                    <span>Choose File</span>
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
                <div id="postData" class="btn waves-effect waves-light">Send
                  <i class="material-icons left">send</i>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div><!--/#indexView-->



<?php include 'assets/footer.php' ?>
