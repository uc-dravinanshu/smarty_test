<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ques 1. Write the program to print the current date and time in the given format.
        Format: year-month-date hour:minute:second
    </h2>
    <p>
        {$smarty.now|date_format}
    </p>


    <h4>Ques 2. Write a program to perform the following operations on the given paragraph using Smarty. Here’s what you need to do.
        Search “effective” and replace it with “efficient”.
        Insert a space between every character.
    </h4>
    <p>{$someText|replace:'effective':'efficient'}</p>


    <h4>Ques 3. Write a program to create the following controls using Smarty.
        {html_options}
        {html_radios}
    </h4>
    <p>
        {html_options name='id' options=$choose_opt sleceted=$ch_id}
    </p>
    <p>
        {html_radios nam='id' options=$cust_opt selected=$cust_select}
    </p>

    <h4>Ques 4. Print out all the values of an array in reverse order using.</h4>

    {section name=rows loop=$data}
      {$data[rows]}
    {/section}

    <h5>Ques 5. Write code to multiply two numbers (using math equation).</h5>

    {$a=10}
    {$b=20}
    {math equation="x*y" x=$a y=$b}


    <h5>
        Ques 6. Write a program to take the given PHP array and print it in the form of a table using the custom functions of Smarty.
    </h5>
    <p>
    <table border="1" cellpadding="2" cellspacing="0">
        {foreach $email_id as $train}
         <tr>{foreach $train as $t}
              <th>{$t}</th>
            {/foreach}
        </tr>   
        {/foreach}
    </table>
    </p>


    <h5>Ques 7. Write the program to perform the following operations on the given content:
        Count number of characters.
        Count number of paragraphs.
        Count number of sentences.
        Count number of words.
    </h5>
   <p>{$countChr|count_characters}</p> 
   <p>{$countPara|count_paragraphs}</p>
   <p>{$countSen|count_sentences}</p>
   <p>{$countwords|count_words}</p>


   <h5>Ques 8. Write a program to display the file. Here’s what you need to do:
    Create 2 files in PHP in which the given statements are stored. Like:
    File1: Number is even.
    File2: Number is odd.
    Take a number in PHP and send it in smarty.
    In Smarty, check that number is even or odd.
    If the number is even, display the File1.
    If the number is odd, display the File2.
    </h5>
    <p>
        {section name=rows loop=$data}
          <p class='{cycle values="even,odd"}'>
            {$data[rows]}
             {if $data[rows]%2==0}
              <p>even:</p>
              {else}
              <p>odd:</p>
             {/if}
          </p>    
        {/section}
    </p>


    <h5>Ques 9. Give an example of cat in Smarty.</h5>
    {$text|cat:' new word'}

    <h5>
        Ques 10. Write a program to show 5 examples of truncate. Use the same content as given in Ques 7.
    </h5>

    {$countwords|truncate}
</body>
</html>