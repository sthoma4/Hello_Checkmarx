<?php

// examples of $_SERVER variables that are considered NOT SAFE and needs sanitizing
//$domain = $_SERVER['HTTP_HOST'];
//if (isset($domain)) {
//    //$domain_sanitized = htmlspecialchars($domain, ENT_QUOTES | ENT_HTML401, 'UTF-8');
//    $domain_sanitized = filter_var($domain, FILTER_SANITIZE_SPECIAL_CHARS,
//        array('flags' => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_HIGH));
//}

//if (isset($_SERVER['HTTP_HOST'])) {
//    $_SERVER['HTTP_HOST'] = filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_SPECIAL_CHARS,
//        array('flags' => FILTER_FLAG_STRIP_LOW | FILTER_FLAG_ENCODE_HIGH));
//}

if (isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = htmlspecialchars($_SERVER['REQUEST_URI'],
        ENT_QUOTES | ENT_HTML401, 'UTF-8');
}

//$request_uri = $_SERVER['REQUEST_URI'];

?>

<html>
<head>
  <title>Hello Checkmarx</title>
</head>
<body>

<?php echo '<p>'.$_SERVER['REQUEST_URI'].'</p>'; ?>
</body>
</html>
