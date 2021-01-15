<footer>
    <div class="lien">
        <div>
            <a href="index.php?page=cv">CV</a>
        </div>
        <div>
            <a href="index.php?page=hobbie">Hobbies</a>
        </div>
        <div>
            <a href="index.php?page=contact">Contact</a>
        </div>
        <div>
            <a href="https://www.linkedin.com/in/pmartinet/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/600px-LinkedIn_logo_initials.png"
                     height="30" width="30" alt="logoLinkedIn">
            </a>
        </div>
        <div>
            <?php
            echo 'Ouverture de la session ' . $_SESSION['dateFirstVisit'];
            ?>
        </div>
        <div>
            <?php
            echo $_SESSION['countViewPage'] . ' Pages vues';
            ?>
        </div>
    </div>
</footer>
</body>

</html>
