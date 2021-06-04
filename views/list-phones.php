<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Phone numbers</h2>
<select>
 <option>Select country</option>
  <?php foreach($countries as $country){ ?>
    <option value="<?= $country ?>" <?php (isset($_GET['country']) && $_GET['country'] == $country) ? 'selected':''?>><?= $country?></option>
  <?php } ?>
</select>

<select>
 <option>Select state</option>
 
</select>
<table>
<tr>
    <th>Country</th>
    <th>State</th>
    <th>Country code</th>
    <th>Phone</th>
  </tr>
<?php foreach($filterdPhones as $phone) { ?>
  <tr>
    <td><?= $phone['country'] ?></td>
    <td><?= $phone['state']  ?></td>
    <td><?= $phone['code'] ?></td>
    <td><?= $phone['phone'] ?></td>
  </tr>
  <?php }?>
</table>

</body>
</html>



