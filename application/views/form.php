<html>
<head>
    <title>Registration system</title>
    
</head>
<body>
 <div class="header">
    <h2>Sign Up</h2>

 </div>     
 <?php  $var= isset($data1->id)?base_url("register/user/".$data1->id):base_url("register/user");?>
 
    <form method='post' action='<?php echo $var ?>'>
        
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php if (isset($data1->username))
            echo $data1->username;?>" >
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email"value="<?php if (isset($data1->email))
            echo $data1->email;?>" >
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password"value="<?php if(isset($data1->password))
            echo $data1->password;?>" >
        </div>
        <div class="input-group">
            
            <button type="submit" name="Register" value="submit" class="btn">SIGN UP</button>

        </div>
        <P>
            Already a member ?
        </P>

    </form>
    <div>
      <table>
        <?php if (isset($data)) { ?>
        <tr>
        <th>username</th>
        <th>email</th>
        <th>password</th>
       
    </tr>
  
    <?php 
    // echo "<pre>";
    // print_r($data);
    // return;
       foreach($data as $row): ?>
  <tr> 
  <td><?php echo $row->username; ?></td>
  <td><?php echo $row->email; ?></td>
  <td><?php echo $row->password; ?></td>
  
  <?php
  $id=$row->id;
  ?>
 
  <td> <a href="<?php echo base_url('register/update/'.$id) ?>"><button type='submit' name='update' class='btn' >UPDATE</button></a></td>


  <td><a href="<?php echo base_url('register/delete/'.$id) ?>"> <button type='submit' name='delete' class='btn' >DELETE</button></a></td>

  </tr>
<?php endforeach;  } ?>
 </table>
</div>
 
        

   
</body>
</html>
