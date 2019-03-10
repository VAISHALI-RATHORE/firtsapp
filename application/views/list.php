        <?php if(isset($data)) { ?>
        <div class="row justify-content-center">
        	<table class="table">
        		<thead>
        			<tr>
        				<th>Username</th>
        				<th>email</th>
        				<th colspan="2">password</th>
        			</tr>
        		</thead>
               
       <?php foreach($data as $m): ?>
        	<tr>
        		<td id="username"><?php echo $m->username; ?></td>
        		<td id="email"><?php echo $m->email; ?></td>
                <td id="password"><?php echo $m->password; ?></td>
        		
                    <?php
                     $user_id = $m->id ;
                     $username =$m->username;
                     $email =$m->email;
                     $password =$m->password;
                    ?>
        		<td> <a href="<?php echo base_url('register/edit_row/'.$user_id) ?>"><button type='submit' name='update' class='btn' >UPDATE</button></a></td>
                <td><a href="<?php echo base_url('register/delete_row/'.$user_id) ?>"> <button type='submit' name='delete' class='btn' >DELETE</button></a></td>   
    
        	
        		</td>
        	</tr>
        <?php endforeach; ?>
    
        	</table>
        </div>
        <a href="index.php">go back to new </a>
        <?php } ?>