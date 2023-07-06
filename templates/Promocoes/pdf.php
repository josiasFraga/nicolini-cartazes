<!DOCTYPE html>
<html>
<head>
<title>PDF</title>
<style>
@page {
    margin: 0px 0px 0px 0px !important;
    padding: 0px 0px 0px 0px !important;
}
</style>
</head>
<body>
<?php foreach ($promocoesGrupo as $promocao): ?>
    <div style="page-break-after: always;">
        <!-- Add your promotion content here -->
        <h2><?= $promocao->title ?></h2>
        <p><?= $promocao->VlrVenda ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>