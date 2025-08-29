<?php
include('../conn.php');

$tenant_id = $_POST['tenant_id'];

mysqli_query($conn, "DELETE FROM tenant WHERE tenant_id='$tenant_id'");

?>
<script>
    window.alert("Tenant deleted successfully.");
    window.location = 'tenants.php';
</script>