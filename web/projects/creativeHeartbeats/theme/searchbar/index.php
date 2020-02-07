<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="searchbar/css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s002">
      <form action='search.php' method='post'>
        <fieldset>
          <p>My life experiences lead me to believe that everyone is born creative in some way, shape of form. Everyone has an inner artist. For example, when people find out I'm an artist, a painter in particular, they continue the conversation with, "You ought to paint..." then they describe an image they have in their mind. It happens All. The. Time. I often wonder why they don't create their image. When I ask them why they don't paint (or draw, sculpt, write, or form) that ideas they are ready with the answer that school/society has brainwashed them with..</p>
          <legend>FIND YOUR RETREAT</legend>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <select name="type">
              <option value='paint'>Paint & Draw</option>
              <option value='needle'>Needle Craft</option>
              <option value='paper'>Paper Crafts</option>
              <option value='food'>Food Art</option>
              <option value='fabric'>Fabric Arts</option>
              <option value='furniture'>Furniture</option>
              <option value='floral'>Floral</option>
              <option value='design'>Design</option>
              <option value='other'>Other</option>
            </select>
          </div>  
          <div class="input-field second-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
              </svg>
            </div>
            <input class="datepicker" id="depart" name='start_date' type="text" placeholder="18 May 2020" />
          </div>
          <div class="input-field third-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
              </svg>
            </div>
            <input class="datepicker" id="return" name='end_date' type="text" placeholder="22 May 2020" />
          </div>
          <div class="input-field fouth-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
              </svg>
            </div>
            <select data-trigger="" name="choices-single-defaul">
              <option value=1>1 Adult</option>
              <option value=2>2 Adults</option>
              <option value=3>3 Adults</option>
              <option value=4>4 Adults</option>
              <option value=5>5 Adults</option>
            </select>
          </div>
          <div class="input-field fifth-wrap">
            <button class="btn-search" type="submit">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
    <script src="searchbar/js/extention/choices.js"></script>
    <script src="searchbar/js/extention/flatpickr.js"></script>
    <script>
      flatpickr(".datepicker",
      {});

    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
