<?php

class StaticHtml{

    public function main_html_head(){
        $main_head = "
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Joseph Hernandez - Web Developer</title>

            <!-- Site Dependencies -->
            <script src='js/jquery.min.js'></script>
            <!-- Intro font on Home page -->
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet'>
            <!-- End of Site Dependencies -->
            <!-- Bootstrap -->
            <link href='css/bootstrap.min.css' rel='stylesheet'>
            <script src='js/bootstrap.min.js'></script>
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
            <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
            <![endif]-->
            <!-- End of Bootstrap Dependencies -->
            <!-- User Dependencies -->
            <link href='css/site.css' rel='stylesheet'>
            <!-- End of User Dependencies -->
        ";
        return $main_head;
    }

    public function main_navbar(){
        $main_navbar = "
            <div class='navbar navbar-default navbar-fixed-top main_navbar'>
                <div class='container-fluid'>
                    <div class='navbar-header'>
                        <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#web-menu-collapse' aria-expanded='false'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>
            <a class='navbar-brand' href='#'>JOE HERNANDEZ KC</a>
                    </div>
                    <div class='collapse navbar-collapse' id='web-menu-collapse'>
                        <ul class='nav navbar-nav'>
                            <li><a href='#'>Home</a></li>
                            <li><a href='#bio'>Bio</a></li>
                            <li><a href='#dev_profile'>Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        ";
        return $main_navbar;
    }

    public function main_footer(){
        $main_footer = "
            <div class='container-fluid footer_container'>
                <div class='row'>
                    <div class='col-sm-6 col-md-6 col-lg-6'>
                        <div class='developer_info'>
                            <h4>Joe Hernandez - 
                            Web Developer</h4>
                            <p>E-mail: <a href='mailto:josephmar.hernandez@gmail.com'>Gmail</a> | Skype: <a href='skype:joseph.hernandez631?add'> joseph.hernandez631</a> | IRC: JoeH_</p>
                        </div>
                    </div>
                    <div class='col-sm-6 col-md-6 col-lg-6'>
                        <div class='row external_profile'>
                            <a class='pull-right' target='_blank' href='https://www.linkedin.com/in/joseph-hernandez-28936189/'>
                                <img id='linkedin_link' src='images/Logo-White-128px-R.png'>
                            </a>
                            <a class='pull-right' target='_blank' href='https://github.com/joemar27'>
                                <img id='github_link' src='images/GitHub-Mark-Light-120px-plus.png'>
                            </a>
                        </div>
                    </div>
                </div>
            </div>";
        return $main_footer;
    }

}

?>
