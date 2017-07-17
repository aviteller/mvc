dashboard logged in only

<br>

<form id="randomInsert" class="pure-form pure-form-stacked" action="<?php echo URL; ?>dashboard/ajaxInsert/" method="post">
    <fieldset>

        <label for="text">Text</label>
        <input id="text" type="text" placeholder="text" name="text">
        <span class="pure-form-message">This is a required field.</span>

        <button type="submit" class="pure-button pure-button-primary">Submit</button>
    </fieldset>
</form>


<div id="listInsert">
	
</div>