<?php
require_once("../libs/Smarty.class.php");

$smarty = new Smarty;


$smarty->assign('choose_opt', array(
    'volvo'=>'volvo',
    'toyota'=>'toyota',
    'maruti'=>'maruti',
    'suzuki'=>'suzuki'
));
$smarty->assign('ch_id','volvo');


$smarty->assign('cust_opt', array(
    'm'=>'Male',
    'f'=>'Female'
));

$email_ids = array(
    array(
        "trainer_name" => "Megha Sinha",
        "email" => "megha@ucertify.com",
    ),
    array(
        "trainer_name" => "Vikas Shukla",
        "email" => "vikas.shukla@ucertify.com",
    ),
    array(
        "trainer_name" => "Tanish Yadav",
        "email" => "tanish.yadav@ucertify.com",
    ),
    array(
        "trainer_name" => "Prashant Gupta",
        "email" => "pete@ucertify.com",
    )
);

$smarty->assign('email_id',$email_ids);
$smarty->assign('data',array(1,2,3,4,5,6,7));
$smarty->assign('cust_select','m');
$smarty->assign('countPara','uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels. It offers cloud-based and device-enabled, teaching and learning management platforms for online, anywhere, anytime, competency-based learning. Courses delivered on uCertify LEARN include highly interactive');
$smarty->assign('countSen','With more than 400 titles and partnerships with major publishers, uCertify offers depth and breadth learning in its course offerings. uCertify provides this solution in a cloud base, hassle free hosted environment with powerful and scalable infrastructure and 24x7 support.');
$smarty->assign('countwords','At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning. Thus, we provide hands-on courses and labs. The courses come complete with Pre-Assessment, Exercises, Flashcards, Quizzes, and Post-Assessments. Hands-on labs are virtual and live environments where students learn by doing. Labs encourage exploration and experimentation in a risk-free environment resulting in better learning for students.');
$smarty->assign('countChr','uCertify, headquartered in Pleasanton, CA, was founded on the belief that we "learn by doing" and interactivity is the key to effective learning, using virtual environments where students learn by doing. The virtual environment encourages safe exploration and experimentation resulting in better learning. uCertify platform is equally effective for self-paced, instructor-led or blended learning.');
$smarty->assign('someText',' uCertify, headquartered in Pleasanton, CA, was founded on the belief that we "learn by doing" and interactivity is the key to effective learning, using virtual environments where students learn by doing. The virtual environment encourages safe exploration and experimentation resulting in better learning. uCertify platform is equally effective for self-paced, instructor-led or blended learning.');
$smarty->assign('data',array(1,2,3,4,5,6,7));
$smarty->assign('text','hello word');
$smarty->display('template.tpl');
?>