<link rel="stylesheet" href="include/css/comments.css" />
    <div class="content-box">
        <div class="content-title">
        <header>
        <h3>
            Comments
        </h3>
        </header>
        </div>
        
        <?php if (isset($_GET['submitted']) && $_GET['submitted'] == 1): ?>
        <div class="comment-feedback">
            <span>Your comment has been currated</span>
        </div>
        <?php endif; ?>

        <div>
            <?php
                require 'retrive_comments.php';
                retrive_comments($_SERVER['PHP_SELF']);
            ?>
        </div>
        
        <div class="comment-form">
            <form action="comment.php" method="post">
                <div>
                    <div>
                        <div>
                            <label for="c_name">
                                <span>Name</span>
                            </label>
                        </div>
                        <input type="text" id="c_name" name="c_name" placeholder="name" />
                    </div>
                    <div>
                        <div>
                            <label for="c_area">
                                <span>Comment</span>
                            </label>
                        </div>
                        <textarea id="c_area" name="c_area" placeholder="comment goes here" required="required"></textarea>
                    </div>
                    <input type="hidden" name="c_page" value="<?php echo $_SERVER['PHP_SELF']; ?>" required="required" />
                </div>
                <div class="btn-tray">
                    <input class="btn" type="submit" value="submit comment" />
                    <input class="btn" type="reset" value="reset comment" />
                </div>
            </form>
        </div>
    </div>

