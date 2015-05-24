<?php
require_once 'config.php';
?>
<?php
if(!empty($_POST)){
    try {
        $user_obj = new Cl_User();
        $data = $user_obj->written_queries($_POST);
        if($data)$success = USER_REGISTRATION_SUCCESS;
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}?>
<!--      write content to files         -->
<?php
//$written_array = array('content'=>$_GET["wcontent"]);
//file_put_contents( "web.txt",$written_array, FILE_APPEND);
?>

<?php require_once 'templates/header.php';?>

<!-- content -->
<div class="content">

    <div class="row">
        <div class="ui celled grid" style="box-shadow: 0px;">
            <div class="two wide column">

            </div>
            <div class="twelve wide column">
                <h1 class="ui header center"  style="padding-top:20px">Google Speech API</h1>

                <!------------------------------------------------------------------------------------------------
                                                            spoken audio-speech
                ----------------------------------------------------------------------------------------------------->
                <div class="ui tertiary form segment">
                    <div class="field">
                        <!-- Remind informaiton  -->
                        <div id="info">
                            <p id="info_start" class="red">Click on the microphone icon and begin speaking.</p>
                            <p id="info_speak_now" class="red">Speak now.</p>s
                            <p id="info_no_speech" class="red">No speech was detected. You may need to adjust your <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892"> microphone settings</a>.</p>
                            <p id="info_no_microphone" style="display:none" class="red"> No microphone was found. Ensure that a microphone is installed and that <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892"> microphone settings</a> are configured correctly.</p>
                            <p id="info_allow" class="red">Click the "Allow" button above to enable your microphone.</p>
                            <p id="info_denied" class="red">Permission to use microphone was denied.</p>
                            <p id="info_blocked" class="red">Permission to use microphone is blocked. To change, go to chrome://settings/contentExceptions#media-stream</p>
                            <p></p>
                            <p id="info_upgrade">Web Speech API is not supported by this browser. Upgrade to <a href="//www.google.com/chrome">Chrome</a> version 25 or later.</p>
                        </div>
                        <!--  -->
                        <!-- display the speech recognition results  -->
                        <div id="voice_input">
                            <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-spoken" id="spoken-form">
                                <!--<span name="scontent" id="final_span" class="final"></span>-->
                                <span id="final_span" class="final" type="text" class="form-control"></span>
                                <span id="interim_span" class="interim"></span>
                                <span id="interim_span" class="interim"></span>
                            </form>
                            <!-- voice button -->
                            <div id="voice_icon" class="voice">
                                <button id="start_button" onclick="startButton(event)">
                                    <img id="start_img" src="imgs/mic.gif" alt="Start"></button>
                            </div>
                        </div><!-- end display speech recognition results -->

                        <!-- language -->
                        <div class="ui center">
                            <div id="button_language">
                                <div id="div_language" style="width:200px;">
                                    <select id="select_language" onchange="updateCountry()"></select>

                                    <select id="select_dialect"></select>
                                </div>
                            </div>
                        </div>
                        <button id="submit_btn" class="ui green submit button center" type="submit" id="submit_btn">Submit </button>
                    </div>
                </div>

                <!------------------------------------------------------------------------------------------------------
                          end spoken
                -------------------------------------------------------------------------------------------------------->


                <!------------------------------------------------------
                            recommendation
                ------------------------------------------------------->
                <h5 class="ui horizontal header divider">
                    VIDEOS
                </h5>
                <!------------------------------------------------------------------------------------------------------------->
                <div id="speech_recommend">
                    <div class="ui three cards">
                        <div class="card">
                            <div class="" style="margin-top: 0.8em">
                                <?php
                                require_once('DB.php');
                                ?>
                            </div>
                            <div class="extra content">
                                <a class="right floated created">Like</a>
                                <a class="friends">
                                    Unlike</a>
                            </div>
                        </div>

                        <div class="card">
                            <span class="media-container center"><iframe width="250" height="170" src="https://www.youtube.com/embed/-rMMTv7XLYw" frameborder="0" allowfullscreen=""></iframe></span>
                            <div class="content">
                                <div class="header">Machine Learning</div>
                                <div class="description">This is a machine learning course.
                                    <a href="https://www.youtube.com/watch?v=czLI3oLDe8M">More</a>
                                </div>
                            </div>
                            <div class="extra content">
                                <a class="right floated created">Like</a>
                                <a class="friends">
                                    Unlike</a>
                            </div>
                        </div>

                        <div class="card">
                            <span class="media-container center"><iframe width="250" height="170" src="http://www.youtube.com/embed/7yneWa9abSM" frameborder="0" allowfullscreen=""></iframe></span>
                            <div class="content">
                                <div class="header">Recommendation System</div>

                                <div class="description">There Is a (PHP or JS) Class for That: Community based Best Package Recommendations
                                    <a href="https://www.youtube.com/watch?v=czLI3oLDe8M">More</a>
                                </div>
                            </div>
                            <div class="extra content">
                                <a class="right floated created">Like</a>
                                <a class="friends">
                                    Unlike</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------------------------------------------------------------->
                <h5 class="ui horizontal header divider">
                    MOOC WEBSITE
                </h5>
                <div class="ui small images">
                    <img src="imgs/udacity.png">
                    <img src="imgs/coursera.png">
                    <img src="imgs/udacity.png">ui
                    <img src="imgs/coursera.png">
                </div>
                <!--------------------------------------------------------------------------------------------------

                --------------------------------------------------------------------------------------------------->

                <!------------------------------------------------------------------------------------------------------------->

                <!------------------------------------------------------------------------------------------------------------->

                <h5 class="ui horizontal header divider">
                    RELATED WEB PAGE LINK
                </h5>
                <!--------------------------------------------------------------------------------------------------

                --------------------------------------------------------------------------------------------------->





                <!------------------------------------------------------------------------------------------------------------->

                <!------------------------------------------------------------------------------------------------------------->





            </div><!--end 9 -->

            <div class="two wide column">

            </div>
        </div><!-- end content -->

        <!-- JS files -->
        <script type="text/javascript" src="js/speech.js"></script>

    </div>
</div>
</form>
<script src="js/audio.js"></script>

<!-- end content -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/spoken.js"></script>
<?php require_once 'templates/sidebar.php';?>



<?php require_once 'templates/footer.php';?>


