<table class="form-table">
  <tr>
    <th>
      <label for="liffery-code">
        Liffery Sidebar<br/>verification status:
      </label>
    </th>
    <td>
        <?php if ($validated) { ?>
          ✔ Verified<br/>
          <br/>
          The Liffery Sidebar is installed, to manage the Sidebar please see
          <a href="https://accounts.liffery.com">https://accounts.liffery.com</a>

        <?php } else { ?>
          ❌ Not verified<br/>
          <br/> Please see the verification instructions in the settings tab above to use the Liffery Sidebar
        <?php } ?>
    </td>
  </tr>
</table>
