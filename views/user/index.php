<form class="pure-form pure-form-aligned" method="post" action="<?php echo URL; ?>user/create">
    <fieldset>
        <div class="pure-control-group">
            <label for="login">Login</label>
            <input id="login" type="text" name="login">
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password">
        </div>

        <div class="pure-control-group">
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="default">default</option>
                    <option value="admin">admin</option>
                </select>

        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>



<table class="pure-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Role</th>
            <th>Controls</th>
        </tr>
    </thead>

    <tbody>

			<?php foreach ($this->userList as $key => $user): ?>
				<tr>
					<td><?php echo $user['id']; ?></td>
					<td><?php echo $user['login']; ?></td>
					<td><?php echo $user['role']; ?></td>
					<td><a href="<?php echo URL; ?>user/edit/<?php echo $user['id']; ?>">Edit</a> <a href="<?php echo URL; ?>user/delete/<?php echo $user['id']; ?>">Delete</a></td>
				</tr>
			<?php endforeach ?>


    </tbody>
</table>