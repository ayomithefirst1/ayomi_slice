<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);



if (count($uri) > 2) {


  if (!empty($_GET)) {
  $query_string = explode("?",$uri[2])[1];
}else{
  $query_string = "";
}

  switch ($uri[1]."/".$uri[2]) {

    case 'blog/'.$uri[2]:
    include APP_PATH."/views/blog-details.php";
    break;

    case 'project/'.$uri[2]:
    include APP_PATH."/views/project-details.php";
    break;

    // case 'service_details/'.$uri[2]:
    // include APP_PATH."/views/service-details.php";
    // break;
    //
    // default:
    // include APP_PATH."/views/404.php";
    // break;

  }



}else{
  if (!empty($_GET)) {
  $query_string = explode("?",$uri[1])[1];
}else{
  $query_string = "";
}
  // $query_string = explode("?",$uri[1])[1];
  switch ($uri[1]) {



  case '':
  include APP_PATH."/views/home.php";
  break;


  case 'causes':
  include APP_PATH."/views/causes.php";
  break;

  case 'home':
  include APP_PATH."/views/home.php";
  break;


  case 'portfolio':
  include APP_PATH."/views/portfolio.php";
  break;

  case 'events':
  include APP_PATH."/views/events.php";
  break;

  case 'checkout?'.$query_string:
  include APP_PATH."/views/checkout.php";
  break;

  case 'blog':
  include APP_PATH."/views/blog.php";
  break;

  case 'about':
  include APP_PATH."/views/about.php";
  break;

  case 'contact':
  include APP_PATH."/views/contact.php";
  break;

  case 'contact':
  include APP_PATH."/views/contact.php";
  break;

  case 'about-us':
  include APP_PATH."/views/about.php";
  break;

  case 'project-details':
  include APP_PATH."/views/project-details.php";
  break;

  case 'services':
  include APP_PATH."/views/services.php";
  break;

  case 'forgot_password':
  include APP_PATH."/views/forgot_password.php";
  break;

  case 'confirmRecovery':
  include APP_PATH."/views/confirm_recovery.php";
  break;

  // case 'farmers':
  // include APP_PATH."/views/farmers.php";
  // break;

  case 'blog':
  include APP_PATH."/views/blog.php";
  break;

  // case 'contact-us-mail':
  // include APP_PATH."/views/contact-us-mail-backend.php";
  // break;

  case 'pricing':
  include APP_PATH."/views/pricing.php";
  break;

  case 'request-form':
  include APP_PATH."/views/request-form.php";
  break;

  case 'signup':
  include APP_PATH."/views/signup.php";
  break;

  case 'signup?'.$query_string:
  include APP_PATH."/views/signup.php";
  break;

  case 'delete?'.$query_string:
  include APP_PATH."/views/delete.php";
  break;

  case 'confirm?'.$query_string:
  include APP_PATH."/views/confirm.php";
  break;

  case 'verify?'.$query_string:
  include APP_PATH."/views/verify.php";
  break;

  case 'changePassword':
  include APP_PATH."/views/change_passwor.php";
  break;

  case 'login':
  include APP_PATH."/views/login.php";
  break;

  case 'login?'.$query_string:
  include APP_PATH."/views/login.php";
  break;

  case 'projects':
  include APP_PATH."/views/projects.php";
  break;

  case 'logout':
  include APP_PATH."/views/logout.php";
  break;


      case 'fetchPost':
      include APP_PATH."/views/includes/ajax_request/fetchPost.php";
      break;

  // default:
  // include APP_PATH."/views/404.php";
  // break;
}


}










 ?>
