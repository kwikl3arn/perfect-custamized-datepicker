
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title></title>
  <script
    type="text/javascript"
    src="http://code.jquery.com/jquery-1.7.1.js"
    
  ></script>
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
     <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css">

  <style id="compiled-css" type="text/css">
      body {
  font-size: 8pt;
  font-family: Verdana;
  padding: 5px;
}

  </style>


  <!-- TODO: Missing CoffeeScript 2 -->

  <script type="text/javascript">


 
      
$(document).ready(function() {
  var today = new Date();

  var yrRange = today.getFullYear();
  $("#txtFromDate").datepicker({
    yearRange: "2019:" + yrRange,
    changeMonth: true,
    changeYear: true,
	dateFormat:'dd-mm-yy',
    stepMonths: false,
	
	//maxDate: "today",//takes from script
   // endDate: "today",//takes from script
    endDate: "<?php echo date('d-m-y');?>",//takes from sever
    maxDate: "<?php echo date('d-m-y');?>",//takes from sever
  
	
    onSelect: function(selected) {
      $("#txtToDate").datepicker("option", "minDate", selected)
    }
  });
  $("#txtToDate").datepicker({

    yearRange: "2019:" + yrRange,
    changeMonth: true,
    changeYear: true,
	dateFormat:'dd-mm-yy',
    stepMonths: false,
   endDate: "<?php echo date('d-m-y');?>",//takes from sever
    maxDate: "<?php echo date('d-m-y');?>",//takes from sever
    //maxDate: "today",//takes from script
   // endDate: "today",//takes from script
    onSelect: function(selected) {
      $("#txtFromDate").datepicker("option", "maxDate", selected)
    }
  });
});



 

</script>

</head>
<body>
    <br/> From: <input type="text" id="txtFromDate" /> To: <input type="text" id="txtToDate" />

 <h1> http://jsfiddle.net/a8q4vn71/</h1>

</body>
</html>
