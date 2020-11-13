<?php
    if ($_SESSION['permissions'] != 'admin')
	{
		header('Location: /');
		exit();
    }
    
    echo'
        <div class="form-data">
            <div class="head">
                <h1>Atención</h1>
            </div>
            <div class="delete">
                <form name="form-delete-subjects" action="delete.php" method="POST">
                    <input style="display: none;" type="text" name="txtsubject" value="'.$_POST['txtsubject'].'" />
                    <h1>¿Eliminar registro?</h1>
                    <button class="btn-si icon" type="submit">check</button>
                </form>
                <form action="#" method="POST">
                    <button class="btn-no icon" name="btn" value="form_default" type="submit">close</button>
                </form>
            </div>
        </div>
        <div class="form-options">
            <div class="options">
                <form action="#" method="POST">
                    <button class="btn disabled icon" name="btn" value="form_add" type="submit" disabled>add</button>
                </form>
                <form action="#" method="POST">
                    <button class="btn disabled icon" name="btn" value="form_coding" type="submit" disabled>code</button>                </form>
                <form action="#" method="POST">
                    <button class="btn disabled icon" name="btn" value="form_printer" type="submit" disabled>print</button>
                </form>
                <form action="#" method="POST">
                    <button class="btn btnexit icon" name="btn" value="form_default" type="submit">close</button>
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