<?php require_once  "views/partials/header.php" ?>


<div class="container-fluid">
    <div class="contactWrapper">
        <h1>Contact Us</h1>
        <form action="/contact-submit" method ="POST">
            <div class="form-group subject">
                <label for="subject"><h4>Subject</h4></label></br>
                <input type="text" name="subject" id="subject" style="width:400px; height: 40px;">
            </div>
            <div class="form-group">
                <label for="message"><h4>Message</h4></label></br>
                <textarea name="message" id="message" cols="30" rows="10" style="width: 400px; height: 150px;"></textarea>
            </div>
            <div>
                <button type="submit" style="width: 200px; height: 40px;">Send</button>
            </div>
            <div class="registerBackArrow">
                <a href="/">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
            </div>
        </form>
    </div>
</div>


<?php require_once  "views/partials/footer.php";?>
