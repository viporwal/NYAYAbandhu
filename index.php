<?php include("header.php"); ?>
<table id="structure">
  <tr>
    <td id="navigation">

        <a href="">Supreme Court of India</a><br><br>
        <a href="">Recent Cases</a><br><br>
        <a href="">Some famous Indian Cases</a><br><br>

    </td>
    <td align="center" id="page">
      <h2>NYAYAbandhu</h2>
      <p>Looking for help about your case,<br>Here is your friend.</p>
      <form method="post" action="ind_action.php">
        Case: <input type="text" name="cname"> Name: <input type="text" name="name"><br>
        Email-Id: <input type="text" name="email"> State: <input type="text" name="state"><br> 
        <input type="submit" name="submit"><br>




      </form>

    </td>
  </tr>
</table>
<?php include("footer.php"); ?>
