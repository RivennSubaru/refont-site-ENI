<div>
    <span class="compteUser" style="display: flex;gap: 5px;align-items: center;cursor: pointer;">
        <span class="logoCompte" style="display: inline-block;color: white;background: green;padding: 7% 10%;border-radius: 50%;">A</span> <?php echo $_SESSION['nom_user'] ?>
        <div class="infoUser" style="position: absolute;top: 64px;color: white;background: #454545;padding: 15px;border-radius: 5px;display: none;flex-direction: column;gap: 20px;cursor: initial;">
            <div class="nomUser" style="border-bottom: 1px solid #6a6a6a;padding-bottom: 10px;"><?php echo $_SESSION['nom_user'] ?></div>
            <form action="../../backend/deconnexionUser.php" method="post">
            <button type="submit" name="logout" class="deconnexion" style="cursor: pointer;color: white;background: #454545;box-shadow: none;border: none;font-size: inherit;"><i class="fa-solid fa-right-from-bracket"></i> se deconnecter</button>
            </form>
        </div>
    </span>
</div>