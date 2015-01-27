<div class="db_form">
    <div class="add">
    <form id="add" method="POST" action="">
        <input type="text" name="note" placeholder="+" /><br>
        <input type="submit" value="Add note" /><br>
    </form>
    </div>

    <div class="remove">
    <form id="remove" method="POST" action="">
        <input type="number" name="id" placeholder="-"/>
        <input type="submit" name="remove" value="Remove note" /><br>
    </form>
    </div>

    <div class="modify">
    <form id="modify" method="POST" action="">
        <input type="number" name="modifid"/ >
        <input type="text" name="modifnote" placeholder="+/-" />
        <input type="submit" name="modify" value="Modify note" /><br>
    </form>
    </div>

    <form id="logout" method="POST" action="">
        <input type="submit" name="logout" value="Logout"/>
    </form>
</div>