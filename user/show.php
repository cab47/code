<?php
parse_str($_SERVER['QUERY_STRING']);

if ($approve=='true')

	echo" accepted !";
else 
echo "rejected";

?>
<body onload="goBack()">
  <head>
    <script>
    function goBack()
    {
    window.history.back();
    }
    </script>
 </head>
</body>
