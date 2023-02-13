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
     {html_options name='id' options=$opt_select selected=$opt_selected separator='<br/>'}

   
     <p>Ques 2.Give an example of escape in smarty</p>
     <p>
        {$article|escape:'html'}
     </p>


     <p>Ques 3.Write a program to print the table of 5.</p>
     <p>
        {html_table loop=$data}
     </p>

     <p>Ques 4. How to concatenate two strings in smarty? Give an example of it.</p>
     {$someText|cat:' hello world'}

     <p>Ques 5. What is the difference between counter and cycle in smarty? Show the difference using examples.</p>
     ans: cycle is used for alternate the each value. counter is used for count the numbers.
     <br/><br/>
     {counter start=1 skip=1}

     <p>{counter}</p>
     <p>{counter}</p>
     <p>{counter}</p>
     <p>{counter}</p>
     <p>{counter}</p>


     <table>
        {section name=rows loop=$da}
           <tr class="{cycle values='even,odd'}">
              <th>{$da[rows]}</th>
           </tr>
        {/section}
     </table>


     <p>Ques 6. Write a program to print the values of a given Smarty array in proper format.</p>



     <p>Ques 7. Write a program to perform the following operations on the given strings. Here’s what you need to do:
        Both the strings should be in lowercase.
        Replace “ucertify” with “uCertify” in both the strings.
        Wraps the given strings, only 30 characters in a line.
        Merge both the strings together. 
    </p>

    <p>
        {$string1|lower}
    </p>
    <p>
        {$string2|lower}
    </p>
    {$string1|cat:string2}


    <p>
        Ques 8. Write a program to print the given array in the form of an unordered list. Use a loop to implement it.
    </p>
      <ul>
        {foreach $culture as $cul}
            <li>
                {foreach $cul as $c}
                 {$c}
                {/foreach}
            </li>
        {/foreach}
      </ul>
     
   
      <p>
        Ques 9. Write a program to create the following controls using Smarty.
        {html_checkboxes}
        {html_radios}
      </p>

      {html_checkboxes name='id' options=$cut_choose selected=$cust_selected separator='<br/>'}

      {html_radios name='id' options=$choose selected=$select_one}



      <p>
        Ques 10. Write a program to take a number and perform the following tasks on that. Here’s what you need to do.
        Check that the given number is even or odd.
        Print the table of that number.
      </p>
    
      <table>
        {section name=rows loop=$da}
           <tr class="{cycle values='even,odd'}">
              <th>{$da[rows]}</th>
           </tr>
        {/section}
     </table>

</body>
</html>