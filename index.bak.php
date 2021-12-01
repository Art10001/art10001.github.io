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
   <link rel="stylesheet" href="./fontawesome6/css/all.css">
   <link rel="stylesheet" href="./css/styles.css">
</HEAD>
<BODY>
   <?php
      $servername = "localhost";
      $username = "IR_RufusAumaroo";
      $password = "+B^g2Y&b;^A}/VBm";
      $dbname = "intentionrepeater";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      
      $sql = "INSERT INTO ip_table (ip_address, tx_user_agent) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "')";
      str_replace(array("'", "\"", "&quot;"), "", htmlspecialchars($sql));	  
	  
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
   <img src="./images/SweetIntentionRepeater.png" alt='Sweet Intention Repeater header'>
   <BR><BR>
   <p class='boldtext'>Intention: <input type="text" id='intention' size="100">
      <input type="button" name="btn" id='btn' value="Start" onclick="to_start()";><BR>
   <div id="n1" class="boldtext"> </div>
   </p>
   <script type="text/javascript" src="./js/Repeater.js"></script>
   <center>
      <BR><BR>
      <p class='normaltext'>
         A powerful free, open-source tool for manifestation, blessing, energy clearing, healing, balancing and more.<BR>
         Repeat your intention over a million million times per second to make things happen (with C++ MAX version).<BR>
         Tap Intelligent Infinity/Magick; powered by a black hole (HR6819 Servitor) 20 years / 2000+ hours in its co-creation.
      <BR><BR>

<a href='https://www.holo-stone.com' target='_blank'><img src='./images/holostone_button.png'></a>
<BR><BR>
<a href='./holo-link.html' target="_blank"><img src='./images/holo-link/holo-link_tech_button.png'></a>
<BR><BR>

<iframe width="560" height="315" src="https://www.youtube.com/embed/Ctr-CTcuB8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<BR><BR>
<iframe width="560" height="315" src="https://www.youtube.com/embed/n3y2orlziuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<BR><BR>
<iframe width="560" height="315" src="https://www.youtube.com/embed/oIyCqFBxwWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<BR><BR>
         <a href='healings.html'><img src='./images/healing_services_button.png'></a><BR><BR>
         <b>My Book:</b><BR><BR>
         </font>
         <a href='https://www.thewarlockname.com' target='_blank'><img src="./images/TWN_Cover.jpg" alt='The Warlock Name cover'></a>
      </p>
      <?php
         $servername = "localhost";
         $username = "IR_RufusAumaroo";
         $password = "+B^g2Y&b;^A}/VBm";
         $dbname = "intentionrepeater";
         
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
	  <a href='https://forums.intentionrepeater.com' target='_blank'><img src='./images/intentionrepeaterforum_button.png'></a>
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
                  <source src="./mp3/LifeInTheHologram.mp3" type="audio/mpeg">
                  Your browser does not support the audio element.
               </audio>
            </td>
            <td>
               <audio controls>
                  <source src="./mp3/Radioality_Talk.m4a" type="audio/x-m4a">
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
               <a href="versions.html">DOWNLOAD</a><BR><BR>
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
               <noscript><img src='./images/Email.png' alt='Contact Us'></noscript>
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
            <td><a href="./Change_Log/Change_Log.txt" target='_blank'>Change Log</a><BR><BR></td>
            <td><a href="https://enlightenedstates.com/2017/04/07/servitor-just-powerful-spiritual-tool/" target='_blank'>Servitor Info</a><BR><BR></td>
			<td><a href="repeater_max.html">Repeater MAX</a><BR><BR></td>
			<td><a href="repeater_wav.html">Repeater WAV</a><BR><BR></td>
		 </tr>
		 <tr>
			<td align="center"><a href="repeater_spiritual_chat.html">Spiritual Chat</a></td>
			<td align="center"><a href="repeater_wav_converter.html">WAV Converter</a></td>
			<td align="center"><a href="repeater_max_cuda.html">MAX CUDA</a></td>
         <td align="center"><a href="chambers.html">Healing Chambers</a></td>
       </tr>
      </table>
	  <BR>
      <table cellpadding='5' border='0'>
         <tr>
            <td><a href="https://www.facebook.com/IntentionRepeater" target='_blank' class='fontawesome'><i class="fab fa-facebook"></i></a></td>
            <td><a href="https://twitter.com/TeacherAnthro" target='_blank' class='fontawesome'><i class="fab fa-twitter"></i></a></td>
            <td><a href="https://www.instagram.com/anthroteacher/" target='_blank' class='fontawesome'><i class="fab fa-instagram"></i></a></td>
            <td><a href="https://www.youtube.com/c/AnthroTeacher/" target='_blank' class='fontawesome'><i class="fab fa-youtube"></i></a></td>
         </tr>
         <tr>
            <td><a href="https://www.patreon.com/AnthroTeacher" target='_blank' class='fontawesome'><i class="fab fa-patreon"></i></a></td>
            <td><a href="https://independent.academia.edu/ThomasSweet2" target='_blank' class='fontawesome'><i class="fas fa-book"></i></i></a></td>
            <td><a href="https://github.com/tsweet77" target='_blank' class='fontawesome'><i class="fab fa-github"></i></a></td>
            <td><a href="https://forums.intentionrepeater.com/" target='_blank' class='fontawesome'><i class="fab fa-discourse"></i></a></td>
         </tr>
      </table>
      <BR>
      <img src="./images/Repeater_Review.png" alt='Intention Repeater review 1'>
      <BR><BR>
      <img src="./images/Repeater_Review2.png" alt='Intention Repeater review 2'>
      <BR><BR>
      <img src="./images/Repeater_Review4.png" alt='Intention Repeater review 4'>
      <BR><BR>
      <img src="./images/Repeater_Review5.png" alt='Intention Repeater review 5'>
      <BR><BR>
      <img src="./images/Repeater_Review3.png" alt='Intention Repeater review 3'>
      <BR><BR>
      <a href='https://www.facebook.com/TheWarlockName/' target="_blank"><img src="./images/TWN_Quote.png" alt='A quote from The Warlock Name'></a>
      <BR><BR>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/W7qFZgsWRww?enablejsapi=1&origin=https://www.intentionrepeater.com/index.php" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      &nbsp;
      <iframe width="560" height="315" src="https://www.youtube.com/embed/ZHxE-f5WXqc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <BR><BR>
	  <a href='https://paypal.me/intentionrepeater?locale.x=en_US' target='_blank'><img src='./images/PayPal.png'></a>
	  <BR><BR>
	  <a href='https://ko-fi.com/G2G21OV75' target='_blank'><img height='66' style='border:0px;height:66px;' src='https://cdn.ko-fi.com/cdn/kofi2.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
	  <BR><BR>
      <a href='https://www.venmo.com/AnthroTeacher' target="_blank"><img src="./images/Venmo.png" alt='Donate with Venmo'></a>
   </center>
</BODY>
