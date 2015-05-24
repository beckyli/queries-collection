<?php require_once 'templates/header.php';?>

   <!-- Remind informaiton  -->
<div id="info">
  <p id="info_start">Click on the microphone icon and begin speaking.</p>
  <p id="info_speak_now">Speak now.</p>s
  <p id="info_no_speech">No speech was detected. You may need to adjust your <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892"> microphone settings</a>.</p>
  <p id="info_no_microphone" style="display:none"> No microphone was found. Ensure that a microphone is installed and that <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892"> microphone settings</a> are configured correctly.</p>
  <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
  <p id="info_denied">Permission to use microphone was denied.</p>
  <p id="info_blocked">Permission to use microphone is blocked. To change, go to chrome://settings/contentExceptions#media-stream</p>
  <p id="info_upgrade">Web Speech API is not supported by this browser. Upgrade to <a href="//www.google.com/chrome">Chrome</a> version 25 or later.</p>
</div>

    <!-- display the speech recognition results  -->
<div id="voice_input">
  <span id="final_span" class="final"></span>
  <span id="interim_span" class="interim"></span>
    <span id="interim_span" class="interim"></span>

       
     <!-- voice button -->
        <div id="voice_icon" class="voice">
            <button id="start_button" onclick="startButton(event)">
            <img id="start_img" src="imgs/mic.gif" alt="Start"></button>
        </div>

</div>

       

    <!-- Copy and email button -->
<div class="center">
 
    <!-- submit infromation -->
  
  <button id="submit_btn" class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="mdi-content-send right"></i>
  </button>

 
      <!-- country and language  -->
  <div id="div_language">
    <select id="select_language" onchange="updateCountry()"></select>
    &nbsp;&nbsp;
    <select id="select_dialect"></select>
  </div>
</div>


<!-- input area -->
<div id="text_area">
    <div id="text_input">
        <textarea id="written_input"></textarea>
    </div>
    <!-- submit button -->
    <div class="center">
        <button id="Button1" class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="mdi-content-send right"></i>
        </button>
    </div>
</div>
     <!-- JS files -->
     <script type="text/javascript" src="js/speech.js"></script>
