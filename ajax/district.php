<?
include 'config.php';

$city = getValue('city', 'int', 'GET', 0);
$city = (int)$city;

$query = new db_query("SELECT * FROM city2 WHERE cit_parent = '$city'");
$dataDistrict = $query->result_array();
?>
<option value=""></option>
<?
foreach ($dataDistrict as $district) {
?>
    <option value="<?= $district['cit_id'] ?>"><?= $district['cit_name'] ?></option>

<?
}
?>