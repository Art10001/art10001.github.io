<HEAD>
   <title>
      Sweet Intention Repeater
   </title>
   <meta property="description" content = "Free, Open-Source Intention Repeater that repeats your intention up to 1+ million times per second to make things happen." />
   <meta property="og:title" content="Sweet Intention Repeater">
   <meta property="og:image" content="http://www.intentionrepeater.com/images/Sweet_Intention_Repeater_Image_Main.jpg">
   <meta property="og:image:type" content="image/jpeg">
   <meta property="og:description" content = "Free, Open-Source Intention Repeater that repeats your intention up to 1+ million times per second to make things happen." />
   <meta property="og:url" content="https://www.intentionrepeater.com">
   <meta property="og:type" content="website">
   <meta name="twitter:title" content="Sweet Intention Repeater">
   <meta name="twitter:description" content="Free, Open-Source Intention Repeater that repeats your intention up to 1+ million times per second to make things happen.">
   <meta name="twitter:image" content="http://www.intentionrepeater.com/images/Sweet_Intention_Repeater_Image_Main.jpg">
   <meta name="twitter:card" content="summary_large_image">
   <script src="https://kit.fontawesome.com/003fd16dd7.js" integrity="sha384-eoEIP4kL867FWM1D0Gem6jxjxMlsD5jiBy1lo9hB45B9e6PLQZ96UxgVowiBgMxx" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="/css/styles.css">
