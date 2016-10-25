<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>شهادة</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/output/style.css">
    <script>
      // Filter the numbers [PLESE DON'T MOVE THIS CODE]
      function numbersOnly(input, spanIndex){
      var regex = /[^0-9]/gi,
          str   = input.value,
          len   = str.length,
          last  = str.charAt(len - 1);
        input.value = input.value.replace(regex, '');
        if ( regex.test(last) ) {
         // document.getElementsByClassName('notice')[spanIndex].innerHTML = 'برجاء ادخال أرقام فقط, الحرف ('+last+') ممنوع!';
         // document.getElementById('inputError').classList.add('open');
        }else{
          // document.getElementsByClassName('notice')[spanIndex].innerHTML = '';
          // document.getElementById('inputError').classList.remove('open');
        }
      }
    </script>
  </head>
  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="hide-on-med-and-down">
          <li><a href="index.php">أضف شهادة</a></li>
          <li><a href="list.php">قائمة الشهادات</a></li>
          <li><a href="./en/">English</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.php">أضف شهادة</a></li>
          <li><a href="list.php">قائمة الشهادات</a></li>
          <li><a href="./en/">English</a></li>
        </ul>
      </div>
    </nav>



