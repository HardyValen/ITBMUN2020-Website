<body>
<h2>Try It Out</h2>
<p>Tab through the form fields to see it in action.</p>
<form class="validate">
    <div>
        <label for="text">Name</label>
        <input type="text" id="text" >
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
    </div>

    <div>
        <label for="url">URL</label>
        <input type="url" id="url" title="The URL is a missing a TLD (for example, .com)." pattern="^(?:(?:https?|HTTPS?|ftp|FTP):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]-*)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))\.?)(?::\d{2,5})?(?:[/?#]\S*)?$" required>
    </div>

    <div>
        <strong>Radio Buttons</strong>
        <label class="label-normal">
            <input type="radio" name="radio" id="radio-1" required>
            Yes
        </label>
        <label class="label-normal">
            <input type="radio" name="radio" id="radio-2" required>
            No
        </label>
    </div>

    <input type="submit" class="button" value="Submit">
</form> 

</body>

<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
    font-size: 112.5%;
    margin-left: auto;
    margin-right: auto;
    max-width: 40em;
    width: 88%;
}  

/**
 * Form Styles
 */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 0.5em;
}

.label-normal {
    font-weight: normal;
}

.description-date {
    color: #808080;
    font-size: 0.8em;
    font-weight: normal;
}

.supports-date .description-date {
    display: none;
}

input,
select {
    display: inline-block;
    font-size: 1em;
    margin-bottom: 1em;
    padding: 0.25em 0.5em;
    width: 100%;
}

[type="checkbox"],
[type="radio"] {
    margin-bottom: 0.5em;
    width: auto;
}

.button {
    background-color: #0088cc;
    border: 1px solid #0088cc;
    border-radius: 1px;
    color: #ffffff;
    display: inline-block;
    font-size: 0.9375em;
    font-weight: normal;
    line-height: 1.2;
    margin-right: 0.3125em;
    margin-bottom: 0.3125em;
    padding: 0.5em 0.6875em;
    width: auto;
}

.button:active,
.button:focus,
.button:hover {
    background-color: #005580;
    border-color: #005580;
    color: #ffffff;
    text-decoration: none;
}

.button:active {
    box-shadow: inset 0 0.15625em 0.25em rgba(0, 0, 0, 0.15), 0 1px 0.15625em rgba(0, 0, 0, 0.05);
}

/**
 * Errors
 */
.error {
    border-color: red;
}

.error-message {
    color: red;
    font-style: italic;
    margin-bottom: 1em;
}
</style>

<script src="{{URL::asset('js/registration/validation.js')}}"></script>