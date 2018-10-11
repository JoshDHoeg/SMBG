<?php
$pageTitle = "Contact Page";
$section = "contact";?>

<div class="section">
  <div class="wrapper">
    <h2>Contact Us</h2>
    <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
      <table>
        <tr>
          <th><label for="name">name</label></th>
          <td><input type="text" id="name" name="name" /></td>
        </tr>
        <tr>
          <th><label for="email">email</label></th>
          <td><input type="text" id="email" name="email" /></td>
        </tr>
        <tr>
          <th><label for="message">message</label></th>
          <td><textarea id="message" name="message" /></textarea></td>
        </tr>
      </table>
      <input type="hidden" name="action" value="contact_form">
      <input type="submit" value="send" />
    </form>
  </div>
</div>
