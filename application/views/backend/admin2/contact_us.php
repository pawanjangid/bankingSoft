<hr>
<style type="text/css">
  table {
    border-collapse: collapse;
}

td {
    padding-top: 1em;
    padding-bottom: 1em;
}

</style>
<table border="0" width="100%">
    <tr>
          <td style="width: 50%; text-align: center;"><div style=""><h1 style="text-transform: uppercase;"><?php echo $this->db->get_where('settings',array('type' => 'system_name'))->row()->description; ?></h1></div></td>
        <td style="width: 50%; text-align: center;"><h1 style="text-transform: uppercase;">Enternal Connection</h1></td>
    </tr>
    <tr>
        <td style="width: 50%; text-align: center;">
           <h3><i class="entypo-mobile"></i>  <a href="tel:<?php echo $this->db->get_where('settings',array('type' => 'school_contact_no'))->row()->description; ?>" style="color: gray;"><?php echo $this->db->get_where('settings',array('type' => 'school_contact_no'))->row()->description; ?></a></h3>
        </td>
        <td style="width: 50%; text-align: center;" >
          <h3><i class="entypo-mobile"></i>Connect With Same Network (Local network)</h3>
        </td>
    </tr>
    <tr style="text-align: center; font-weight: 600;margin-top: 50px; text-decoration: none;">
      <td>
       <h3><i class="entypo-mail"></i>  <a href="mailto:<?php echo $this->db->get_where('settings',array('type' => 'system_email'))->row()->description; ?>" style="text-decoration: none;color: gray;"><?php echo $this->db->get_where('settings',array('type' => 'system_email'))->row()->description; ?></a></h3>
      </td>  
      <td>
        <h3><i class="entypo-network">  </i>Open Browser and Open This Link</h3>
      </td> 
    </tr>
    <tr style="margin-top: 10px;">
        <td style="width: 50%; text-align: center;">
        <center>
        <img style="max-height: 250px;" alt="upload img" src="<?php echo base_url() . 'uploads/logo.png';  ?>"/></center>

        </td>
        <td style="width: 50%;">
        <center><h1><a href="<?php
              $myIp = getHostByName(getHostName());
              echo 'http://'.$myIp;
              ?>">
          <?php
              $myIp = getHostByName(getHostName());
              echo $myIp;
              ?></a>
                </h1>
        </center>
        </td>
    </tr>

</table>