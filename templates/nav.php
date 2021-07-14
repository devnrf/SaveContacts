<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index">SafeContacts</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#safecontacts"
        aria-controls="safecontacts" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php  
    if(!isset($_SESSION['username'])){?>
    <div class="navbar-collapse collapse" id="safecontacts">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="signin">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Register</a>
            </li>
    </div>
    <?php }else{ ?>
    <div class="navbar-collapse collapse" id="safecontacts">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="contacts">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home">Add New Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/logout">Logout</a>
            </li>
    </div>
    <?php
    }
?>
</nav>