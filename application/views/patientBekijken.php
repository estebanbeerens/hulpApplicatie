<script>
    $(document).ready(function(){
        $('.afmeldKnop').click(function(){

            var patientId = $(this).val();

            $.ajax({
                type: "POST",
                url: "meldPatientAf",
                data: {id: patientId}

            })
            location.reload();

        });

    });
</script>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Naam</th>

            <th>Voornaam</th>
            <th>geboortedatum</th>
            <th>woonplaats</th>
            <th>adres</th>
            <th>gebruikersnaam</th>
            <th>email</th>
            <th>afmelden</th>
        </tr>
        <?php foreach ($patient as $item){ ?>
            <tr>
                <td><?php echo $item->naam; ?></td>

                <td><?php echo $item->voornaam; ?></td>
                <td><?php echo $item->geboortedatum; ?></td>
                <td><?php echo $item->woonplaats; ?></td>
                <td><?php echo $item->adres; ?></td>
                <td><?php echo $item->gebruikersnaam; ?></td>
                <td><?php echo $item->email; ?></td>
                <td>
                    <?php if($item->isAangemeld == 1){ ?>

                        <button type="button" class="btn btn-primary afmeldKnop" value="<?php echo $item->id; ?>">
                            Afmelden
                        </button>


                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>