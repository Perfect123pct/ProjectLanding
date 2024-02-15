<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
}
?>

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $about_banner; ?>);">
    <div class="inner">
        <h1><?php echo $about_title; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $about_content; ?>
                </p>

            </div>
        </div>
    </div>
</div>
<center>
 <a href="https://linkedin.com/in/adekola-oyewole-222591190"> <button style="background-color:blue; width:200px; height:30px; color:white; border-radius:5px;"> Linkedln </button> </a>
 <a href="https://github.com/Perfect123pct">  <button style="background-color:black; width:200px; height:30px; color:white; border-radius:5px;"> Github </button></a>
 <a href="https://twiter.com/Perfection999">  <button style="background-color:black; width:200px; height:30px; color:white; border-radius:5px;"> Twiter </button></a>
</center>
<?php require_once('footer.php'); ?>