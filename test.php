<table width="306" height="51" border="0" align="center" cellpadding="0" cellspacing="0" background="../../image/fbg.jpg">
    <tr>
      <td height="30">&nbsp;&nbsp;&nbsp;<img src="../../image/gpuce.gif" width="20" height="15" /><span class="style23">
      Modèle de la saisie de note</span></td>
    </tr>
    <tr>
      <td><form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Numero d'inscription:</td>
              <td><input type="text" name="numero_inscriion" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Nom de module:</td>
              <td><select name="m_code">
                  <?php 
do {  
?>
                  <option value="<?php echo $row_rs_module['m_code']?>" ><?php echo $row_rs_module['m_nom']?></option>
                  <?php
} while ($row_rs_module = mysql_fetch_assoc($rs_module));
?>
                </select>
              </td>
            </tr>
            <tr> </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Controle1:</td>
              <td><input type="text" name="controle1" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Controle2:</td>
              <td><input type="text" name="controle2" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">TD:</td>
              <td><input type="text" name="TD" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">TP:</td>
              <td><input type="text" name="TP" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Syntyse:</td>
              <td><input type="text" name="syntyse" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Rattrapage:</td>
              <td><input type="text" name="rattrapage" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">Rapport:</td>
              <td><input type="text" name="rapport" value="" size="32" /></td>
            </tr>
            <tr valign="baseline">
              <td nowrap="nowrap" align="right">&nbsp;</td>
              <td><input type="submit" value="Insérer" /></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1" />
        </form>
      <p>&nbsp;</p></td>
    </tr>
  </table>