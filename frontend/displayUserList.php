<table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom d'utilisateur</th>
                <th scope="col">État admin</th>
                <th scope="col">changement de pouvoir</th>
            </tr>
        </thead>
        <tbody><?php
            while($donnee = $req -> fetch()){?>
                <tr>
                    <th scope="row"><?php echo $donnee["code"]; ?></td>
                    <td><?php echo $donnee["username"]; ?></td>
                    <td><?php
                            if ($donnee["is_admin"] == 0) {?>
                                <span style='color: green'>simple utilisateur</span><?php
                            } else {?>
                                <span style='color: blue'>Admin</span><?php
                            }
                        ?>
                    </td>
                    <td><?php
                            if ($donnee['is_admin'] == 0) {?>
                                <a name="changeToAdmin" id="changeToAdmin" class="btn btn-secondary" href="../../backend/change fonction/changeToAdmin.php?user= <?php echo  $donnee["code"];?>" role="button">Rendre admin</a> <?php
                            } else {?>
                                <a name="changeToUser" id="changeToUser" class="btn btn-danger" href="../../backend/change fonction/changeToUser.php?user= <?php echo  $donnee["code"];?>" role="button">Hôter admin</a><?php
                            }
                        ?>
                    </td>
                </tr><?php
            }?>
        </tbody>
    </table>

    <?php $req -> closeCursor(); ?>