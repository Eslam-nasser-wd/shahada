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
         document.getElementById('inputError').classList.add('open');
        }else{
          // document.getElementsByClassName('notice')[spanIndex].innerHTML = '';
          document.getElementById('inputError').classList.remove('open');
        }
      }
    </script>
  </head>
  <body>

    <!-- Dropdown Structure -->
    <!-- <ul id="dropdown1" class="dropdown-content">
      <li><a href="index.php">عضو هيئة التدريس</a></li>
      <li><a href="devAgency.php">وكالة تطوير المعهد</a></li>
      <li><a href="dean.php">عميد المعهد</a></li>
      <li><a href="board.php">مجلس المعهد</a></li>
      <li><a href="deputy.php">نائب المعهد</a></li>
    </ul>
    <nav class="cf">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo right">
          LOGO
        </a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li class="username"><a class="dropdown-button" href="#!" data-activates="dropdown1">
            <i class="material-icons">perm_identity</i>
            <?php echo $page_title ?>
          </a></li>
        </ul>
      </div>
    </nav> -->


<!-- Errors log for the user -->
<span id="inputError" class="notice-label z-depth-2">
  برجاء إدخال أرقام فقط
  <i class="material-icons">highlight_off</i>
</span>
