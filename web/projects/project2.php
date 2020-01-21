<!DOCTYPE html>

<html lang = "en-US">

<head>
   <meta charset="utf-8">
   <title>Samantha Christensen - Home Page</title>
   <style>

      /*HEADERS, PARAGRAPH, FOOTER*/
      h1
      {
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;
         color:pink;
         text-align:center;
         background-color:#E6E6FA; /*LILAC*/
         height: 300px;
         font-size: 70px;
         text-shadow: 2px 2px purple;

      }

      h2
      {
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;
         text-shadow: 2px 2px purple;
         color:pink;
         font-size: 50px;
      }

      h4
      {
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;
         color:purple;
         font-weight: bold;
      }

      p
      {
         color:purple; 
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
         text-align:center;
         font-size:16px;
      }

      table
      {
         width:100%; 
         color:purple; 
         border: 5px; 
         border-style: dotted; 
         border-color:purple;
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
         background-color:#E6E6FA;
         margin:5px;   
         border-radius: 4px; /* Rounded borders */
      }
      footer
      {
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif; 
         font-weight: bold; 
         font-size: 20px; 
         color:purple; 
         text-align:center; 
         background-color: #E6E6FA;
      }

      /*SELECT*/
      select
      {
          font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
      }


      /*NAVIGATION BAR*/
      .topnav 
      {
       overflow: hidden;
       background-color: #E6E6FA; /*LILAC*/
      }

      .topnav a 
      {
        float: left;
        color: purple;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
        font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;

      }

      .topnav a:hover 
      {
        background-color: white;
        color: pink;
      }

      .topnav a.active 
      {
        background-color: pink;
        color: white;
      }

      /*INPUT FORM*/
      input[type=text], select, textarea 
      {
        width: 100%; 
        padding: 12px; 
        border: 1px dotted purple;
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; 
        margin-bottom: 16px; 
        resize: vertical; 
        font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;

      }

      /* Add a background color and some padding around the form */
      .container 
      {
        border-radius: 5px;
        background-color: #E6E6FA; /*LILAC*/
        padding: 20px;
        font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        color:purple;

      }

     /*SUBMIT BUTTON*/
      input[type=submit] 
      {
        background-color: pink;
        color: purple;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;

      }

      input[type=submit]:hover 
      {
        background-color: #E6E6FA; /*LILAC*/
      }





      /*RESET BUTTON*/
      input[type=reset] 
      {
        background-color: pink;
        color: purple;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;

      }

      input[type=reset]:hover 
      {
        background-color: #E6E6FA; /*LILAC*/
      }

      /*TO CHANGE PLACE HOLDER FONT*/
      .mainLoginInput::-webkit-input-placeholder 
      {
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
      }

      .mainLoginInput:-ms-input-placeholder 
      {
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
      }

      .mainLoginInput:-moz-placeholder 
      {
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
      }

      .mainLoginInput::-moz-placeholder 
      {
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
      }

      /*CHECK BOXES*/
      input[type='checkbox']
      {
         color:#FF69B4; 
         font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;
      }


   </style>
</head>

