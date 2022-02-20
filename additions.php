<?php
include 'includes/database.php';
include_once 'includes/functions.php';


$sql = "SELECT * FROM `additions`";

//Extra's die je kan huren;
$tblAdditions = getData($sql, 'fetchAll');
?>
                <h4>Extra's (per persoon per dag)</h4>
                    <ul class="list-group list-group-flush">
                        <?php  
                        foreach($tblAdditions as $addition) { ?>
                            <li class="list-group-item"><?php echo $addition['addition_name'];?> &euro; <?php echo FormatNumber($addition['addition_price']);?></li>
                        <?php } //end foreach ?>
                    </ul>