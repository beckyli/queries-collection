<?php
require_once 'config.php';
?>
<?php
if(!empty($_POST)){
    try {
        $user_obj = new Cl_User();
        $data = $user_obj->written_queries($_POST);
        $row = $user_obj->video_recommendation();
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
                <h1 class="ui header center"  style="padding-top:20px">Spoken Queries</h1>


                <!------------------------------------------------------------------------------------------------
                                                            spoken audio record
                 ----------------------------------------------------------------------------------------------------->
                <div class="ui tertiary form segment">
                    <div class="field">

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
                                <div class="meta">
                                </div>
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