</HEAD>
<BODY>
   <?php
      $servername = "localhost";
      $username = "furries1_IRuser";
      $password = "c3Fou,^fWQrig_JlU)";
      $dbname = "furries1_intentionrepeatercounter";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      
      $sql = "INSERT INTO ip_table (ip_address) VALUES ('1')";
      
      if ($conn->query($sql) === TRUE) {
          echo "";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $sql = "UPDATE table_count set num_records = num_records + 1";
      
      if ($conn->query($sql) === TRUE) {
          echo "";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
      ?>
   <center>
   <img src="/images/SweetIntentionRepeater.png" alt='Sweet Intention Repeater header'>
   <BR><BR>
   <p class='boldtext'>Intention: <input type="text" id='intention' size="100">
      <input type="button" name="btn" id='btn' value="Start" onclick="to_start()";><BR>
   <div id="n1" class="boldtext"> </div>
   </p>
   <script type="text/javascript" src="/js/Repeater.js"></script>
   <center>
      <BR><BR>
      <p class='normaltext'>
         A powerful free, open-source tool for manifestation, blessing, energy clearing, healing, balancing and more.<BR>
         Repeat your intention up to 1+ Million times per second to make things happen (with Python version).<BR>
         Tap Intelligent Infinity/Magick; powered by a black hole (Servitor) 20 years / 2000+ hours in its co-creation.<BR><BR>
         <a href='healings.html'>Click Here for my Healing Services</a><BR>
         Please contact me for my Repeater consulting services for your product.<BR>
         Or to have me charge up an object for you as a manifestor.<BR><BR>
         <b>My Book:</b><BR><BR>
         </font>
         <a href='https://www.thewarlockname.com' target='_blank'><img src="/images/TWN_Cover.jpg" alt='The Warlock Name cover'></a>
      </p>
      <?php
         $servername = "localhost";
         $username = "furries1_IRuser";
         $password = "c3Fou,^fWQrig_JlU)";
         $dbname = "furries1_intentionrepeatercounter";
         
         $link = mysqli_connect($servername, $username, $password, $dbname);
         
         /* check connection */
         if (mysqli_connect_errno()) {
             printf("Connect failed: %s\n", mysqli_connect_error());
             exit();
         }
         
         $result=mysqli_query($link,"SELECT num_records as total from table_count");
         $data=mysqli_fetch_assoc($result);
         echo "<BR><BR><b><font color='white' size='+1'>Total Page Loads: " . $data['total'] . "</font></b>";
         
             /* close result set */
             mysqli_free_result($result);
         
         /* close connection */
         mysqli_close($link);
         ?>
      <BR><BR>
      <p class='normaltext'>
      <table>
         <tr>
            <td>
               <b>
               <font size="+1" color="white">
               7/16/2020 Radio Show<BR>
               Life in the Hologram:<BR>
               </font>
               </b>
            </td>
            <td>
               <b>
               <font size="+1" color="white">
               08/18/2020 Radio Show<BR>
               Radioality:<BR>
               </font>
               </b>
            </td>
         </tr>
         <tr>
            <td>
               <audio controls>
                  <source src="/mp3/LifeInTheHologram.mp3" type="audio/mpeg">
                  Your browser does not support the audio element.
               </audio>
            </td>
            <td>
               <audio controls>
                  <source src="/mp3/Radioality_Talk.m4a" type="audio/x-m4a">
                  Your browser does not support the audio element.
               </audio>
            </td>
         </tr>
      </table>
      </p>
      <BR><BR>
      <table>
         <tr>
            <td>
               <a href="directions.html">Directions</a><BR><BR>
            </td>
            <td>
               <a href="./Python/intention_repeater.py" target="_blank">Python3 Source Code</a><BR><BR>
            </td>
            <td>
               <a href="https://choosealicense.com/licenses/gpl-3.0/" target="_blank">Code License</a><BR><BR>
            </td>
            <td>
               <a href="origins.html">Origins of this Program</a><BR><BR>
            </td>
         </tr>
         <tr>
            <td>
               <a href="freeimages.html">Repeater Images</a><BR><BR>
            </td>
            <td>
               <a href="chakras.html">Chakra Meditations</a><BR><BR>
            </td>
            <td valign='top'>
               <script type="text/javascript">
                  <!-- Begin
                  user = "healing";
                  domain = "intentionrepeater.com";
                  document.write('<a href=\"mailto:' + user + '@' + domain + '\">Contact Us</a>');
                  // End -->
               </script>
               <noscript><img src='/images/Email.png' alt='Contact Us'></noscript>
            </td>
            <td>
               <a href="news.html">News</a><BR><BR>
            </td>
         </tr>
         <tr>
            <td>
               <a href="faq.html">FAQ</a><BR><BR>
            </td>
            <td>
               <a href="links.html">Links</a><BR><BR>
            </td>
            <td>
               <a href="usage.html">Python Usage</a><BR><BR>
            </td>
            <td><a href="https://forums.intentionrepeater.com/" target='_blank'>Forums</a><BR><BR></td>
         </tr>
         <tr>
            <td><a href="/Change_Log/Change_Log.txt" target='_blank'>Change Log</a><BR><BR></td>
            <td colspan='3'><a href="https://enlightenedstates.com/2017/04/07/servitor-just-powerful-spiritual-tool/" target='_blank'>Servitor Info</a><BR><BR></td>
         </tr>
         <tr>
            <td style="text-align:center"><a href="https://www.facebook.com/IntentionRepeater" target='_blank' class='fontawesome'><i class="fab fa-facebook"></i></a></td>
            <td style="text-align:center"><a href="https://twitter.com/TeacherAnthro" target='_blank' class='fontawesome'><i class="fab fa-twitter"></i></a></td>
            <td style="text-align:center"><a href="https://www.instagram.com/anthroteacher/" target='_blank' class='fontawesome'><i class="fab fa-instagram"></i></a></td>
            <td style="text-align:center"><a href="https://www.youtube.com/c/AnthroTeacher/" target='_blank' class='fontawesome'><i class="fab fa-youtube"></i></a></td>
         </tr>
         <tr>
            <td style="text-align:center"><a href="https://www.patreon.com/AnthroTeacher" target='_blank' class='fontawesome'><i class="fab fa-patreon"></i></a></td>
            <td style="text-align:center"><a href="https://independent.academia.edu/ThomasSweet2" target='_blank' class='fontawesome'><i class="fas fa-book"></i></i></a></td>
            <td style="text-align:center"><a href="/Python/intention_repeater.py" target='_blank' class='fontawesome'><i class="fab fa-python"></i></a></td>
            <td style="text-align:center"><a href="https://www.venmo.com/AnthroTeacher" target='_blank' class='fontawesome'><i class="fas fa-life-ring"></i></a></td>
         </tr>
      </table>
      <BR>
      <img src="/images/Repeater_Review.png" alt='Intention Repeater review 1'>
      <BR><BR>
      <img src="/images/Repeater_Review2.png" alt='Intention Repeater review 2'>
      <BR><BR>
      <img src="/images/Repeater_Review4.png" alt='Intention Repeater review 4'>
      <BR><BR>
      <img src="/images/Repeater_Review5.png" alt='Intention Repeater review 5'>
      <BR><BR>
      <img src="/images/Repeater_Review3.png" alt='Intention Repeater review 3'>
      <BR><BR>
      <a href='https://www.facebook.com/TheWarlockName/' target="_blank"><img src="/images/TWN_Quote.png" alt='A quote from The Warlock Name'></a>
      <BR><BR>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/W7qFZgsWRww?enablejsapi=1&origin=https://www.intentionrepeater.com/index.php" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      &nbsp;
      <iframe width="560" height="315" src="https://www.youtube.com/embed/RxZ_TFrviIA?enablejsapi=1&origin=https://www.intentionrepeater.com/index.php" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <BR><BR>
      <a href='https://www.venmo.com/AnthroTeacher' target="_blank"><img src="/images/Venmo.png" alt='Donate with Venmo'></a>
   </center>
</BODY>
