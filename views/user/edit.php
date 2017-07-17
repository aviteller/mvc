

<h1>Edit <?php echo $this->user['login']; ?>'s account</h1>



<form class="pure-form pure-form-aligned" method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user['id']; ?>">
    <fieldset>
        <div class="pure-control-group">
            <label for="login">Login</label>
            <input id="login" type="text" name="login" value="<?php echo $this->user['login']; ?>">
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" >
        </div>

        <div class="pure-control-group">
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
                    <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
                </select>

        </div>
        <input type="hidden" name="id" value="<?php echo $this->user['id'] ?>">
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
