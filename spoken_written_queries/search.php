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

            <div class="sixteen wide column">
                <h1 class="ui header center"  style="padding-top:20px">SEARCH</h1>
                <!-------------------------------------------------------------------------------------------------
                               writen queries
               ----------------------------------------------------------------------------------------------------->
                <div class="ui tertiary form segment">
                    <div class="field">
                        <div class="ui left labeled icon input">
                            <input name="wcontent" id="wcontent" type="text" class="form-control" placeholder="Search">
                            <div>&nbsp;</div>
                            <button type="submit" class="ui green submit button">Search</button>
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
                    <div class="ui four cards">
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


