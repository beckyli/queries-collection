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
           <div class="ui celled grid">
            <div class="four wide column">
                <h2 class="ui center aligned icon header">
                    <i class="circular fa fa-user"></i>
                </h2>
                <h3 class="center"> INFORMATION</h3>
                <!-- NAME -->
                <div class="age" style="padding-top: 43px">
                    <h5 class="ui horizontal header divider">
                        NAME
                    </h5>
                    <div class="center">
                        <div class="ui input">
                            <input name="username" id="username" type="text" class="form-control" placeholder="please enter your name..." />
                        </div>
                        <?php //echo $_POST["username"]?>
                    </div>
                </div>

                <!--test-->

                <!-- gender -->
                <div class="gender" style="padding-top: 60px">
                    <h5 class="ui horizontal header divider">
                        GENDER
                    </h5>
                    <div class="center">
                        <select name="gender" id="gender" class="ui dropdown">
                            <option value="gender">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <!-- <div class="ui two column stackable center aligned grid segment">
                         <div class="column">
                             <div class="ui button">FEMALE</div>
                         </div>
                         <div class="ui vertical divider">or</div>
                         <div class="column">
                             <div class="teal ui button">MALE</div>
                         </div>
                     </div>-->
                </div>
                <!-- age -->
                <div class="age" style="padding-top: 43px">
                    <h5 class="ui horizontal header divider">
                        AGE
                    </h5>
                    <div class="center">
                        <select name="age" id="age" class="ui dropdown">
                                    <?php for ($i=1; $i <= 100; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                        </select>
                    </div>
                </div>

                <div class="location" style="padding-top: 43px"9>
                    <h5 class="ui horizontal header divider">
                        LOCATION
                    </h5>
                </div>
                <!-- audio record files
                <div class="audio_record center">
                    <audio controls src="" id="audio"></audio>
                    <div style="margin:10px;">
                        <a class="id="record">Record</a>
                        <a class="disabled one" id="stop">Reset</a>
                        <a class="disabled one" id="play">Play</a>
                        <a class="disabled one" id="download">Download</a>
                    </div>
                    <input class="button" type="checkbox" id="live"/>
                </div>
                 audio record files -->
            </div>
            <div class="twelve wide column">
                <h1 class="ui header center"  style="padding-top:20px">Queries Collection</h1>
 <!-------------------------------------------------------------------------------------------------
                writen queries
----------------------------------------------------------------------------------------------------->
                <div class="ui tertiary form segment">
                    <div class="field">
                        <label>Written queries</label>
                        <div class="ui left labeled icon input">
                            <input name="wcontent" id="wcontent" type="text" class="form-control" placeholder="please enter query">
                            <div>&nbsp;</div>
                            <button type="submit" class="ui green submit button">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="ui horizontal divider">
                        Spoken queries
                </div>
<!------------------------------------------------------------------------------------------------
                                            spoken audio record
 ----------------------------------------------------------------------------------------------------->
                <div class="ui tertiary form segment">
                    <div class="field">
                        <label>Spoken queries</label>
                        <div class="ui left labeled icon">
                            <section class="experiment">
                                <p style="text-align:center;">
                                    <audio id="preview" controls style="width:300px"></audio>
                                </p>
                                <hr />
                                <div class="ui center">
                                <button id="record" class="ui green submit button">Record</button>
                                <button id="stop" class="ui green submit button" disabled>Stop</button>
                                <button id="delete" class="ui green submit button" disabled>Delete audio</button>
                                </div>
                                <div id="container" style="padding:1em 2em;"></div>
                            </section>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------
                                            spoken audio-speech
----------------------------------------------------------------------------------------------------->
                <div class="ui tertiary form segment">
                    <div class="field">
                        <label>Spoken queries</label>
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
                            <span class="media-container center"><iframe width="250" height="170" src="http://www.youtube.com/embed/7yneWa9abSM" frameborder="0" allowfullscreen=""></iframe></span>
                            <div class="content">
                                <div class="header">Recommendation System</div>
                                <div class="meta">
                                    <a class="group">Meta</a>
                                </div>
                                <div class="description">There Is a (PHP or JS) Class for That: Community based Best Package Recommendations</div>
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
                                <div class="meta">
                                    <a class="group">Meta</a>
                                </div>
                                <div class="description">There Is a (PHP or JS) Class for That: Community based Best Package Recommendations</div>
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




                <div class="modeltest">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        Voice input
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Speech Input</h4>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>

                <!-- input area -->
                <div id="text_area">
                    <div id="text_input">
                        <input name="wcontent" id="wcontent" type="text" class="form-control" />
                    </div>
                    <!-- submit button -->
                    <div class="center">
                        <button id="Button1" class="btn waves-effect waves-light" type="submit" id="submit_btn" data-loading-text="Submiting....">Submit
                            <i class="mdi-content-send right"></i> </button>
                    </div><!-- end submit button-->
                </div><!-- end input area -->




            </div><!--end 9 -->
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


