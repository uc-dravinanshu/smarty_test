<?php
/* Smarty version 4.3.0, created on 2023-02-13 11:18:36
  from 'C:\xampp\htdocs\smarty\test\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ea0e7c4a8de6_89457597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3432fbf8e3e170f943b36ca1cd687de71088dc6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\test\\template.tpl',
      1 => 1676283513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ea0e7c4a8de6_89457597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>create a select dropdown box</p>
     <?php echo smarty_function_html_options(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['opt_select']->value,'selected'=>$_smarty_tpl->tpl_vars['opt_selected']->value,'separator'=>'<br/>'),$_smarty_tpl);?>


   
     <p>Ques 2.Give an example of escape in smarty</p>
     <p>
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['article']->value, ENT_QUOTES, 'UTF-8', true);?>

     </p>


     <p>Ques 3.Write a program to print the table of 5.</p>
     <p>
        <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>

     </p>

     <p>Ques 4. How to concatenate two strings in smarty? Give an example of it.</p>
     <?php echo ($_smarty_tpl->tpl_vars['someText']->value).(' hello world');?>


     <p>Ques 5. What is the difference between counter and cycle in smarty? Show the difference using examples.</p>
     ans: cycle is used for alternate the each value. counter is used for count the numbers.
     <br/><br/>
     <?php echo smarty_function_counter(array('start'=>1,'skip'=>1),$_smarty_tpl);?>


     <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
     <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
     <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
     <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
     <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>


     <table>
        <?php
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['da']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total !== 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
           <tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
">
              <th><?php echo $_smarty_tpl->tpl_vars['da']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</th>
           </tr>
        <?php
}
}
?>
     </table>


     <p>Ques 6. Write a program to print the values of a given Smarty array in proper format.</p>



     <p>Ques 7. Write a program to perform the following operations on the given strings. Here’s what you need to do:
        Both the strings should be in lowercase.
        Replace “ucertify” with “uCertify” in both the strings.
        Wraps the given strings, only 30 characters in a line.
        Merge both the strings together. 
    </p>

    <p>
        <?php echo mb_strtolower($_smarty_tpl->tpl_vars['string1']->value, 'UTF-8');?>

    </p>
    <p>
        <?php echo mb_strtolower($_smarty_tpl->tpl_vars['string2']->value, 'UTF-8');?>

    </p>
    <?php echo ($_smarty_tpl->tpl_vars['string1']->value).('string2');?>



    <p>
        Ques 8. Write a program to print the given array in the form of an unordered list. Use a loop to implement it.
    </p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['culture']->value, 'cul');
$_smarty_tpl->tpl_vars['cul']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cul']->value) {
$_smarty_tpl->tpl_vars['cul']->do_else = false;
?>
            <li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cul']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                 <?php echo $_smarty_tpl->tpl_vars['c']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
     
   
      <p>
        Ques 9. Write a program to create the following controls using Smarty.
        <?php echo smarty_function_html_checkboxes(array(),$_smarty_tpl);?>

        <?php echo smarty_function_html_radios(array(),$_smarty_tpl);?>

      </p>

      <?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cut_choose']->value,'selected'=>$_smarty_tpl->tpl_vars['cust_selected']->value,'separator'=>'<br/>'),$_smarty_tpl);?>


      <?php echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['choose']->value,'selected'=>$_smarty_tpl->tpl_vars['select_one']->value),$_smarty_tpl);?>




      <p>
        Ques 10. Write a program to take a number and perform the following tasks on that. Here’s what you need to do.
        Check that the given number is even or odd.
        Print the table of that number.
      </p>
    
      <table>
        <?php
$__section_rows_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['da']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_1_total = $__section_rows_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_1_total !== 0) {
for ($__section_rows_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_1_iteration <= $__section_rows_1_total; $__section_rows_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
           <tr class="<?php echo smarty_function_cycle(array('values'=>'even,odd'),$_smarty_tpl);?>
">
              <th><?php echo $_smarty_tpl->tpl_vars['da']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</th>
           </tr>
        <?php
}
}
?>
     </table>

</body>
</html><?php }
}
