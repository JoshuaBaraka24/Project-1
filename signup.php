<?php
require "load.php";
$ObjLayouts->heading();
$ObjMenus->main_menu();
$ObjHeadings->main_banner();
$ObjForm->sign_up_form($ObjGlob);
$ObjLayouts->footer();