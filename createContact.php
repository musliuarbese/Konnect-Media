<?php

require './controllers/postsController.php';

$contact = new postsController;

if(isset($_POST['submitted']))
{
    $contact->store($_POST);
}
?>

<!-- <form method="POST" action="include/insertPost.php">

                                <div class="clear1"></div>

                                <p>
                                    <label>Title*:
                                        <input class="text-input" id="title" type="text" name="title" />
                                    </label><span id="title_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <label>Subtitle:
                                        <input class="text-input" id="subtitle" type="text" name="subtitle" />
                                    </label><span id="subtitle_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <label>Content*:
                                        <textarea id="message" name="content"></textarea>
                                    </label><span id="content_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <label>Photo*:
                                        <input class="text-input" id="photo" type="text" name="photo" />
                                    </label><span id="photo_validation" class="error"></span></p>

                                <div class="clear1"></div>

                                <p>
                                    <input type="submit" class="button" value="Post" />
                                    <input type="reset" class="button" />
                                </p>
                                <div class="clear1"></div>
                            </form> -->