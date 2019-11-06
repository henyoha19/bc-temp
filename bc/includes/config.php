<?php
/*
    config.php allows us to place configuration information
    into our web application
*/

//identifies unique page url
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//stores global data for site
$config = new stdClass;

//these are defaults
$config->slogan = 'It\'s a kind of magic!';
$config->banner = 'LARGEBUCKS COFFEE';

//these are page specific
switch(THIS_PAGE)
{
    case 'template.php':
        $config->title = 'Template';
    break;
        
    case 'contact.php':
        $config->title = 'Contact Page';
        $config->slogan = 'Contact the magic!';
    break;
        
    default:
       $config->title = THIS_PAGE; 
        
}

//functions go at the bottom

function bcLinks($nav)
{
   $myReturn = '';
    foreach($nav as $url => $text){
        if(THIS_PAGE == $url){//current page
            $myReturn .= '
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            ';
        }else{//all other pages
            $myReturn .= '
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            ';
        }//end if

    }//end foreach
 
    return $myReturn;
}//end bcLinks()
