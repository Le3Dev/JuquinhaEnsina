<section class="nav-section">
    <div class="nav-return">
        <form action="/JuquinhaEnsina/index.php" method="POST">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($back_page); ?>">
            <button type="submit" style="background: none; border: none; padding: 0;">
                <img src="/JuquinhaEnsina/Main/Images/esquerda.png" alt="return" width="50%">
            </button>
        </form>
    </div>
    
    <nav>
        <ul>
            <li><a href="/JuquinhaEnsina/index.php">Home</a></li>
            <li><?php echo htmlspecialchars($back_page); ?></li>
        </ul>
    </nav>
    
    <div class="nav-colorchange">
        <img src="/JuquinhaEnsina/Main/Images/logo.png" alt="Color Change Logo" width="70%">
    </div>
    
    <div class="nav-logo">
        <img src="/JuquinhaEnsina/Main/Images/logo.png" alt="Logo" width="70%">
    </div>
</section>