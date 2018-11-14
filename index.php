<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ajax Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes color-1 {
  0% {
    background-color: #EB73B9;
  }
  100% {
    background-color: #17EAD9;
  }
}
@keyframes color-1 {
  0% {
    background-color: #EB73B9;
  }
  100% {
    background-color: #17EAD9;
  }
}
::-moz-selection {
  background: #6078EA;
  color: white;
  text-shadow: none;
}
::selection {
  background: #6078EA;
  color: white;
  text-shadow: none;
}

::-webkit-selection {
  background: #6078EA;
  color: white;
  text-shadow: none;
}

body {
  font-family: 'Montserrat', 'Helevtica', sans-serif;
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: #009688;
  color: #4B4848;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: background-color 1.25s ease-in-out;
}
body.is-focus {
  background-color: #81D4FA;
}

.title-container {
  position: absolute;
  top: 38%;
  left: 50%;
  width: 80%;
  margin: 0 auto;
  text-align: center;
  overflow: hidden;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.title-container .title {
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  transition: -webkit-transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
  transition-delay: 0.25s;
  margin: 0;
  color: #171515;
}
.title-container .title-down {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
  transition: -webkit-transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
  transition-delay: 0.25s;
  margin: 0;
  color: #171515;
}
.is-focus .title-container .title {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.is-type .title-container .title-down {
  -webkit-transform: translateY(-30px);
          transform: translateY(-30px);
}
.is-type .title-container .title {
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}

.field-container {
  position: relative;
  padding: 0;
  margin: 0;
  border: 0;
  width: 330px;
  height: 40px;
}

.icons-container {
      position: relative;
    top: -90%;
    right: -89%;
    width: 37px;
    height: 37px;
    overflow: hidden;
}

.icon-close {
  position: absolute;
  top: 2px;
  left: 2px;
  width: 75%;
  height: 75%;
  opacity: 0;
  cursor: pointer;
  -webkit-transform: translateX(-200%);
          transform: translateX(-200%);
  border-radius: 50%;
  transition: opacity 0.25s ease, -webkit-transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1);
  transition: opacity 0.25s ease, transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1);
  transition: opacity 0.25s ease, transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1), -webkit-transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1);
}
.icon-close:before {
  content: "";
  border-radius: 50%;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  border: 2px solid transparent;
  border-top-color: #6078EA;
  border-left-color: #6078EA;
  border-bottom-color: #6078EA;
  transition: opacity 0.2s ease;
}
.icon-close .x-up {
  position: relative;
  width: 100%;
  height: 50%;
}
.icon-close .x-up:before {
  content: "";
  position: absolute;
  bottom: 2px;
  left: 3px;
  width: 50%;
  height: 2px;
  background-color: #6078EA;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.icon-close .x-up:after {
  content: "";
  position: absolute;
  bottom: 2px;
  right: 0px;
  width: 50%;
  height: 2px;
  background-color: #6078EA;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.icon-close .x-down {
  position: relative;
  width: 100%;
  height: 50%;
}
.icon-close .x-down:before {
  content: "";
  position: absolute;
  top: 5px;
  left: 4px;
  width: 50%;
  height: 2px;
  background-color: #6078EA;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.icon-close .x-down:after {
  content: "";
  position: absolute;
  top: 5px;
  right: 1px;
  width: 50%;
  height: 2px;
  background-color: #6078EA;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.is-type .icon-close:before {
  opacity: 1;
  -webkit-animation: spin 0.85s infinite;
          animation: spin 0.85s infinite;
}
.is-type .icon-close .x-up:before, .is-type .icon-close .x-up:after {
  -webkit-animation: color-1 0.85s infinite;
          animation: color-1 0.85s infinite;
}
.is-type .icon-close .x-up:after {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.is-type .icon-close .x-down:before, .is-type .icon-close .x-down:after {
  -webkit-animation: color-1 0.85s infinite;
          animation: color-1 0.85s infinite;
}
.is-type .icon-close .x-down:before {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.is-type .icon-close .x-down:after {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
}

.icon-search {
  position: relative;
  top: 5px;
  left: 8px;
  width: 50%;
  height: 50%;
  opacity: 1;
  border-radius: 50%;
  border: 3px solid #c7d0f8;
  transition: opacity 0.25s ease, -webkit-transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1);
  transition: opacity 0.25s ease, transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1);
  transition: opacity 0.25s ease, transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1), -webkit-transform 0.43s cubic-bezier(0.694, 0.048, 0.335, 1);
}
.icon-search:after {
  content: "";
  position: absolute;
  bottom: -9px;
  right: -2px;
  width: 4px;
  border-radius: 3px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  height: 10px;
  background-color: #c7d0f8;
}

.field {
  border: 0!important;
  width: 100%!important;
  height: 100%!important;
  padding: 10px 20px!important;
  background: white!important;
  border-radius: 3px!important;
  box-shadow: 0px 8px 15px rgba(75, 72, 72, 0.1)!important;
  transition: all 0.4s ease!important;
}
.field:focus {
  outline: none;
  box-shadow: 0px 9px 20px rgba(75, 72, 72, 0.3);
}
.field:focus + .icons-container .icon-close {
  opacity: 1;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.field:focus + .icons-container .icon-search {
  opacity: 0;
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}




    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    .active-cyan-4 input[type=text]:focus:not([readonly]) {
    border: 1px solid #4dd0e1;
    box-shadow: 0 0 0 1px #4dd0e1;
}

</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<script type="text/javascript">
    $(document).on('ready', function() {
  
  $('.field').on('focus', function() {
    $('body').addClass('is-focus');
  });
  
  $('.field').on('blur', function() {
    $('body').removeClass('is-focus is-type');
  });
  
  $('.field').on('keydown', function(event) {
    $('body').addClass('is-type');
    if((event.which === 8) && $(this).val() === '') {
      $('body').removeClass('is-type');
    }
  });
  
});
</script>
</head>
<body>
    <div class="title-container">
  <h1 class="title">It's all about countries.</h1>
  <h1 class="title-down">Search'in countries...</h1>
</div>

<fieldset class="field-container search-box active-cyan-4 mb-4">
  <input class="form-control field" type="text" autocomplete="off" placeholder="Search country..." aria-label="Search">
  <div class="icons-container">
    <div class="icon-search"></div>
    <div class="icon-close">
      <div class="x-up"></div>
      <div class="x-down"></div>

    </div>
  </div>
  <div class="result"></div>
</fieldset>
    <!-- Search form -->

</body>
</html>
