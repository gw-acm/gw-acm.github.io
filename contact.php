<html>
<head></head>

<body>

<p>

<form id="contact-form" action="mail.php" method="post">

        <div class="control-group">
                <label class="control-label" for="inputName">Full Name (*):</label>
                <div class="controls">
                    <input type="text" class="span12" id="inputName" placeholder="John Doe">
                </div>
        </div>

        <div class="control-group">
                <label class="control-label" for="inputEmail">Your E-Mail (*):</label>
                <div class="controls">
                    <input type="text" class="span12" name="email" id="inputEmail" placeholder="johndoe@example.com">
                </div>
        </div>

        <div class="control-group">
                <label class="control-label" for="textMessage">Message (*):</label>
                <div class="controls">
                    <textarea rows="8" class="span12" id="textMessage" placeholder="Please write your message to us here..."></textarea>
                </div>
        </div>

        <div class="control-group">
                <div class="controls">
                    <div id="response" style="display: none;"></div>
                    <button type="submit" class="btn btn-primary right">Submit</button>
                </div>
        </div>

</form>
</p>
</body>
</html>