<body>

   <!--HEADER-->
   <h1>BIENVENIDOS A LA PAGINA DE <br/> SAMANTHA CHRISTENSEN </h1>

   <!--NAVIGATION BAR-->
    <div class="topnav">
     <a class="active" href="#home">Home</a>
     <a href="index.html">CS 213 Assignments</a>
     <a href="https://www.byui.edu/">BYU-I</a>
     <a href="https://byui.brightspace.com/d2l/home">i-Learn</a>
     <a href="#photos">Photos</a>
     <a href="#form">Form</a>
   </div>


    <!--BREAKS FOR STYLE-->
   <br/>
   <br/>
   <br/>

    <!--PARAGRAPH-->
    <div>
      <p>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         My name is <span style="font-weight:bold">Samantha Christensen</span>. I study Software Engineering and I am from Cameron, Missouri. It is a small town about 15 minutes from Far West, Missouri. <br/> I am really excited for this class, because I love programming and making things pretty, so this is a great mix of the two! 
      </p>
   </div>

    <!--BREAKS FOR STYLE-->
   <br/>
   <br/>

   <!--SCHEDULE TABLE-->
   <h2 style="text-align: center">MY SCHEDULE</h2>
   <table>
      <!--DIFFERENT FONT-->
      <tr>
         <th>COURSE #</th>
         <th>COURSE DESCRIPTION</th>
         <th>Section #</th>
         <th>CLASS TIME</th>
         <th>CLASS LOCATION</th>
      </tr>

      <tr style="text-align:center">
         <td>SPAN 102</td>
         <td>Beginning Spanish II</td>
         <td>01</td>
         <td>7:45-8:45am</td>
         <td>Smith 431</td>
      </tr>

      <tr style="text-align:center">
         <td>CS 246</td>
         <td>Software Design and Development</td>
         <td>01</td>
         <td>9:00-10:00am</td>
         <td>STC 231</td>
      </tr>

      <tr style="text-align:center">
         <td>CS 235</td>
         <td>Data Structures</td>
         <td>01</td>
         <td>10:15-11:15am</td>
         <td>STC 341</td>
      </tr>

      <tr style="text-align:center">
         <td>CS 213</td>
         <td>Web Engineering</td>
         <td>01</td>
         <td>9:45-11:15am</td>
         <td>STC 398</td>
      </tr>

      <tr style="text-align:center">
         <td>FDREL 212</td>
         <td>New Testament</td>
         <td>11</td>
         <td>Online</td>
         <td>My Bed</td>
      </tr>
   </table>

   <!--BREAKS FOR STYLE-->
   <br/>
   <br/>

   <!--FORM-->
   <div class="container" id="form">

    <h2>TELL ME ABOUT YOURSELF</h2>

    <form action="null">
    <label for="fname">First Name</label>
    <input type="text" class="mainLoginInput" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" class="mainLoginInput" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="usa">USA</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
    </select>

    <label for="hobbies">Hobbies</label>
    <textarea class="mainLoginInput" id="hobbies" name="hobbies" placeholder="Write something.." style="height:200px"></textarea>

    <!--RADIO BUTTONS-->
    <h4>FAVORITE ICE CREAM FLAVOR</h4>
    <input type="radio" name = "ice cream" value="chocolate">Chocolate
    <input type="radio" name = "ice cream" value="Vanilla">Vanilla
    <input type="radio" name = "ice cream" value="Strawberry">Strawberry

    <!--BREAKS FOR STYLE-->
   <br/>
   <br/>

    <!--CHECKBOXES-->
    <h4>FAVORITE SPORT</h4>
    <input type="checkbox" name = "sports" value="Soccer">Soccer
    <input type="checkbox" name = "sports" value="Basketball">Basketball
    <input type="checkbox" name = "sports" value="Tennis">Tennis

    <!--BREAKS FOR STYLE-->
   <br/>
   <br/>

       <!--BREAKS FOR STYLE-->
   <br/>
   <br/>

      <input type="submit" value="Submit">
      <input type="Reset"  value="Reset">

  </form>
</div>


<!--BREAKS FOR STYLE-->
   <br/>
   <br/>

<!--SECTION FOR 2 IMAGES-->
<h2 style="text-align: center">PHOTOS</h2>
<section style="height: 500px" id="photos">
   <!--IMAGE-->
   <section style="float:left; padding-bottom: 20px; padding-right: 20px">
      <div style="margin: auto; height: 375px; width: 373px; border: 5px; border-color: pink; border-style: dotted; border-radius: 4px">
         <img src="me.jpg" alt="Picture of me" height="375" width="373">
      </div>
   </section>

    <!--IMAGE-->
   <section style="float:right; padding-bottom: 20px; padding-right: 20px">
      <div style="margin: auto; height: 480px; width: 360px; border: 5px; border-color: pink; border-style: dotted; border-radius: 4px">
         <a href="http://emp.byui.edu/ercanbracks/cs213/Assignments/cs213_03_homePage2.htm">
         <img src="jam.jpg" alt="Me and Jared" height="480" width="360">
         </a>
      </div>
   </section>
</section>



   <!--BREAKS FOR STYLE-->
   <br/>
   <br/>
   <!--FOOTER-->
   <footer>CS 213 ASSIGNMENTS</footer>

</body>

</html> 