
      <h2>Montant des remboursements forfaitaires</h2>
<table>
            <?php
            echo "<tr> <th> </th> <th> Montant remboursé </th> </tr>";
            foreach ($lesRemboursements as $unRemboursement) {
                $libelle = $unRemboursement['libelle'];
                $montant = $unRemboursement['montant'];

                echo "<tr> <td> $libelle </td> <td> $montant </td> </tr>"; ?>
            <?php } ?>
        </table>
</div>