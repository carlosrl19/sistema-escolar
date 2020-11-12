<?php
    if ($_SESSION['permissions'] != 'admin')
    {
        header('Location: /');
        exit();
    }
    
    $id = $_POST['id'];
    $userimage = $_POST['userimage'];

    echo'
        <div class="form-data">
            <div class="head">
                <h1>Atención</h1>
            </div>
            <div class="delete">
                <h1>¿Eliminar registro?</h1>
                <form name="form-delete-users" action="delete.php" method="POST">
                    <input style="display: none;" type="text" name="txtuserid" value="'.$id.'" />
                    <input style="display: none;" type="text" name="txtuserimage" value="'.$userimage.'" />
                    <button class="btn-si icon icon-confirm" type="submit"></button>
                </form>
                <form action="#" method="POST">
                    <button class="btn-no icon icon-delete" name="btn" value="form_default" type="submit"></button>
                </form>
            </div>
        </div>
        <div class="form-options">
            <div class="options">
                <form action="#" method="POST">
                    <button class="btn disabled icon icon-plus" name="btn" value="form_add" type="submit" disabled></button>
                </form>
                <form action="#" method="POST">
                    <button class="btn disabled icon" name="btn" value="form_coding" type="submit" disabled>code</button>                </form>
                <form action="#" method="POST">
                    <button class="btn disabled icon" name="btn" value="form_printer" type="submit" disabled>print</button>
                </form>
                <form action="#" method="POST">
                    <button class="btnexit icon icon-exit" name="btn" value="form_default" type="submit"></button>
                </form>
            </div>
            <div class="search">
                <form name="form-search" action="#" method="POST">
                    <p>
                        <input type="text" class="text" name="search" placeholder="Buscar...">
                        <button class="btn-search icon" type="submit">search</button>
                    </p>
                </form>
            </div>
        </div>
    ';
?>