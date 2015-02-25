

<span class="center" >* required field.</span>
<form method="post" action="process_registration.php">   

<table style = "text-align: left; padding:2px;">
  <tr>
    <td>
      Company/Ogranisation:
    </td>
    <td>
      <input type="text" name="company" >
    </td>
  </tr>
  <tr>
    <td>
      Company/Organisation Type: 
    </td>
    <td>
      <select name="comptype" >
        <option value="">Please Select</option>
        <option value="Commercial">Commercial</option>
        <option value="Non-profit">Non-profit</option>
        <option value="Government">Government</option>
        <option value="Hospital">Hospital</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>
      First Name: 
    </td>
    <td>
      <input type="text" name="fname" required>
      <span class="error">* </span>
    </td>
  </tr>
  <tr>
    <td>
      Last Name: 
    </td>
    <td>
      <input type="text" name="lname" required>
      <span class="error">* </span>
    </td>
  </tr>
  <tr>
    <td>
      Job Title:
    </td>
    <td>
      <input type="text" name="jobtitle">
    </td>
  </tr>
  <tr>
    <td>
      Phone Number:
    </td>
    <td>
      <input type="text" name="pnumber" required>
      <span class="error">* </span>
    </td>
  </tr>
  <tr>
    <td>
      Email Address:
    </td>
    <td>
      <input type="email" name="eadd" required>
      <span class="error">* </span>
    </td>
  </tr>
  <tr>
    <td>
      Comments and Inquiries:
    </td>
    <td>
      <textarea cols="35" name="remarks" rows ="7"></textarea>
    </td>
  </tr>
  <tr>
    <td>
      I am interested in..
    </td>
    <td>
      <input type = "radio"
                 name = "regtype"
                 id = "sponsor"
                 value = "Sponsorship"
                 checked = "checked" />
          <label for = "sponsor">Sponsorship</label>
          <br>
          <input type = "radio"
                 name = "regtype"
                 id = "exhibitor"
                 value = "Exhibiting" />
          <label for = "exhibitor">Exhibiting</label>
 <br>
          <input type = "radio"
                 name = "regtype"
                 id = "both"
                 value = "Both - Sponsorship and Exhibiting" />
          <label for = "both">Both - Sponsorship and Exhibiting</label>
           
    </td>
  </tr>
  <tr >
      <td colspan="2" class="center"><input type="submit" name="submit" value="Submit"> </td>
  </tr>


</table>
         
   
</form>
