<?php
switch ($_SESSION['tela']) {
    case 'login':
        echo '<nav>
<div class="navegador">
    <a class="Logo" href="#">
        <h1>Callimo</h1>
    </a>
</div>
</nav>';
        break;
    case 'cadastro':
        echo '<nav>
        <a href="../"><img style="max-width: 4rem;" src="../utilitario/imgs/back-arrow.png" alt=""></a>
        <div class="navegador">
            <a class="Logo" href="#">
                <h1>Callimo</h1>
            </a>
        </div>
        </nav>';
        break;
}

if ($_SESSION['telas'] == 'cadastro') {
} elseif ($_SESSION['telas'] == 'cadastro') {
}
