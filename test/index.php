<?php
 require_once("../libs/Smarty.class.php");

 $smarty = new Smarty;

 $smarty->assign('opt_select', array(
    'india'=>'India',
    'usa'=>'USA',
    'uae'=>'uae'
 ));

 $smarty->assign('Contacts',
	array('fax' => '555-222-9876',
		'email' => 'megha@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
	array('fax' => '555-222-8876',
		'email' => 'pete.gupta@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	)
);
$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
    );


    $smarty->assign('cut_choose', array(
        'php'=>'php',
        'java'=>'java',
        'python'=>'python',
        'c'=>'c'
    ));
    $smarty->assign('cust_selected','python');


    $smarty->assign('choose',array(
        'm'=>'Male',
        'f'=>'Female'
    ));
    $smarty->assign('select_one','m');
   $smarty->assign('culture',$our_culture);

 $smarty->assign('string1', 'uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.');
 $smarty->assign('string2', 'At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.');
 $smarty->assign('data',array(5,10,15,20,25,30,35,40,45,50));
 $smarty->assign('article','<h1>This is an Article</h1>');
 $smarty->assign('someText','this is othertext');
 $smarty->assign('da',array(1,2,3,4,5,6,7));
 $smarty->assign('opt_selected','india');
 $smarty->display('template.tpl');
?>